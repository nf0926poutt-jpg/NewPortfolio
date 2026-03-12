<?php
require_once 'includes/dbConnect.php';
session_start();

if (isset($_SESSION['customer']) && isset($_REQUEST['id'])) {
    // 重複チェック
    $check = $pdo->prepare('select * from favorite where customer_id = ? and product_id = ?');
    $check->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
    
    if (!$check->fetch()) {
        // なければ登録
        $sql = $pdo->prepare('insert into favorite values(?,?)');
        $sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
    }
}

// 登録が終わったら、表示専用ページ（show）に飛ばす
header('Location: favorite-show.php');
exit();
?>

