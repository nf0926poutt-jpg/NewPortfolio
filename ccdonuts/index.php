

    <?php require_once 'includes/commonFunctions.php';
    require 'includes/header.php'; ?>

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

        <div class="Topimage">
            <img src="images/PCmainimage.png" alt="トップページメイン画像">
        </div>

        <div class="Contents">
            <div class="Newitem"><a href="productdetails.php?id=5">
                <img src="images/PCNewdonuts.png" alt="新商品の画像">
                <img src="images/Newitems.png" alt="新商品のロゴ">
                    <p>サマーシトラス</p></a>
            </div>

            <div class="Donutsoflife">
                <img src="images/PCdonutsmain2.png" alt="ドーナツのある生活">
                <p>ドーナツのある生活</p>
            </div>
        </div>

            <div class="Allproducts">
                <a href="/ccdonuts/products.php"><img src="images/PCdonutsbanar.png" alt="商品一覧"></a>
                <p>商品一覧</p>
            </div>
        

        <div class="Philosophy">
            <div class="Philosophyimage">
                <img src="images/PCdonutscheears.png" class="PCPhilosophyimage" alt="ドーナツでつながる">
                <img src="images/SPdonutscheears.png" class="SPPhilosophyimage" alt="スマホ版ドーナツでつながる">
            </div>

                <p class="Text1">Philosophy</p>
                <p class="Text2">私たちの信念</p>
                <p class="Text3">"Creating Connections"</p>
                <p class="Text4">「ドーナツでつながる」</p>

        </div>





        <div class="Rankingarea">

        <p class="Rankingtext">人気ランキング</p>

            <div class="Rankinglist">
                <div class="Rankingitem">
                    <div class="ItemInner">
                        <img src="images/PCNo.1.png" class="rank-number" alt="ランキング番号">
                            <a href="productdetails.php?id=1">
                                <img src="images/PCCCdonuts.png" class="product-image" alt="人気No.1ドーナツ">
                                    <div class="Productname">
                                    CCドーナツ 当店オリジナル（5個入り）
                                    </div>
                                        <div class="Pricered">
                                            <?php echo formatPrice(1500); ?>
                                        </div>
                            </a>
                                        <div class="Addcart">
                                            <a href="#">カートに入れる</a>
                                        </div>
                    </div>
                </div>

                <div class="Rankingitem">
                    <div class="ItemInner">
                        <img src="images/PCNo.2.png" class="rank-number" alt="ランキング番号2">
                            <a href="productdetails.php?id=7">
                                <img src="images/PCFrutsmix1.png" class="product-image" alt="人気No.2ドーナツ">
                                    <div class="Productname">
                                    フルーツドーナツセット（12個入り）
                                    </div>
                                        <div class="Pricered">
                                        <?php echo formatPrice(3500); ?>
                                        </div>
                            </a>
                                        <div class="Addcart">
                                            <a href="#">カートに入れる</a>
                                        </div>
                    </div>
                </div>

                <div class="Rankingitem">
                    <div class="ItemInner">
                        <img src="images/PCNo.3.png" class="rank-number" alt="ランキング番号3">
                        <a href="productdetails.php?id=8">
                            <img src="images/PCFritsmix2.png" class="product-image" alt="人気No.3ドーナツ">
                                <div class="Productname">
                                    フルーツドーナツセット（14個入り）
                                </div>
                                    <div class="Pricered">
                                        <?php echo formatPrice(4000); ?>
                                    </div>
                        </a>
                                        <div class="Addcart">
                                            <a href="#">カートに入れる</a>
                                        </div>
                    </div>
                </div>

                <div class="Rankingitem">
                    <div class="ItemInner">
                            <img src="images/PCNo.4.png" class="rank-number" alt="ランキング番号4">
                            <a href="productdetails.php?id=2">
                                <img src="images/PCchocolatedelite.png" class="product-image" alt="人気No.4ドーナツ">
                                    <div class="Productname">
                                        チョコレートデライト（5個入り）
                                    </div>
                                        <div class="Pricered">
                                           <?php echo formatPrice(1600); ?>
                                        </div>
                            </a>
                                        <div class="Addcart">
                                            <a href="#">カートに入れる</a>
                                        </div>
                    </div>
                </div>

                <div class="Rankingitem">
                    <div class="ItemInner">
                        <img src="images/PCNo.5.png" class="rank-number" alt="ランキング番号5">
                        <a href="productdetails.php?id=9">
                            <img src="images/PCBestselectionbox.png" class="product-image" alt="人気No.5ドーナツ">
                                <div class="Productname">
                                    ベストセレクションボックス（4個入り）
                                </div>
                                    <div class="Pricered">
                                        <?php echo formatPrice(1200); ?>
                                    </div>
                        </a>
                                    <div class="Addcart">
                                        <a href="#">カートに入れる</a>
                                    </div>
                    </div>
                </div>        

                <div class="Rankingitem">
                    <div class="ItemInner">
                        <img src="images/PCNo.6.png" class="rank-number" alt="ランキング番号6">
                        <a href="productdetails.php?id=6">
                            <img src="images/PCStorowberrydonuts.png" class="product-image" alt="人気No.6ドーナツ">
                                <div class="Productname">
                                    ストロベリークラッシュ（5個入り）
                                </div>
                                    <div class="Pricered">
                                       <?php echo formatPrice(1800); ?>
                                    </div>
                        </a>
                                    <div class="Addcart">
                                        <a href="#">カートに入れる</a>
                                    </div>
                    </div>
            </div>
        </div>



    </div>


        <?php require 'includes/footer.php'; ?>