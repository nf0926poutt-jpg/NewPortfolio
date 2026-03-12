<?php require 'includes/meta.php'; ?>
<?php
  $headerImagePath = "images/FoodpageHeader.png"; 
    $headerImagePathSp = "images/food_mv.png";
  $pageTitle = "Foods"; 

  require_once('includes/header.php'); 
  require_once('includes/breadcrumb.php'); 
?>

<main>

    <div class="SubTitle">
                <h1>Foods</h1>
                <h2>沖縄絶品料理</h2>
    </div>

    <section id="GridSection">
      <div class="GridLayout">
        <div class="GridItem1"><img src="images/Food1.png" alt="タコライス"></div>
        <div class="GridItem2"><img src="images/Food2.png" alt="パンケーキ"></div>
        <div class="GridItem3"><img src="images/Food3.png" alt="ホットサンド"></div>
        <div class="GridItem4"><img src="images/Food4.png" alt="ワッフル"></div>
        <div class="GridItem5"><img src="images/Food5.png" alt="タコス"></div>
        <div class="GridItem6"><img src="images/Food6.png" alt="沖縄料理"></div>
        <div class="GridItem7"><img src="images/Food7.png" alt="ゴーヤチャンプルー"></div>
        <div class="GridItem8"><img src="images/Food8.png" alt="沖縄料理"></div>
        <div class="GridItem9"><img src="images/Food9.png" alt="沖縄料理"></div>
        <div class="GridItem10"><img src="images/Food10.png" alt="ソーキそば"></div>

      </div>
      <div class="GridTextBox">
          <p class="GridTitle">地産地消の食材でおもてなし</p>

          <p class="GridText">沖縄では地元食材をふんだんに使った料理があります。味はもちろん、馴染みのない美味しい料理を味わえます。
          中でもアグー豚は新鮮で臭みがなく、焼きものからしゃぶしゃぶまで美味しくいただけます。<p>
      </div>
    </section>



    <section id="BestFoods">
        <div class="BestFoodsBox">
          <div class="BestFoodsTitle">
            <p class="BestFoodsTitle1">沖縄のおすすめ料理</p>
            <p class="BestFoodsTitle2">PICK UP</p>
          </div>

        <div class="BestFoodsList">
          <div class="BestFoodsContainer">
            <div class="BestFoodsContainerImg">
              <img src="images/foods.png" alt="ソーキそば">
            </div>
            <div class="BestFoodsContent">
              <div class="BestFoodsContainerTitle">
                <p>ソーキそば</p>
              </div>
              <div class="BestFoodsContainerText">
                <p>沖縄料理と言ったらまずはこれ！という名物料理。いたるところにお店があるので、食べ比べしても...</p>
              </div>
            </div>
          </div>

          <div class="BestFoodsContainer">
            <div class="BestFoodsContainerImg">
              <img src="images/foods2.png" alt="あぐー豚">
            </div>
            <div class="BestFoodsContent">
              <div class="BestFoodsContainerTitle">
                <p>アグー豚</p>
              </div>
              <div class="BestFoodsContainerText">
                <p>豚肉の中でも最高級の琉球黒豚。臭みがなく、焼き肉やしゃぶしゃぶは絶品です。</p>
              </div>
            </div>
          </div>

          <div class="BestFoodsContainer">
            <div class="BestFoodsContainerImg">
              <img src="images/foods3.png" alt="ゴーヤチャンプルー">
            </div>
            <div class="BestFoodsContent">
              <div class="BestFoodsContainerTitle">
                <p>ゴーヤチャンプルー</p>
              </div>
              <div class="BestFoodsContainerText">
                <p>今やご家庭でも簡単に作れる料理ですが、地元のお店で作るものは全然違う？！</p>
              </div>
            </div>
          </div>

          <div class="BestFoodsContainer">
            <div class="BestFoodsContainerImg">
              <img src="images/Tacorice.png" alt="タコライス">
            </div>
            <div class="BestFoodsContent">
              <div class="BestFoodsContainerTitle">
                <p>タコライス</p>
              </div>
              <div class="BestFoodsContainerText">
                <p>沖縄料理と言ったらまずはこれ！という名物料理。いたるところにお店があるので、食べ比べしても...</p>
              </div>
            </div>
          </div>

          <div class="BestFoodsContainer">
            <div class="BestFoodsContainerImg">
              <img src="images/Pig1.png" alt="ティビチ">
            </div>
            <div class="BestFoodsContent">
              <div class="BestFoodsContainerTitle">
                <p>ティビチ</p>
              </div>
              <div class="BestFoodsContainerText">
                <p>豚足を大根や昆布などと一緒に煮込んだ料理です。え？！って思いますが食べたら納得の味です。</p>
              </div>
            </div>
          </div>

          <div class="BestFoodsContainer">
            <div class="BestFoodsContainerImg">
              <img src="images/Sake.png" alt="泡盛">
            </div>
            <div class="BestFoodsContent">
              <div class="BestFoodsContainerTitle">
                <p>泡盛</p>
              </div>
              <div class="BestFoodsContainerText">
                <p>沖縄のお酒はやっぱり泡盛！お店によっては飲み比べメニューもあります。</p>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>

    <section id="Restaurant">
      <div class="RestaurantBox">
        <img src="images/Pig2.png" alt="おすすめレストラン背景">
      
      <div class="RestaurantTitle">
        <p class="RestaurantTitle1">沖縄の人気店</p>
        <p class="RestaurantTitle2">RESTAURANT</p>
      </div>
        <div class="RestaurantList">
              <p class="RestaurantLine"><span>店名</span>                   <span>予算目安</span></p>
              <p><a href="https://tabelog.com/okinawa/A4705/A470501/47011898/" target="_blank" rel="noopener noreferrer">
                こてっぺん<img src="images/Link.png" alt="リンク移動ボタン"></a>
                  <span class="Price">￥4,000～￥4,999</span></p>
              <p><a href="https://tabelog.com/okinawa/A4705/A470501/47027761/" target="_blank" rel="noopener noreferrer">
                あじま一商店<img src="images/Link.png" alt="リンク移動ボタン">
                  </a>
                  <span class="Price">￥5,000～￥5,999</span></p>
              <p><a href="https://tabelog.com/okinawa/A4701/A470101/47009534/" target="_blank" rel="noopener noreferrer">
                じまんや那覇店<img src="images/Link.png" alt="リンク移動ボタン">
                  </a>
                    <span class="Price">￥5,000～￥5,999</span></p>
              <p><a href="https://tabelog.com/okinawa/A4705/A470503/47023453/" target="_blank" rel="noopener noreferrer">
                居酒屋めーめー<img src="images/Link.png" alt="リンク移動ボタン">
                  </a> 
                    <span class="Price">￥4,000～￥4,999</span></p>
              <p><a href="https://tabelog.com/okinawa/A4705/A470503/47009544/" target="_blank" rel="noopener noreferrer">
                琉球ダイニングふぁいみーる<img src="images/Link.png" alt="リンク移動ボタン">
                  </a>
                    <span class="Price">￥5,000～￥5,999</span></p>
        </div>
      </div>

      </section>
<?php require 'includes/concept.php'; ?>
</main>


<?php require 'includes/footer.php'; ?>