
<?php $page_title = '入力確認'; ?>
<?php require_once 'includes/commonFunctions.php'; ?>
<?php require_once 'includes/dbConnect.php'; ?>
<?php require 'includes/header.php'; ?>


<nav>
                <ol class="Breadcrumbs">
                        <li><a href="/ccdonuts/index.php">TOP</a></li>
                        <li><a href="/ccdonuts/login-input.php">ログイン</a></li>
                        <li><a href="/ccdonuts/customer-input.php">会員登録</a></li>
                        <li>入力確認</li>
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
                <p class="Logintext">入力確認</p>
            </div>

                <!---  入力確認ページ  --->

<?php
    //教科書で作成した会員登録をもとに（ｐ284）を参考に生成ＡＩに道筋をたててもらいながら作成しています。

    //POSTデータを変数に整理
    $name = $_POST['name'];
    $furigana = $_POST['furigana'];
    $postcode_a = $_POST['postcode_a'];
    $postcode_b = $_POST['postcode_b'];
    $address = $_POST['address'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    //mb_convert_kanaですべて半角に変換
    $furigana = mb_convert_kana($_POST['furigana'], 'k', 'UTF-8');
    $postcode_a = mb_convert_kana($_POST['postcode_a'], 'n', 'UTF-8');
    $postcode_b = mb_convert_kana($_POST['postcode_b'], 'n', 'UTF-8');
    $password = mb_convert_kana($_POST['password'], 'a', 'UTF-8');

    

    //正規表現を用いてメールの形式チェック！を使い違えばechoを表示。
    if (!preg_match('/^.+@.+$/', $mail)) {

    echo'メールアドレスの形式が正しくありません。';

    //郵便番号の形式チェック（aが3桁、またはbが4桁でない場合）！を使いAかBのどちらかでも違えばelseif のechoを表示。
    } else if (!preg_match('/^[0-9]{3}$/', $postcode_a) || !preg_match('/^[0-9]{4}$/', $postcode_b)){
        echo'郵便番号を正しく入力してください。';

    //正規表現を用いてメールの形式チェック！を使い違えばechoを表示。
    } else if (!preg_match('/^[a-zA-Z0-9]{8,20}$/', $password)) {
        echo 'パスワードは半角英数字8〜20文字で入力してください。記号は使えません。';
    

    
    
    //形式がすべてOKな場合、ここからDB処理
    } else {

            //同じメールアドレスが既に登録されていないかデータベース内を検索
                $sql=$pdo->prepare('select * from customers where mail=?');
                $sql->execute([$mail]);

                //重複チェックの結果判定
                // fetchAllの結果が空（empty）であれば、まだ登録されていない＝登録可能
                if (empty($sql->fetchAll())) {

                //  登録可能な場合の表示（確認フォーム）
                echo '<form action="login-confirm.php" method="POST" class="Registration-form">';
                    echo '<dl>';
                        echo '<dt><span class="Confirm-Name">お名前</span></dt>';
                        echo '<dd><span class="Confirm-height">', h($_POST['name']), '</span></dd>';
                        echo '<input type="hidden" name="name" value="', h($_POST['name']), '">';
                        
                         echo '<dt><span class="Confirm-Name">お名前（フリガナ）</span></dt>';
                        echo '<dd><span class="Confirm-height">', h($_POST['furigana']), '</span></dd>';
                        echo '<input type="hidden" name="furigana" value="', h($_POST['furigana']), '">';

                        echo '<dt><span class="Confirm-Name">郵便番号</span></dt>';
                        echo '<dd><span class="Confirm-height">',h($_POST['postcode_a']), htmlspecialchars($_POST['postcode_b']),'</span></dd>';
                        echo '<input type="hidden" name="postcode_a" value="', h($_POST['postcode_a']), '">';
                        echo '<input type="hidden" name="postcode_b" value="', h($_POST['postcode_b']), '">';

                        echo '<dt><span class="Confirm-Name">住所</span></dt>';
                        echo '<dd><span class="Confirm-height">', h($_POST['address']), '</span></dd>';
                        echo '<input type="hidden" name="address" value="', h($_POST['address']), '">';

                        echo '<dt><span class="Confirm-Name">メールアドレス</span></dt>';
                        echo '<dd><span class="Confirm-height">', h($_POST['mail']), '</span></dd>';
                        echo '<input type="hidden" name="mail" value="', h($_POST['mail']), '">';

                        echo '<dt><span class="Confirm-Name">パスワード</span></dt>';
                        echo '<dd><span class="Confirm-height">', h($_POST['password']), '</span></dd>';
                        echo '<input type="hidden" name="password" value="', h($_POST['password']), '">';
                    echo '</dl>';


                    echo '<button type="submit">登録する</button>';
                    echo ' </form>';

                } else {

                    // 重複があった場合の表示
                    echo 'すでに登録済みです。';

                }


    };


   
    

   
?>



<?php require 'includes/footer.php'; ?>