

<?php
// ファイル名を取得
$currentFileName = basename($_SERVER['PHP_SELF']);
?>

<?php if ($currentFileName === 'index.php'): ?>
    <div id="loadingView">
        <img src="images/okinawaloading.jpg" alt="Loading" class="loadingImage">
    </div>
<?php endif; ?>


<header class="mainHeader2">
    <div class="headerAll"> <div class="headerLogo">
            <a href="/OkinawaTravel/index.php">
                <img src="images/Logo.png" alt="トリップジャパンロゴ">
            </a>
        </div>
        <button type="button" class="menuLogo2" id="js-hamburger">
            <img src="images/Menu.png" alt="メニューアイコン">
        </button>
    </div>
    <?php require 'drawer.php'; ?>
</header>