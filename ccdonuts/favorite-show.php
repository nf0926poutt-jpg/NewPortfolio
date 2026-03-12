<?php $page_title = 'お気に入りページ'; ?>
<?php require_once 'includes/commonFunctions.php'; ?>
<?php require_once 'includes/dbConnect.php'; ?>
<?php require 'includes/header.php'; ?>

<?php
// 詳細ページと同じ画像マップ
$imageMap = [
    1 => 'PCCCdonuts', 2 => 'PCchocolatedelite', 3 => 'PCcharameldonuts',
    4 => 'PCplanedonuts', 5 => 'PCNewdonuts', 6 => 'PCStorowberrydonuts',
    7 => 'PCFrutsmix1', 8 => 'PCFritsmix2', 9 => 'PCBestselectionbox',
    10 => 'PCchocolateclashu', 11 => 'PCclemebox', 12 => 'PCclemebox9'
];
?>

<nav>
    <ol class="Breadcrumbs">
        <li><a href="/ccdonuts/index.php">TOP</a></li>
        <li><a href="/ccdonuts/#">マイページ</a></li>
        <li>お気に入り一覧</li>
    </ol>
</nav>

<div class="Username2">
    <?php echo isset($_SESSION['customer']) ? h($_SESSION['customer']['name']) . ' 様' : 'ようこそ ゲスト 様'; ?>
</div>

<div class="Login-Title">
    <p class="Logintext">お気に入り一覧</p>
</div>

<div class="Login-Area">
<?php
if (isset($_SESSION['customer'])) {
    // ユーザーのお気に入り商品IDをデータベースから取得
    $sql_fav = $pdo->prepare('select product_id from favorite where customer_id = ?');
    $sql_fav->execute([$_SESSION['customer']['id']]);
    $favorite_list = $sql_fav->fetchAll();

    // 2. お気に入りリストが空でないか確認
    if (!empty($favorite_list)) {
        foreach ($favorite_list as $fav) {
            // 商品IDを元に、商品の詳細情報を取得
            $sql_item = $pdo->prepare('select * from products where id = ?');
            $sql_item->execute([$fav['product_id']]);
            $item = $sql_item->fetch();

            if ($item) {
                // 表示用画像名の決定
                $imageName = isset($imageMap[$item['id']]) ? $imageMap[$item['id']] : $item['id'];
                ?>
                <div class="Productsdetails1">
                    <div class="Productsdetailsimage">
                        <img src="images/<?php echo $imageName; ?>.png" class="product-image" alt="<?php echo h($item['name']); ?>">
                    </div>
                    <div class="ProductsdetailsRight">
                        <div class="Productsdetailstitle">
                            <p><?php echo h($item['name']); ?></p>
                        </div>
                        <div class="Pricered2">
                            <p><?php echo formatPrice($item['price']); ?></p>
                        </div>

                        <form action="cart-insert.php" method="post" class="Favorite-Cart-Form">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <input type="hidden" name="name" value="<?php echo $item['name']; ?>">
                            <input type="hidden" name="price" value="<?php echo $item['price']; ?>">

                                <div class="Qty-Group">
                                    <input type="number" name="count" value="1" min="1" max="99"> 個
                                    <button type="submit" class="Add-Cart-Btn">カートに入れる</button>
                                </div>
                        </form>
                        
                        <div class="Favorite-Action" >
                            <a href="favorite-delete.php?id=<?php echo $item['id']; ?>" class="Delete-Link">削除する</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    } else {
        //お気に入り登録がない時のメッセージ
        echo '<p class="Favorite-Font">お気に入り商品はありません。</p>';
    }
} else {
    //ログインしていないときのメッセージ
    echo '<p class="Favorite-Font">ログインしてください。</p>';
}
?>
</div> <?php require 'includes/footer.php'; ?>