<?php $page_title = 'ログイン完了ページ'; ?>
<?php require_once 'includes/commonFunctions.php'; ?>
<?php require_once 'includes/dbConnect.php'; ?>
<?php require 'includes/header.php'; ?>





            <nav>
                <ol class="Breadcrumbs">
                        <li><a href="/ccdonuts/index.php">TOP</a></li>
                        <li>ログイン</li>
                </ol>
            </nav>

        <?php
                //（前回のログイン情報）を消去する
                unset($_SESSION['customer']);
        
                //入力されたメールとパスワードに一致する顧客を検索するSQLを準備
                $sql=$pdo->prepare('select * from customers where mail=? and password=?');

                //SQLを実行し、ユーザーが入力した値を当てはめる
                $sql->execute([$_POST['mail'], $_POST['password']]);

                //検索結果をループで取り出し、セッションに保存（ログイン状態にする）
                foreach ($sql as $row) {

                        // ログイン状態（セッションがあるか）を確認して名前を表示
                        $_SESSION['customer']=[
                                'id'=>$row['id'], 'name'=>$row['name'],
                                'furigana'=>$row['furigana'], 'postcode_a'=>$row['postcode_a'],
                                'postcode_b'=>$row['postcode_b'], 'address'=>$row['address'],
                                'mail'=>$row['mail'], 'password'=>$row['password'],
                        ];
                }
                ?>

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



        <?php
                //ログインに成功したか失敗したかで表示するメッセージを切り替える
                if (isset($_SESSION['customer'])) {
                        // ログイン成功時の表示
                        echo ' <div class="Login-Title">
                         <p class="Logintext">ログイン完了</p>
                        </div>
                        <div class="Login-Area">
                                <p class="Login-Complete">ログインが完了しました。</p>
                                <p class="Enjoy-Message">引き続きお楽しみください。</p>
                        </div>
                        <div class="Confirm-Btn">
                                <a href="purchase-confirm.php">購入確認ページへすすむ</a>
                        </div>';
                } else {
                        // ログイン失敗時の表示
                        echo '<div class="Login-Title">
                                <p class="Logintext">ログインエラー</p>
                                </div>
                        <div class="Login-Area">
                                <p class="Login-Complete">メールアドレス又はパスワードが違います。</p>
                                <p class="Login-Complete"><a href="login-input.php">ログインページはこちら</a></p>
                                <p class="Not-Enjoy-Message"><a href="#">パスワードを忘れた方はこちら</a></p>
                                </div>';
                }
                ?>



                
               

                 

                
                <div class="New-Member">
                        <a href="/ccdonuts/logout-input.php">ログアウトはこちら</a>
                </div>

                <div class="Back-Top-Btn">
                        <a href="index.php">TOPページへもどる</a>
                </div>

                

<?php require 'includes/footer.php'; ?>