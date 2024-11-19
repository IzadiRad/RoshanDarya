<?php
require './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // دریافت اطلاعات از فرم
    $transportType = $_POST['transportType'];
    $containerType = $_POST['containerType'];
    $isoTankType = $_POST['isoTankType'] ?? 'N/A';
    $quantity = $_POST['quantity'];
    $departureCountry = $_POST['departureCountry'];
    $departurePort = $_POST['departurePort'];
    $destinationCountry = $_POST['destinationCountry'];
    $destinationPort = $_POST['destinationPort'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    // اعتبارسنجی ورودی‌ها
    if (empty($transportType) || empty($containerType) || empty($quantity) || empty($departureCountry) || empty($departurePort) || empty($destinationCountry) || empty($destinationPort) || empty($phoneNumber) || empty($email)) {
        die('تمامی فیلدها باید پر شوند.');
    }

    $mail = new PHPMailer(true);

    try {
        // تنظیمات SMTP
        $mail->isSMTP();
        $mail->Host = 'codiman.ir'; // آدرس سرور SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'test1@codiman.ir'; // ایمیل شما
        $mail->Password = 'اینجا_پسورد_ایمیل_را_قرار_دهید'; // رمز عبور
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // نوع رمزنگاری
        $mail->Port = 465; // پورت SMTP

        // اطلاعات فرستنده
        $mail->setFrom('test1@codiman.ir', 'Customer Inquiry Form'); // ایمیل فرستنده

        // اطلاعات گیرنده (ایمیل مجموعه)
        $mail->addAddress('test1@codiman.ir', 'CodiMan'); // ایمیل مجموعه

        // محتوای ایمیل
        $mail->isHTML(true);
        $mail->Subject = 'New Customer Inquiry';
        $mail->Body = "
            <h3>New Inquiry Received from Website</h3>
            <p><strong>Transport Type:</strong> $transportType</p>
            <p><strong>Container Type:</strong> $containerType</p>
            <p><strong>ISO Tank Type:</strong> $isoTankType</p>
            <p><strong>Quantity:</strong> $quantity</p>
            <p><strong>Departure Country:</strong> $departureCountry</p>
            <p><strong>Departure Port:</strong> $departurePort</p>
            <p><strong>Destination Country:</strong> $destinationCountry</p>
            <p><strong>Destination Port:</strong> $destinationPort</p>
            <p><strong>Phone Number:</strong> $phoneNumber</p>
            <p><strong>Customer Email:</strong> $email</p>
        ";

        // ارسال ایمیل
        $mail->send();
        echo "اطلاعات مشتری با موفقیت ارسال شد!";
    } catch (Exception $e) {
        echo "خطا در ارسال ایمیل: {$mail->ErrorInfo}";
    }
} else {
    echo "درخواست نامعتبر است.";
}
