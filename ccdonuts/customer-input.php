<?php $page_title = '会員登録ページ'; ?>
<?php require_once 'includes/commonFunctions.php'; ?>
<?php require_once 'includes/dbConnect.php'; ?>
<?php require 'includes/header.php'; ?>



            <nav>
                <ol class="Breadcrumbs">
                        <li><a href="/ccdonuts/index.php">TOP</a></li>
                        <li><a href="/ccdonuts/login-input.php">ログイン</a></li>
                        <li>会員登録</li>
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
                <p class="Logintext">会員登録</p>
            </div>


            



        <?php
            $name=$furigana=$postcode_a=$postcode_b=$address=$mail=$mail_conf=$password=$password_conf='';

            if (isset($_SESSION['customer'])) {
                $name=$_SESSION['customer']['name'];
                $furigana=$_SESSION['customer']['furigana'];
                $postcode_a=$_SESSION['customer']['postcode_a'];
                $postcode_b=$_SESSION['customer']['postcode_b'];
                $address=$_SESSION['customer']['address'];
                $mail=$_SESSION['customer']['mail'];
                $mail_conf=$_SESSION['customer']['mail_conf'];
                $password=$_SESSION['customer']['password'];
                $password_conf=$_SESSION['customer']['password_conf'];
            }

            echo '<form action="confirm.php" method="POST" class="Registration-form">';
            
            echo '<dl>';
                    echo '<dt><label for="name"><span class="Confirm-Name">お名前</span><span class="Required">（必須）</span></label></dt>';
                        echo '<dd><input type="text" id="name" name="name" required placeholder="ドーナツ太郎" value="', h($name), '"></dd>';


                    echo '<dt><label for="kana"><span class="Confirm-Name">お名前（フリガナ）</span><span class="Required">（必須）</span></label></dt>';
                        echo '<dd><input type="text" id="kana" name="furigana" required placeholder="ドーナツタロウ" value="', h($furigana), '"></dd>';


                    echo '<dt><label for="zip"><span class="Confirm-Name">郵便番号</span><span class="Required">（必須）</span></label></dt>';
                        echo '<dd class="Zip-group">';
                            echo '<input type="text" id="zip1" name="postcode_a" class="Zip-short" maxlength="3" required placeholder="123" value="', h($postcode_a), '">';
                            echo '<span class="Hyphen"></span>';
                            echo '<input type="text" id="zip2" name="postcode_b" class="Zip-long" maxlength="4" required placeholder="4567" value="', h($postcode_b), '">';
                            echo '</dd>';


                    echo '<dt><label for="address"><span class="Confirm-Name">住所</span><span class="Required">（必須）</span></label></dt>';
                        echo '<dd><input type="text" id="address" name="address" required placeholder="千葉県〇〇市中央1-1-1" value="', h($address), '"></dd>';


                    echo '<dt><label for="email"><span class="Confirm-Name">メールアドレス</span><span class="Required">（必須）</span></label></dt>';
                        echo '<dd><input type="email" id="email" name="mail" required placeholder="123@gmail.com"value="', h($mail), '"></dd>';


                    echo '<dt><label for="email"><span class="Confirm-Name">メールアドレス確認用</span><span class="Required">（必須）</span></label></dt>';
                        echo '<dd><input type="email" id="email_conf" name="mail_conf" required placeholder="123@gmail.com" value="', h($mail_conf), '"></dd>';


                    echo '<dt><label for="password"><span class="Confirm-Name">パスワード</span><span class="Required">（必須）</span></label>';
                        echo '<span class="Required2">半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</span></dt>';
                        echo '<dd><input type="password" id="password" name="password" required placeholder="123456abcd" value="', h($password), '"></dd>';


                    echo '<dt><label for="password"><span class="Confirm-Name">パスワード確認用</span><span class="Required">（必須）</span></label></dt>';
                        echo '<dd><input type="password" id="password_conf" name="password_conf" required placeholder="123456abcd" value="', h($password_conf), '"></dd>';


            echo '</dl>';
                echo '<button type="submit">入力確認する</button>';
            

            echo '</form>';
        ?>
 <?php require 'includes/footer.php'; ?>