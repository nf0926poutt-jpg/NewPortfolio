<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ccdonuts/common/reset.css">
    <link rel="stylesheet" href="/ccdonuts/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <title>C.C.Donuts<?php if (isset($page_title)) {
                        echo ' | ' .$page_title;
    };
    ?></title>
</head>
<body>
    <header>
        <div class="Square">
            <div class="Headertop">
                <button class="DrawerBtn" aria-label="メニュー">
                    <span></span><span></span><span></span>
                </button>

                <div class="Headerlogo">
                    <a href="index.php"><img src="/ccdonuts/images/PCheaderlogo.png" alt="ヘッダーロゴ"></a>
                </div>



                



            
            <?php //ログインしてるかしてないかで「ログイン」「ログアウト」の表示が変わるように設定
                echo '<div class="Headerlicon">';
                if (isset($_SESSION['customer'])) {
                    //ログイン時
                    echo '<a href="/ccdonuts/logout-input.php">';
                    echo '<img src="/ccdonuts/images/logOut.png" alt="ログアウトロゴ" class="logOut-logo">';
                    echo '</a>';
                }else {//ログインしてないとき
                    echo '<a href="/ccdonuts/login-input.php">';
                    echo '<img src="/ccdonuts/images/Loginlogo.png" alt="ログインロゴ"></a>';
                }   //どちらとも表示
                    echo'<a href="/ccdonuts/cart.php"><img src="/ccdonuts/images/Cartlogo.png" alt="カートロゴ"></a>';
                    echo '</div>';
                    ?>


            </div>
        </div>

        <div class="Seach">
            <div class="SearchIconBox">
                <a href="#"><img src="/ccdonuts/images/Iconfrem.png" alt="" class="IconBg"></a>
                <img src="/ccdonuts/images/PCrenzu.png" alt="検索" class="IconLens">
            </div>
            <input type="text" name="seach">
        </div>

        <nav class="GMenu">
            <input class="Menu-btn" type="checkbox" id="menu-btn">
            <label class="Menu-icon" for="menu-btn">
                <span class="Navicon"></span>
            </label>
            <ul class="Menu">
                <img src="/ccdonuts/images/PCheaderlogo.png" alt="PcHeaderLogo">
                <li><a href="/ccdonuts/index.php">TOP</a></li>
                <li><a href="/ccdonuts/products.php">商品一覧</a></li>

                <?php 
                // 3. ログイン or マイページ
                if (isset($_SESSION['customer'])) {
                    echo '<li><a href="/ccdonuts/mypage.php">マイページ</a></li>';
                    echo '<li><a href="/ccdonuts/favorite-show.php">お気に入り</a></li>';
                } else {
                    echo '<li><a href="/ccdonuts/login-input.php">ログイン</a></li>';
                }
                // 4. カート
                echo '<li><a href="/ccdonuts/cart.php">カート</a></li>';

                // 5. ログアウト（ログイン時のみ）
                if (isset($_SESSION['customer'])) {
                    echo '<li><a href="/ccdonuts/logout-input.php">ログアウト</a></li>';
                }

                // 6. その他
                echo '<li><a href="#">よくある質問</a></li>';
                echo '<li><a href="#">問い合わせ</a></li>';
                echo '<li><a href="#">当サイトのポリシー</a></li>';
                ?>
                
            </ul>
        </nav>
    </header>





   