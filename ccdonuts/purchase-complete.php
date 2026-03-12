<?php $page_title = '購入完了ページ'; ?>
<?php require_once 'includes/commonFunctions.php'; ?>
<?php require_once 'includes/dbConnect.php'; ?>
<?php require 'includes/header.php'; ?>

<?php
// 購入処理（DB保存）
// 本来はここで $pdo を使って INSERT しますが、
// 時間がない場合は「カートを空にする」だけで「買ったこと」にできます。
if (isset($_SESSION['product'])) {
    // ここでDB保存処理を入れる（今回は省略してカートクリアを優先）
    unset($_SESSION['product']); 
}
?>
           <nav>
                <ol class="Breadcrumbs">
                        <li><a href="/ccdonuts/index.php">TOP</a></li>
                        <li><a href="/ccdonuts/cart.php">カート</a></li>
                        <li><a href="/ccdonuts/purchase-final.php">購入確認</a></li>
                        <li>購入完了</li>
                </ol>
            </nav>

        <div class="Username2">
                <?php
                // ログイン状態（セッションがあるか）を確認して名前を表示
                if (isset($_SESSION['customer'])) {
                        echo h($_SESSION['customer']['name']), ' 様';
                } else {
                        echo 'ようこそ  ゲスト 様';
                }
                ?>
            </div>

        <div class="Login-Title">
            <p class="Logintext">購入完了</p>
        </div>
                
                        <div class="Login-Area">
                                <p class="Login-Complete">ご購入いただきありがとうございます。</p>
                                <p class="Enjoy-Message">今後ともご愛顧の程、宜しくお願いいたします。</p>
                        </div>
                        

                <div class="Back-Top-Btn">
                        <a href="index.php">TOPページへすすむ</a>
                </div>

                

<?php require 'includes/footer.php'; ?>