<?php
require 'includes/header.php';

//購入確定前の最終確認画面

// ログインチェック
if (!isset($_SESSION['customer'])) {
    header('Location: LoginInput.php');
    exit;
}

// カートチェック 空であればカートページに戻す
if (empty($_SESSION['product'])) {
    header('Location: Cart.php');
    exit;
}

$pageTitle = 'PurchaseFinal';
require_once 'includes/commonFunctions.php';
require_once 'includes/dbConnect.php';


// 合計計算
$total = 0;
foreach ($_SESSION['product'] as $product) {
    $total += $product['count'] * $product['price'];
}
?>

<nav>
    <ol class="Breadcrumbs">
        <li><a href="Index.php">TOP</a></li>
        <li><a href="Cart.php">カート</a></li>
        <li>購入確認</li>
    </ol>
</nav>

<div class="Username2">
    <?php echo isset($_SESSION['customer']) ? h($_SESSION['customer']['name']) . ' 様' : 'ようこそ ゲスト 様'; ?>
</div>

<div class="Login-Title">
    <p class="Logintext">ご購入最終確認</p>
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
                    <div class="ConfirmData"><?php echo (int)$product['count']; ?>個</div>
                </div>
                <div class="ConfirmRow">
                    <div class="ConfirmLabel">金額</div>
                    <div class="ConfirmData"><?php echo formatPrice($product['count'] * $product['price']); ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="ConfirmSection">
        <div class="ConfirmTable">
            <div class="ConfirmRow">
                <div class="ConfirmLabel">合計数量</div>
                <div class="ConfirmData-Text"><?php echo formatPrice($total); ?></div>
            </div>
            <div class="ConfirmRow">
                <div class="ConfirmLabel">合計金額</div>
                <div class="ConfirmData-Text"><?php echo formatPrice($total); ?></div>
            </div>
        </div>
    </div>

    <div class="ConfirmSection">
        <p class="ConfirmSubtitle">お届け先</p>
        <div class="ConfirmTable">
            <div class="ConfirmRow">
                <div class="ConfirmLabel">お名前</div>
                <div class="ConfirmData"><?php echo h($_SESSION['customer']['name']); ?> 様</div>
            </div>
            <div class="ConfirmRow">
                <div class="ConfirmLabel">郵便番号</div>
                <div class="ConfirmData">
                    <?php echo h($_SESSION['customer']['postcode_a'] . '-' . $_SESSION['customer']['postcode_b']); ?>
                </div>
            </div>
            <div class="ConfirmRow">
                <div class="ConfirmLabel">住所</div>
                <div class="ConfirmData">
                    <?php echo h($_SESSION['customer']['address']); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="ConfirmSection">
        <p class="ConfirmSubtitle">お支払い方法</p>
        <div class="ConfirmTable">
            <div class="ConfirmRow">
                <div class="ConfirmLabel">お支払い</div>
                <div class="ConfirmData">クレジットカード</div>
            </div>
            <div class="ConfirmRow">
                <div class="ConfirmLabel">ブランド</div>
                <div class="ConfirmData">VISA</div>
            </div>
        </div>
    </div>

    <form action="purchase-complete.php" method="post">
        <div class="Buybtn">
            <input type="submit" value="注文を確定する" class="ConfirmSubmitBtn">
        </div>
    </form>

    <div class="Btn-continue-shopping">
        <a href="PurchaseConfirm.php">内容を修正する</a>
    </div>
        </div>

<?php require 'includes/footer.php'; ?>