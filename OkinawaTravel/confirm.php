<?php require 'includes/meta.php'; ?>
<?php
  $headerImagePath = "images/Activities_Header.png"; 
  $pageTitle = "confirm"; 

  require_once('includes/header.php'); 
  require_once('includes/breadcrumb.php'); 
?>
<?php
    // POSTで送られてきた値を取得（未入力の場合は空文字を入れる）
    $company_name = $_POST['company_name']?? '';
    $user_name = $_POST['user_name']?? '';
    $department_name = $_POST['department_name']?? '';
    $number = $_POST['number']?? '';
    $user_mail = $_POST['user_mail']?? '';
    $message = $_POST['message']?? '';
?>

<section class="confirmSection">
    <p class="confirmTitle">入力内容確認</p>
        <div class="confirmArea">
            <div class="formGroup">
                <p class="form">貴社名</p>
                    <p class="formColor"><?php echo htmlspecialchars($company_name); ?></p>
            </div>
                <div class="formGroup">
                    <p class="form">お名前</p>
                        <p class="formColor"><?php echo htmlspecialchars($user_name); ?></p>
                </div>
                    <div class="formGroup">
                        <p class="form">部署名</p>
                            <p class="formColor"><?php echo htmlspecialchars($department_name); ?></p>
                    </div>
                        <div class="formGroup">
                            <p class="form">電話番号</p>
                                <p class="formColor"><?php echo htmlspecialchars($number); ?></p>
                        </div>
                            <div class="formGroup">
                                <p class="form">メールアドレス</p>
                                    <p class="formColor"><?php echo htmlspecialchars($user_mail); ?></p>
                            </div>
                                <div class="formGroup">
                                    <p class="form">お問合せ内容</p>
                                       <p class="formColor"><?php echo htmlspecialchars($message); ?></p>
                                </div>
                <form action="send.php" method="post">

                    <input type="hidden" name="company_name" value="<?php echo htmlspecialchars($company_name); ?>">
                    <input type="hidden" name="user_name" value="<?php echo htmlspecialchars($user_name); ?>">
                    <input type="hidden" name="department_name" value="<?php echo htmlspecialchars($department_name); ?>">
                    <input type="hidden" name="number" value="<?php echo htmlspecialchars($number); ?>">
                    <input type="hidden" name="user_mail" value="<?php echo htmlspecialchars($user_mail); ?>">
                    <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">

                    <p class="form3">
                        <button type="submit">送信する</button>
                    </p>
                </form>

                <form action="index.php#contact" method="post">

                    <input type="hidden" name="company_name" value="<?php echo htmlspecialchars($company_name); ?>">
                    <input type="hidden" name="user_name" value="<?php echo htmlspecialchars($user_name); ?>">
                    <input type="hidden" name="department_name" value="<?php echo htmlspecialchars($department_name); ?>">
                    <input type="hidden" name="number" value="<?php echo htmlspecialchars($number); ?>">
                    <input type="hidden" name="user_mail" value="<?php echo htmlspecialchars($user_mail); ?>">
                    <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">

                     <p class="form4">
                        <button type="submit">修正する</button>
                    </p>
                </form>

                   
        </div>
</section>
<?php require 'includes/footer.php'; ?>