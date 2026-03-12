<?php $page_title = 'カートページ'; ?>

<?php

require_once 'includes/commonFunctions.php';
require_once 'includes/dbConnect.php';
require 'includes/header.php'; 

// 再計算の更新処理
// 「再計算」ボタンが押された（POSTされた）場合に実行
if (isset($_POST['update_cart'])) {
    foreach ($_POST['count'] as $id => $count) {
        if (isset($_SESSION['product'][$id])) {
            $count = (int)$count;
            if ($count <= 0) {
                unset($_SESSION['product'][$id]); // 0個以下なら削除
            } else {
                $_SESSION['product'][$id]['count'] = $count; // 個数を更新
            }
        }
    }
    // 更新を反映させるため、自分自身にリダイレクト
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

?>

    <nav>
        <ol class="Breadcrumbs">
                <li><a href="/ccdonuts/index.php">TOP</a></li>
                <li>カート</li>
        </ol>
    </nav>

    <div class="Username2">
        <?php
        if (isset($_SESSION['customer'])) {
            echo h($_SESSION['customer']['name']), ' 様';
        } else {
            echo 'ようこそ  ゲスト 様';
        }
        ?>
    </div>

    <?php 
        $imageMap = [
            1  => 'PCCCdonuts',
            2  => 'PCchocolatedelite',
            3  => 'PCcharameldonuts',
            4  => 'PCplanedonuts',
            5  => 'PCNewdonuts',
            6  => 'PCStorowberrydonuts',
            7  => 'PCFrutsmix1',
            8  => 'PCFritsmix2',
            9  => 'PCBestselectionbox',
            10 => 'PCchocolateclashu',
            11 => 'PCclemebox',
            12 => 'PCclemebox9'
        ];

        // カート内の合計金額と合計点数を算出
        $total = 0;
        $countSum = 0;
        
        if(!empty($_SESSION['product'])) {
            foreach ($_SESSION['product'] as $id => $product) {
                $total += $product['count'] * $product['price'];
                $countSum += $product['count'];
            }
        }
    ?>

    <form action="" method="post">

        <div class="Carttotal">
            <p>現在 商品<?php echo $countSum; ?>点</p>
            <p>ご注文小計：<span class="Pricered3"><?php echo formatPrice($total); ?></span></p>
            <div class="Buybtn">
                <a href ="purchase-confirm.php">購入確認へ進む</a>
            </div>
        </div>
                
        <?php
        //カート内商品のループ表示
        if(!empty($_SESSION['product'])) {
            foreach ($_SESSION['product'] as $id => $product) {
                echo '<div class="Cart-item-container">';
                    // 商品画像
                    echo '<div class="Cart-image">';
                        echo '<img src="images/', $imageMap[$id], '.png" alt="">';
                    echo '</div>';
                    // 商品情報
                    echo '<div class="Addcart-inside">';
                        echo '<div class="AddCart-name">';
                            echo '<p>', h($product['name']), '</p>';
                        echo '</div>';
                        // 価格と数量入力
                        echo '<div class="Price-Qty-Group">';
                            echo '<div class="AddCart-price">';
                                echo '<p>', formatPrice($product['price']), '</p>';
                            echo '</div>';

                            // 数量入力（name属性を配列形式 count[ID] にして送信）
                            echo '<div class="Quantity">';
                                echo '数量 <input type="number" name="count[', $id, ']" value="', $product['count'], '" min="1" max="99" style="width:50px;"> 個';
                            echo '</div>';
                        echo '</div>';
                        // アクションボタン（再計算・削除）
                        echo '<div class="Cart-actions-group">';
                            //再計算をbutton（送信ボタン）にする
                            echo '<div class="Btn-recalculate-total">';
                                echo '<button type="submit" name="update_cart" class="Update-Btn-Style">再計算</button>';
                            echo '</div>';

                            echo '<div class="Cart-item-remove">';
                                echo '<p><a href="cart-delete.php?id=', $id, '">削除する</a></p>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        } else {
            // カートが空の場合のメッセージ
            if (isset($_SESSION['delete_message'])) {
                echo '<p class="Not-Products">カートから商品を削除しました。</p>';
                unset($_SESSION['delete_message']);
            }
            echo '<p class="Not-Products">カートに商品がありません。</p>';
        }
        ?>

        <div class="Carttotal">
            <p>現在 商品 <?php echo $countSum; ?>点</p>
            <p>ご注文小計：<span class="Pricered3"><?php echo formatPrice($total); ?></span></p>
            <div class="Buybtn">
                <a href ="purchase-confirm.php">購入確認へ進む</a>
            </div>
        </div>

    </form> <div class="Btn-continue-shopping">
        <a href ="products.php">買い物を続ける</a>
    </div>

<?php require 'includes/footer.php'; ?>