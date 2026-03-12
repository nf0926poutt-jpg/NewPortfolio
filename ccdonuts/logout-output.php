<?php $page_title = 'ログアウトページ'; ?>

<?php require_once 'includes/commonFunctions.php'; ?>
<?php require 'includes/header.php'; ?>

            <nav>
                <ol class="Breadcrumbs">
                        <li><a href="/ccdonuts/index.php">TOP</a></li>
                        <li>ログアウト</li>
                </ol>
            </nav>
        

        <?php
                if (isset($_SESSION['customer'])) {
                        unset($_SESSION['customer']);
                        echo '<div class="Username2">ようこそ ゲスト 様</div>';
                        echo ' <div class="Login-Title">
                         <p class="Logintext">ログアウト完了</p>
                        </div>
                        <div class="Login-Area">
                                <p class="Login-Complete">ログアウトが完了しました。</p>
                                <p class="Enjoy-Message">またのご来店をお待ちしております!</p>
                        </div>';
                }  else {
                        echo '<div class="Username2">ようこそ ゲスト 様</div>';
                        echo ' <div class="Login-Area">
                        <p class="Login-Complete">すでにログアウトしています。</p>
                        </div>';
                }
                ?>
                
                

                <div class="Back-Top-Btn">
                        <a href="index.php">TOPページへもどる</a>
                </div>

                

<?php require 'includes/footer.php'; ?>