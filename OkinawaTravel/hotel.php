<?php require 'includes/meta.php'; ?>
<?php
  $headerImagePath = "images/Hotel_Header.png";
  $headerImagePathSp = "images/hotel_mv.png";

  $pageTitle = "Hotels"; 

  require_once('includes/header.php'); 
  require_once('includes/breadcrumb.php'); 
?>

<main>
  <div class="SubTitle">
                <h1>Hotels</h1>
                <h2>宿泊施設</h2>
    </div>

    <section id="HotelIntro">
      <div class="HotelIntroBox">
        <img src="images/HotelIntro.png" alt="ホテルイントロ写真">
          <div class="HotelIntroTextBox">
            <div class="HotelIntroTitle">
              <p><span class="responsiveBr">南国気分を</span>味わえる最高の宿</p>
            </div>
              <div class="HotelIntroText">
                <p>日本の中で海外のリゾート気分を満喫できる沖縄の宿。
                  高級宿からリーズナブルな民宿まで、日本らしくない独自の居心地を感じることができる宿がたくさんあります。
                  ぜひ非日常を味わいに足を運んでみて下さい。</p>
                  </div>
          </div>
      </div>
    </section>

    <section id="HotelIntro2">
      <div class="HotelIntroBox2">
        <div class="HoteiIntroImage1">
          <img src="images/HotelBath.png" alt="Bath画像">
            </div>
              <div class="HoteiIntroImage2">
                  <img src="images/HotelRoom.png" alt="Room画像">
              </div>

            <div class="HotelIntroTextBox2">
              <div class="HotelIntroTitle2">
                <p><span class="responsiveBr">旅の疲れを</span>癒しに変える</p>
              </div>
                <div class="HotelIntroText2">
                  <p>たっぷりと遊んで疲れた体を癒してくれる沖縄のリゾートホテル。
                    南国を連想させるその景観とおもてなしは充実感をももたらしてくれます。
                    美味美食を味わいながら、旅を思い出に変える一時をお楽しみください。</p>
                    </div>
          </div>
      </div>
    </section>

    <section id="View">
      <div class="ViewImage"><img src="images/HotelView.png" alt ="沖縄の星空"></div>
    </section>


    <section id="BestHotel">
      <div class="BestHotelName">
        <p class="BestHotelName1">沖縄のおすすめ宿</p>
          <p class="BestHotelName2">PICK UP</p>
      </div>
      <div class="BestHotelBox1">
        <div class="HotelImage">
          <img src="images/Harecrani.png" alt="ハレクラニ沖縄">
            </div>
            <div class="HotelTextBox">
              <div class="HotelTitle">
                <p>ハレクラニ沖縄</p>
                  </div>
                    <div class="HotelText">
                    <p>「天国にふさわしい館」でお迎えしているハレクラニ。
                    恩納村にある沖縄海岸国定公園内の海岸線に納得できるラグジュアリーが備わっております。</p>
                    <p class="HotelLine"></p>
                    <p>予算目安：￥54,081～ / 2名</p>
                  </div>
            </div>
      </div>

      <div class="BestHotelBox2">
        <div class="HotelImage">
          <img src="images/Thetellace.png" alt="ザ・ブセナテラス">
            </div>
              <div class="HotelTextBox">
                <div class="HotelTitle">
                  <p>ザ・ブセナテラス</p>
                    </div>
                      <div class="HotelText">
                      <p>青く輝く海、亜熱帯の緑、色鮮やかな花々に囲まれたザ・ブセナテラス。
                        季節の美味美食と高品質なもてなしでお迎えします。</p>
                      <p class="HotelLine"></p>
                      <p>予算目安：￥42,925～ / 2名</p>
                    </div>
                </div>
      </div>

      <div class="BestHotelBox3">
        <div class="HotelImage">
          <img src="images/Resort.png" alt="ザ・ムーンビーチ ミュージアムリゾート">
            </div>
            <div class="HotelTextBox">
              <div class="HotelTitle">
                <p>ザ・ムーンビーチ ミュージアムリゾート</p>
                  </div>
                    <div class="HotelText">
                      <p>三日月型のプライベートビーチを囲むように佇むリゾート。
                        まるで海外のリゾートホテルのような独特の雰囲気をお楽しみ下さい。</p>
                          <p class="HotelLine"></p>
                            <p>予算目安：￥24,320～ / 2名</p>
                  </div>
                </div>
      </div>
    </section>

<?php require 'includes/concept.php'; ?>
</main>


<?php require 'includes/footer.php'; ?>