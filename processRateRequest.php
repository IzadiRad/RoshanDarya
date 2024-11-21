<?php
require './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json; charset=utf-8');
session_start();

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Invalid request method.");
    }

    if (isset($_POST['verificationCode'])) {
        // تأیید کد OTP
        $userOtp = $_POST['verificationCode'];

        if (!isset($_SESSION['otp'])) {
            throw new Exception("No OTP found in session.");
        }

        if ($userOtp == $_SESSION['otp']) {
            unset($_SESSION['otp']); // حذف کد تأیید از جلسه

            // ارسال ایمیل پس از تأیید OTP
            sendEmail($_SESSION['formData']);
            echo json_encode(['success' => true, 'message' => 'OTP verified and email sent.']);
        } else {
            throw new Exception("Invalid OTP.");
        }
        exit;
    }

    // پردازش اطلاعات فرم و ارسال کد تأیید
    $requiredFields = ['transportType', 'containerType', 'quantity', 'departureCountry', 'departurePort', 'destinationCountry', 'destinationPort', 'phoneNumber', 'email'];
    $formData = [];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("Field '{$field}' is required.");
        }
        $formData[$field] = $_POST[$field];
    }

    $verificationCode = rand(100000, 999999);
    $_SESSION['otp'] = $verificationCode;
    // debug_to_console($verificationCode);
    $_SESSION['formData'] = $formData; // ذخیره داده‌های فرم در جلسه

    sendOtp($formData['phoneNumber'], $verificationCode);

    echo json_encode(['success' => true, 'message' => 'OTP sent successfully.']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

// تابع ارسال کد OTP
function sendOtp($phoneNumber, $verificationCode)
{
    $api = new \Kavenegar\KavenegarApi("636B51624643442F69657A7A6971654D6B6C5972676F564234654C594459746F657548784A6D46563737773D");
    $template = preg_match('/^(09|\+98)/', $phoneNumber) ? "RoshanDarya" : "RoshanDarya-en";
    $type = "sms";

    try {
        $api->VerifyLookup($phoneNumber, $verificationCode, "", "", $template, $type);
    } catch (\Kavenegar\Exceptions\ApiException $e) {
        throw new Exception("SMS Error: " . $e->getMessage());
    } catch (\Kavenegar\Exceptions\HttpException $e) {
        throw new Exception("HTTP Error: " . $e->getMessage());
    }
}

// تابع ارسال ایمیل
function sendEmail($formData)
{
    $mail = new PHPMailer(true);

    try {
        // تنظیمات SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mrprogramer1378@gmail.com'; // ایمیل شما
        $mail->Password = 'caqogznykpnmtsqo'; // رمز عبور
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // اطلاعات فرستنده و گیرنده
        $mail->setFrom('mrprogramer1378@gmail.com', 'Customer Inquiry Form');
        $mail->addAddress('izadirad1999@outlook.com', 'CodiMan');

        // محتوای ایمیل
        $mail->isHTML(true);
        $mail->Subject = 'New Customer Inquiry';
        $mail->Body = "
            <h3>New Inquiry Received from Website</h3>
            <p><strong>Transport Type:</strong> {$formData['transportType']}</p>
            <p><strong>Container Type:</strong> {$formData['containerType']}</p>
            <p><strong>Quantity:</strong> {$formData['quantity']}</p>
            <p><strong>Departure Country:</strong> {$formData['departureCountry']}</p>
            <p><strong>Departure Port:</strong> {$formData['departurePort']}</p>
            <p><strong>Destination Country:</strong> {$formData['destinationCountry']}</p>
            <p><strong>Destination Port:</strong> {$formData['destinationPort']}</p>
            <p><strong>Phone Number:</strong> {$formData['phoneNumber']}</p>
            <p><strong>Customer Email:</strong> {$formData['email']}</p>
        ";

        $mail->send();
    } catch (Exception $e) {
        throw new Exception("Mail Error: " . $mail->ErrorInfo);
    }
}
?>