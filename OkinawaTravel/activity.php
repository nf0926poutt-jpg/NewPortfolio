<?php require 'includes/meta.php'; ?>
<?php
  $headerImagePath = "images/Activities_Header.png"; 
  $headerImagePathSp = "images/activities_mv.png";
  $pageTitle = "Activities"; 

  require_once('includes/header.php'); 
  require_once('includes/breadcrumb.php'); 
?>



    <main>
        <div class="SubTitle">
            <h1>Activities</h1>
            <h2>アクティビティ</h2>
        </div>

        <section id="ActivitiesIntro">
            <div class="IntroBox">
                <div class="Introduction">
                    <p class="IntroTitle">青く無垢な大自然を堪能する</p>
                        <p class="IntroText">沖縄の本島・離島には海をはじめとする自然を活かしたアクティビティが豊富にあります。
                            水上・水中・空中を使った遊びは日常では味わえない沖縄ならではなもの。
                            「ここにしかない」遊びをご紹介します。<p>
                </div>
                    <div class="IntroImg">
                        <img src="images/Activites_Intro_img.png" alt="アクティビティイントロ用画像">
                    </div>
            </div>
        </section>

        <section id="activitiesContents">
            <div class="tabMenu">
                <button class="tabItem active" datatab="0">DIVING</button>
                    <button class="tabItem" datatab="1">SEA KAYAK</button>
                <button class="tabItem" datatab="2">PARASAILING</button>
            </div>
            <div id="tabContent">
                <img src="images/Actitivities_Tab_img1.png" alt="ダイビング画像" id="tabImage">
                    <div class="activitiesContentsBox">
                        <p class="activitiesContentsTitle" id="tabTitle">水中の世界</p>
                        <p class="activitiesContentsText" id="tabDescription">沖縄の海と言えば「ダイビング」。透き通った海水から織り成す青色はまさに幻想的。水に包まれながら癒される空間を味わえます。</p>
                            <div class="activitiesLine"></div>
                            <p class="activitiesContentsText" id="tabPrice">費用相場：￥13,200～￥26,400</p>
                    </div>
            </div>
        </section>



        <section id="PriceLocation">
            <div class="priceArea">
                <div class="priceTitle"><img src="images/Price.svg" alt="価格タイトル"></div>
                    <div class="priceImage"><img src="images/Actitivities_Price_img.png" alt="価格部分の画像"></div>
                        <div class="priceText">
                            <p class="pPrice">料金</p>
                                <p class="pContents">ダイビング</p>
                                <p class="pText">初心者コース（20分）    <span class="priceAmount">￥13,200-</span></p>
                                <p class="pText">上級者コース（40分）    <span class="priceAmount">￥26,200-</span></p>

                                <p class="pContents">シーカヤック</p>
                                <p class="pText">初心者コース（20分）    <span class="priceAmount">￥1,500-</span></p>
                                <p class="pText">上級者コース（40分）    <span class="priceAmount">￥3,500-</span></p>

                                <p class="pContents">パラセーリング</p>
                                <p class="pText">初心者コース（10分）    <span class="priceAmount">￥6,000-</span></p>
                                <p class="pText">上級者コース（15分）    <span class="priceAmount">￥15,000-</span></p>
                        </div>
            </div>
            <div class="locationArea">
                <div class="locationTitle"><img src="images/Location.svg" alt="ロケーションタイトル"></div>
                    <div class="locationImage"><img src="images/ActivitiesOkinawamap.png" alt="地図画像">
                </div>
                        <div class="locationText">
                            <p class="pPrice">おすすめエリア</p>
                                <p class="pContents">ダイビング</p>
                                <p class="pText">慶良間諸島 / 北谷 / 恩納村</p>

                                <p class="pContents">シーカヤック</p>
                                <p class="pText">恩納村 / 読谷村 / 瀬底島</p>

                                <p class="pContents">パラセーリング</p>
                                <p class="pText">初那覇 / 名護 / 与野湾</p>
                        </div>
            </div>
        </section>


<?php require 'includes/concept.php'; ?>

    </main>
<?php require 'includes/footer.php'; ?>
<script src="script/tabMenu.js">
</script>