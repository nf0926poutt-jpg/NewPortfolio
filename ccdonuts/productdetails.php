<?php 
require_once 'includes/commonFunctions.php';
require_once 'includes/dbConnect.php'; 

$page_title = 'ProductDetails'; 
require 'includes/header.php'; 

// 画像ファイル名とIDの紐付け
$imageMap = [
    1 => 'PCCCdonuts', 2 => 'PCchocolatedelite', 3 => 'PCcharameldonuts',
    4 => 'PCplanedonuts', 5 => 'PCNewdonuts', 6 => 'PCStorowberrydonuts',
    7 => 'PCFrutsmix1', 8 => 'PCFritsmix2', 9 => 'PCBestselectionbox',
    10 => 'PCchocolateclashu', 11 => 'PCclemebox', 12 => 'PCclemebox9'
];

        // 商品情報の取得
        $sql = $pdo->prepare('select * from products where id=?');
        $sql->execute([$_GET['id']]);
        $row = $sql->fetch(); // 1件だけなのでfetch()

if ($row) {
    // --- お気に入り状態の判定処理 ---
    $isFavorite = false;
        if (isset($_SESSION['customer'])) {
            // ログイン中なら、この商品がお気に入りテーブルにあるか確認
            $sql_fav = $pdo->prepare('SELECT * FROM favorite WHERE customer_id = ? AND product_id = ?');
            $sql_fav->execute([$_SESSION['customer']['id'], $row['id']]);
            if ($sql_fav->fetch()) {
                $isFavorite = true;
            }
        }
    // IDに対応する画像名
    $imageName = isset($imageMap[$row['id']]) ? $imageMap[$row['id']] : $row['id'];
?>

    <nav>
        <ol class="Breadcrumbs">
            <li><a href="/ccdonuts/index.php">TOP</a></li>
            <li><a href="/ccdonuts/products.php">商品一覧</a></li>
            <li><?php echo h($row['name']); ?></li>
        </ol>
    </nav>

    <div class="Username2">
        <?php echo isset($_SESSION['customer']) ? h($_SESSION['customer']['name']) . ' 様' : 'ようこそ  ゲスト 様'; ?>
    </div>

    <div class="Productsdetails1">
        <div class="Productsdetailsimage">
            <img src="images/<?php echo $imageName; ?>.png" class="product-image" alt="<?php echo h($row['name']); ?>">
        </div>

        <div class="ProductsdetailsRight">
            <div class="Productsdetailstitle">
                <p><?php echo h($row['name']); ?></p>
            </div>

            <div class="Productsdetailstext">
                <p><?php echo h($row['introduction']); ?></p>
            </div>

            <div class="Pricered2">
                <p><?php echo formatPrice($row['price']); ?></p>
            </div>

            <form action="cart-insert.php" method="post">
                <div class="ActionButtons">
                    <select name="count" class="qty-input">
                        <?php for ($i=1; $i<=10; $i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select> 個

                    <div class="Addcart2">
                        <input type="submit" value="カートに入れる">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="name" value="<?php echo h($row['name']); ?>">
                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                    </div>

                    <?php
                    if (isset($_SESSION['customer'])) {
                        // ログイン済みの場合の出し分け
                        if ($isFavorite) {
                                // すでに登録済み：赤いハートを表示し、クリックで削除へ
                                echo '<a href="favorite-delete.php?id=', $row['id'], '"><img src="images/favorite.png" alt="お気に入り解除" class="FavoriteBtn"></a>';
                            } else {
                                // 未登録：通常のハートを表示し、クリックで追加へ
                                echo '<a href="favorite-insert.php?id=', $row['id'], '"><img src="images/Myfavorite.png" alt="お気に入り登録" class="FavoriteBtn"></a>';
                            }
                        }  else {
                                // ログインしていない場合
                                // クリックしたらログインページへ飛ばす、もしくはアラートを出す
                                echo '<a href="login-input.php" onclick="return confirm(\'お気に入り登録にはログインが必要です。ログイン画面へ移動しますか？\')">';
                                echo '<img src="images/Myfavorite.png" alt="お気に入り" class="FavoriteBtn"></a>';
                            }                
                     ?>
                </div>
            </form>
        </div>
    </div>

                    <?php 
                    } else {
                        echo '<p>商品が見つかりませんでした。</p>';
                    }
                    ?>
       <?php require 'includes/footer.php';?>