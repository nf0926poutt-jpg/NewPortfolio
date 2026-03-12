
<header class="mainHeader">
    <style>
        .mainHeader {
            background-image: url('<?php echo $headerImagePath; ?>');
        }
        @media screen and (max-width: 768px) {
            .mainHeader {
                background-image: url('<?php echo $headerImagePathSp; ?>');
            }
        }
    </style>
        <div class="headerAll"> <div class="headerLogo"> <a href="/OkinawaTravel/index.php">
                <img src="images/Logo.png" alt="トリップジャパンロゴ">
            </a>
        </div>
        <button type="button" class="menuLogo2" id="js-hamburger">
            <img src="images/Menu.png" alt="メニューアイコン">
        </button>
    </div>
    <?php require 'drawer.php'; ?>
</header>