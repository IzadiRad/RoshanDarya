<?php
include "./Toolkit/personalDebug.php";
require './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // دریافت اطلاعات فرم
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

    // اعتبارسنجی اطلاعات
    if (empty($transportType) || empty($containerType) || empty($quantity) || empty($departureCountry) || empty($departurePort) || empty($destinationCountry) || empty($destinationPort) || empty($phoneNumber) || empty($email)) {
        die('تمامی فیلدها باید پر شوند.');
    }
    $verificationCode = rand(100000, 999999);
    try {
        $api = new \Kavenegar\KavenegarApi("636B51624643442F69657A7A6971654D6B6C5972676F564234654C594459746F657548784A6D46563737773D");
        $type = "sms"; // نوع پیام
        $receptor = $phoneNumber;

        // تعیین قالب بر اساس شماره
        $template = preg_match('/^(09|\+98)/', $receptor) ? "RoshanDarya" : "RoshanDarya-en";

        // ارسال پیامک
        $result = $api->VerifyLookup($receptor, $verificationCode, "", "", $template, $type);
        debug_to_console("کد تأیید به شماره به  این شماره ارسال شد.");
    } catch (\Kavenegar\Exceptions\ApiException $e) {
        debug_to_console("خطا در ارسال پیامک: " . $e->errorMessage());
        exit;
    } catch (\Kavenegar\Exceptions\HttpException $e) {
        debug_to_console("خطای HTTP: " . $e->errorMessage());
        exit;
    }

    // ارسال اطلاعات مشتری به ایمیل
    try {
        $mail = new PHPMailer(true);

        // تنظیمات SMTP
        $mail->isSMTP();
        $mail->Host = 'codiman.ir'; // آدرس سرور SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'test1@codiman.ir'; // ایمیل شما
        $mail->Password = '123459876a0A&&'; // رمز عبور
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // اطلاعات فرستنده
        $mail->setFrom('test1@codiman.ir', 'Customer Inquiry Form');

        // اطلاعات گیرنده
        $mail->addAddress('test1@codiman.ir', 'CodiMan');

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
            <p><strong>Verification Code Sent:</strong> $verificationCode</p>
        ";

        // ارسال ایمیل
        $mail->send();
        debug_to_console("اطلاعات مشتری به ایمیل ارسال شد!");
    } catch (Exception $e) {
        debug_to_console("خطا در ارسال ایمیل: {$mail->ErrorInfo}");
    }
} else {
    debug_to_console("درخواست نامعتبر است.");
}
?>