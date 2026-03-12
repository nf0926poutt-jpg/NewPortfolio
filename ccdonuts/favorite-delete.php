<?php require_once 'includes/dbConnect.php';?>


<?php
session_start();

if (isset($_SESSION['customer']) && isset($_REQUEST['id'])) {
    // ログインしているユーザーの、指定された商品IDを削除する
    $sql = $pdo->prepare('delete from favorite where customer_id = ? and product_id = ?');
    $sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
}

// 削除が終わったら、お気に入り画面に戻る
header('Location: favorite-show.php');
exit();
?>