<?php require 'includes/meta.php'; ?>
<?php require 'includes/header.php'; ?>

<?php
    $company_name = $_POST['company_name'] ?? '';
    $user_name = $_POST['user_name'] ?? '';
    $department_name = $_POST['department_name'] ?? '';
    $number = $_POST['number'] ?? '';
    $user_mail = $_POST['user_mail'] ?? '';
    $message = $_POST['message'] ?? '';
?>

<section id="thanksSection">
<p class="sendText1">お問い合わせありがとうございました</p>

<p class="sendText2">内容を受け付けました。<br>
担当者よりご連絡致します。</p>

<a href="index.php"><p class="backBtn">トップへ戻る</p></a>

</section>

<?php require 'includes/footer.php'; ?>