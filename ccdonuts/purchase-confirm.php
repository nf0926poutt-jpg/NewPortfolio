<?php 
    require 'includes/header.php';
if (!isset($_SESSION['customer'])) {
    // ログイン後にここに戻ってこれるよう、セッションに今のURLをメモしておく
    $_SESSION['return_to'] = 'PurchaseConfirm.php';
    header('Location: login-input.php?reason=purchase');
    exit;
}

$page_title = '購入確認ページ'; 
require_once 'includes/commonFunctions.php';
require_once 'includes/dbConnect.php'; 






//カートが空の場合はカートへ戻す
if (empty($_SESSION['product'])) {
    header('Location: cart.php');
    exit;
}

//合計金額の計算
$total = 0;
foreach ($_SESSION['product'] as $product) {
    $total += $product['count'] * $product['price'];
}

?>

<nav>
    <ol class="Breadcrumbs">
        <li><a href="/ccdonuts/index.php">TOP</a></li>
        <li><a href="/ccdonuts/cart.php">カート</a></li>
        <li>購入確認</li>
    </ol>
</nav>

<div class="Username2">
    <?php echo isset($_SESSION['customer']) ? h($_SESSION['customer']['name']) . ' 様' : 'ようこそ ゲスト 様'; ?>
</div>

<div class="Login-Title">
    <p class="Logintext">ご購入確認</p>
</div>

<div class="margin-Area">
    <div class="ConfirmSection">
        <p class="ConfirmSubtitle">ご購入商品</p>
        <?php foreach ($_SESSION['product'] as $id => $product): ?>
            <div class="ConfirmTable">
                <div class="ConfirmRow">
                    <div class="ConfirmLabel">商品名</div>
                    <div class="ConfirmData"><?php echo h($product['name']); ?></div>
                </div>
                <div class="ConfirmRow">
                    <div class="ConfirmLabel">数量</div>
                    <div class="ConfirmData"><?php echo $product['count']; ?>個</div>
                </div>
                <div class="ConfirmRow">
                    <div class="ConfirmLabel">金額</div>
                    <div class="ConfirmData"><?php echo formatPrice($product['count'] * $product['price']); ?></div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="ConfirmTable TotalTable">
            <div class="ConfirmRow">
                <div class="ConfirmLabel">合計数量</div>
                <div class="ConfirmData BoldText"><?php echo array_sum(array_column($_SESSION['product'], 'count')); ?>個</div>
            </div>
            <div class="ConfirmRow">
                <div class="ConfirmLabel">合計金額</div>
                <div class="ConfirmData BoldText"><?php echo formatPrice($total); ?></div>
            </div>
        </div>
    </div>

    <div class="ConfirmSection">
        <p class="ConfirmSubtitle">お届け先</p>
        <div class="ConfirmTable">
            <div class="ConfirmRow">
                <div class="ConfirmLabel">お名前</div>
                <div class="ConfirmData"><?php echo h($_SESSION['customer']['name']); ?>様</div>
            </div>
            <div class="ConfirmRow">
                <div class="ConfirmLabel">郵便番号</div>
                <div class="ConfirmData"><?php echo h($_SESSION['customer']['postcode_a']. '-' . $_SESSION['customer']['postcode_b']); ?></div>
            </div>
            <div class="ConfirmRow">
                <div class="ConfirmLabel">住所</div>
                <div class="ConfirmData"><?php echo h($_SESSION['customer']['address']); ?></div>
            </div>
        </div>
    </div>

    <div class="ConfirmSection">
        <p class="ConfirmSubtitle">お支払い方法</p>
        <div class="ConfirmContent">
            <div class="CardRegisterArea">
                <a href="CardInput.php" class="CardRegisterBtn">カード情報を登録する</a>
                <p class="CardNote">カード情報登録がまだのお客様はこちらへお進みください。</p>
            </div>

            <?php if (isset($_SESSION['customer']['card_info'])): // カード登録済みの場合のみ表示 ?>
                <div class="PaymentMethodStatus">
                    <p>登録済みクレジットカード：****-****-****-1234</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="Btn-continue-shopping">
        <a href="cart.php">カートに戻って修正する</a>
    </div>

    <div class="NextActionArea">
        <?php if (isset($_SESSION['customer'])): ?>
            <div class="Buybtn">
                <a href="purchase-final.php" class="ConfirmSubmitBtn">確認画面へ進む</a>
            </div>
        <?php else: ?>
            <div class="Buybtn">
                <a href="logininput.php" class="LoginLinkBtn">ログインして進む</a>
            </div>
        <?php endif; ?>
    </div>
</div>



<?php require 'includes/footer.php'; ?>

