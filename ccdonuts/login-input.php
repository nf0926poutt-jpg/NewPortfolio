<?php $page_title = 'ログインページ'; ?>
<?php require_once 'includes/commonFunctions.php'; ?>
<?php require 'includes/header.php'; ?>

    <nav>
            <ol class="Breadcrumbs">
                    <li><a href="/ccdonuts/index.php">TOP</a></li>
                    <li>ログイン</li>
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
            <p class="Logintext">ログイン</p>
        </div>

        <?php if (isset($_GET['reason']) && $_GET['reason'] === 'purchase'): ?>
            <div class="LoginMessage">
                <p>ご購入手続きには、ログインが必要です。</p>
                <p>会員登録がまだの方は、新規登録をお願いします。</p>
            </div>
        <?php endif; ?>

        <div class="Login-Area">
            <form action="login-output.php" method="post">

                <div class="Login-Inside">
                    <div class="Login-Name">
                        メールアドレス<input type="email" name="mail"><br>
                    </div>

                    <div class="Login-Password">
                        パスワード<input type="password" name="password"><br>
                    </div>
                </div>    

                <div class="Login-Btn">
                    <input type="submit" value="ログインする">
                </div>
            </form>
        </div>

            <div class="New-Member">
                <a href="/ccdonuts/customer-input.php">会員登録はこちら</a>
            </div>




<?php require 'includes/footer.php'; ?>