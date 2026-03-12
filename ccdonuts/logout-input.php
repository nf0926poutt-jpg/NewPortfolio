<?php $page_title = 'ログアウト確認ページ'; ?>
<?php require_once 'includes/commonFunctions.php'; ?>

<?php require 'includes/header.php'; ?>

            <nav>
                <ol class="Breadcrumbs">
                        <li><a href="/ccdonuts/index.php">TOP</a></li>
                        <li>ログアウト確認</li>
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


         <div class="Login-Area">
            <form action="logout-output.php" method="post">

                <div class="Login-Inside">
                    <div class="Login-Name">
                        ログアウトしますか？<br>
                    </div>
                </div>    

                <div class="Login-Btn">
                    <input type="submit" value="ログアウト">
                </div>
            </form>
        </div>

                <div class="Back-Top-Btn">
                        <a href="index.php">TOPページへもどる</a>
                </div>

                

<?php require 'includes/footer.php'; ?>