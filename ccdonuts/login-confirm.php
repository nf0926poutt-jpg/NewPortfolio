<?php $page_title = '会員登録完了ページ'; ?>
<?php require_once 'includes/commonFunctions.php'; ?>
<?php require_once 'includes/dbConnect.php'; ?>
<?php require 'includes/header.php'; ?>
            <nav>
                <ol class="Breadcrumbs">
                        <li><a href="/ccdonuts/index.php">TOP</a></li>
                        <li><a href="/ccdonuts/login-input.php">ログイン</a></li>
                        <li><a href="/ccdonuts/customer-input.php">会員登録</a></li>
                        <li><a href="/ccdonuts/confirm.php">入力確認</a></li>
                        <li>会員登録完了</li>
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
            <p class="Logintext">会員登録完了</p>
        </div>


    <?php

            //confirm.phpから届いたPOSTデータを変換して変数に代入
            $name       = $_POST['name'];
            $furigana   = mb_convert_kana($_POST['furigana'], 'k', 'UTF-8');
            $postcode_a = mb_convert_kana($_POST['postcode_a'], 'n', 'UTF-8');
            $postcode_b = mb_convert_kana($_POST['postcode_b'], 'n', 'UTF-8');
            $address    = $_POST['address'];
            $mail       = $_POST['mail'];
            $password   = mb_convert_kana($_POST['password'], 'a', 'UTF-8');

            //SQL文を準備（idは自動採番なのでnull、それ以外はプレースホルダ ? を使用 p228）
            $sql=$pdo->prepare('insert into customers values(null, ?, ?, ?, ?, ?, ?, ? )');

            //SQLを実行し、結果（成功・失敗）をメッセージに格納
            if ($sql->execute([$name, $furigana, $postcode_a, $postcode_b, $address, $mail, $password])) {
                $message =  '会員登録が完了しました。';//成功

                // 登録したユーザー名をセッションに保存（ログイン状態にする）
                $_SESSION['customer'] = ['name' => $name];

            } else {
                $message = 'エラーが発生したため、登録できませんでした。';//失敗
            }

        ?>




        <div class="Login-Area">

                <div class="Login-Inside">
                    <div class="Registration-Complete">
                        <?php echo h($message); ?>
                    </div>

                    <div class="Message-Success">
                        ログインページへお進みください。
                    </div>
                </div>    
        </div>

            <div class="Next-Page">
                <a href="#">クレジットカード登録へすすむ</a>
            </div>

            <div class="Order-Confirm-Btn">
                <a href="#">購入確認ページへすすむ</a>
            </div>

    

<?php require 'includes/footer.php'; ?>