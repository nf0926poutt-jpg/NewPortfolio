<?php $page_title = 'お気に入り'; ?>

<?php require_once 'includes/commonFunctions.php'; ?>
<?php require_once 'includes/dbConnect.php'; ?>
<?php require 'includes/header.php'; ?>


<?php
// ★ここで商品情報を取得する
$sqlProduct = $pdo->prepare('select * from products where id = ?');
$sqlProduct->execute([$_REQUEST['id']]);
$row = $sqlProduct->fetch(); 
?>
<nav>
        <ol class="Breadcrumbs">
            <li><a href="/ccdonuts/index.php">TOP</a></li>
            <li><a href="/ccdonuts/#">マイページ</a></li>
            <li><?php echo h($row['name']); ?></li>
        </ol>
    </nav>

    <div class="Username2">
        <?php echo isset($_SESSION['customer']) ? h($_SESSION['customer']['name']) . ' 様' : 'ようこそ  ゲスト 様'; ?>
    </div>

     <div class="Login-Title">
            <p class="Logintext">お気に入り</p>
    </div>

    <?php
    // ログインしている人の「商品ID」をお気に入りテーブルから全部取ってくる
    $sql_fav = $pdo->prepare('select product_id from favorite where customer_id = ?');
    $sql_fav->execute([$_SESSION['customer']['id']]);

    // 全データを取り出す
    $favorite_list = $sql_fav->fetchAll();

    if (!empty($favorite_list)) {
        echo '<div class="Favorite-List">';

        //とってきた商品IDを１つずつループで回す
        foreach ($favorite_list as $fav) {
            $p_id = $fav['product_id'];

            //そのIDを使って、productsテーブルから商品の詳細（名前や価格）をとってくる
            $sql_item = $pdo->prepare('select * from products where id = ?');
            $sql_item->execute([$p_id]);
            $item = $sql_item->fetch();

            //画面に表示する
            if ($item) {
                echo '<div class="Favorite-Item">';
                echo '<p>' . h($item['name']) .  '</p>';
                echo '<p>' . formatPrice($item['price']) .  '</p>';
                echo '<a href ="favorite-delete.php?id=' . h($item['id']) . '">削除</a>';
                echo '</div>';
            }
        }
    } else {
        echo '<p>お気に入り商品はありません。</p>';
    }

?>    


<?php require 'includes/footer.php';?>

    