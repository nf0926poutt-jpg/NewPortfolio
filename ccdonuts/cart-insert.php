<?php session_start(); ?>
<?php require_once 'includes/commonFunctions.php'; ?>
<?php

// 2. データの受け取り（この順番が大事！）
if (isset($_REQUEST['id'])) {
    $id    = $_REQUEST['id'];
    $name  = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $count = $_REQUEST['count'];

    // カートの箱がなければ作る
    if (!isset($_SESSION['product'])) {
        $_SESSION['product'] = [];
    }

    // 既存の個数を確認（合算する場合）
    $existingCount = 0;
    if (isset($_SESSION['product'][$id])) {
        $existingCount = $_SESSION['product'][$id]['count'];
    }

    // 3. データを保存
    $_SESSION['product'][$id] = [
        'name'  => $name,
        'price' => $price,
        'count' => $existingCount + $count // 今の個数に新しい個数を足す
    ];
}

// 4. カートページへ移動（HTMLを出す前に実行する必要がある）
header('Location: cart.php');
exit();


?>




