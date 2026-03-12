
<?php $page_title = '商品一覧ページ'; ?>
    <?php require_once 'includes/commonFunctions.php'; 
    require 'includes/header.php'; ?>



        <nav>
            <ol class="Breadcrumbs">
                <li><a href="/ccdonuts/index.php">TOP</a></li>
                <li>商品一覧</li>
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

        <div class="Contentheader">
            <p class="Productstext">商品一覧</p>
            <p class="Mainmenu">メインメニュー</p>

        </div>


        <section class="ProductsList">
            

                <div class="Rankinglist">

                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=1" class="ProductLink">
                                <img src="images/PCCCdonuts.png" class="product-image" alt=" CCドーナツ 当店オリジナル（5個入り）">
                                    <div class="Productname">
                                        CCドーナツ 当店オリジナル（5個入り）
                                    </div>
                            </a>

                                        <div class="Pricered">
                                            <?php echo formatPrice(1500); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>


                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=2" class="ProductLink">
                                <img src="images/PCchocolatedelite.png" class="product-image" alt="チョコレートデライト（5個入り）">
                                    <div class="Productname">
                                        チョコレートデライト（5個入り）
                                    </div>
                            </a>

                                        <div class="Pricered">
                                            <?php echo formatPrice(1600); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>


                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=3" class="ProductLink">
                                <img src="images/PCcharameldonuts.png" class="product-image" alt="キャラメルクリーム（5個入り）">
                                    <div class="Productname">
                                        キャラメルクリーム（5個入り）
                                    </div>
                            </a>
                                        <div class="Pricered">
                                           <?php echo formatPrice(1600); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>

                    <div class="Allitem">
                        <div class="ItemInner">
                           <a href="productdetails.php?id=4" class="ProductLink">
                                <img src="images/PCplanedonuts.png" class="product-image" alt="プレーンクラシック（5個入り）">
                                    <div class="Productname">
                                        プレーンクラシック（5個入り）
                                    </div>
                            </a>
                                        <div class="Pricered">
                                            <?php echo formatPrice(1500); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>

                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=5" class="ProductLink">
                                <img src="images/PCNewdonuts.png" class="product-image" alt="【新作】サマーシトラス（5個入り）">
                                    <div class="Productname">
                                        【新作】サマーシトラス（5個入り）
                                    </div>
                            </a>
                                        <div class="Pricered">
                                           <?php echo formatPrice(1600); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>


                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=6" class="ProductLink">
                                <img src="images/PCStorowberrydonuts.png" class="product-image" alt="【ストロベリークラッシュ（5個入り）">
                                    <div class="Productname">
                                        ストロベリークラッシュ（5個入り）
                                    </div>
                            </a>
                                        <div class="Pricered">
                                            <?php echo formatPrice(1800); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>
                </div>

                <div class="VarietyContener">
                    <p class="Mainmenu">バラエティセット</p>
                </div>

                 <div class="Rankinglist">

                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=7" class="ProductLink">
                                <img src="images/PCFrutsmix1.png" class="product-image" alt=" フルーツドーナツセット（12個入り）">
                                    <div class="Productname">
                                        フルーツドーナツセット（12個入り）
                                    </div>
                            </a>

                                        <div class="Pricered">
                                            <?php echo formatPrice(3500); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>


                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=8" class="ProductLink">
                                <img src="images/PCFritsmix2.png" class="product-image" alt="フルーツドーナツセット（14個入り）">
                                    <div class="Productname">
                                        フルーツドーナツセット（14個入り）
                                    </div>
                            </a>

                                        <div class="Pricered">
                                            <?php echo formatPrice(4000); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>


                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=9" class="ProductLink">
                                <img src="images/PCBestselectionbox.png" class="product-image" alt="ベストセレクションボックス（4個入り）">
                                    <div class="Productname">
                                        ベストセレクションボックス（4個入り）
                                    </div>
                            </a>
                                        <div class="Pricered">
                                            <?php echo formatPrice(1200); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>

                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=10" class="ProductLink">
                                <img src="images/PCchocolateclashu.png" class="product-image" alt="クラッシュボックス（7個入り）">
                                    <div class="Productname">
                                        クラッシュボックス（7個入り）
                                    </div>
                            </a>
                                        <div class="Pricered">
                                            <?php echo formatPrice(2400); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>

                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=11" class="ProductLink">
                                <img src="images/PCclemebox.png" class="product-image" alt="クリームボックス（4個入り）">
                                    <div class="Productname">
                                        クリームボックス（4個入り）
                                    </div>
                            </a>
                                        <div class="Pricered">
                                            <?php echo formatPrice(1400); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>


                    <div class="Allitem">
                        <div class="ItemInner">
                            <a href="productdetails.php?id=12" class="ProductLink">
                                <img src="images/PCclemebox9.png" class="product-image" alt="クリームボックス（9個入り）">
                                    <div class="Productname">
                                        クリームボックス（9個入り）
                                    </div>
                            </a>
                                        <div class="Pricered">
                                            <?php echo formatPrice(2800); ?>
                                        </div>
                                            <div class="Addcart">
                                                <a href="/ccdonuts/cart.php">カートに入れる</a>
                                            </div>
                        </div>
                    </div>
                </div>

        </section>











    <?php require 'includes/footer.php'; ?>
