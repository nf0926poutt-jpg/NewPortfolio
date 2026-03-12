<?php session_start(); ?>
<?php require_once 'includes/commonFunctions.php'; ?>

<?php

// 1. 削除を実行
if (isset($_REQUEST['id'])) {
    unset($_SESSION['product'][$_REQUEST['id']]);
    // 削除した、という合図をセッションにメモする
    $_SESSION['delete_message'] = true;
}

// 2. すぐに cart.php に画面を飛ばす（リダイレクト）
// これにより、二重読み込みやCSS崩れが物理的に発生しなくなります
header('Location: cart.php');
exit();