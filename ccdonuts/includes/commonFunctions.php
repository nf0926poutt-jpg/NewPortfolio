<?php
// 安全に文字を表示する（サニタイズ）
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// 金額の見た目を整える
function formatPrice($price) {
    return '税込  ￥' . number_format($price);
}
?>