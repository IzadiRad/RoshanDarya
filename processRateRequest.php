<?php
require './vendor/autoload.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $transportType = $_POST['transportType'];
    $containerType = $_POST['containerType'];
    $isoTankType = $_POST['isoTankType'] || null;
    $quantity = $_POST['quantity'];
    $departureCountry = $_POST['departureCountry'];
    $departurePort = $_POST['departurePort'];
    $destinationCountry = $_POST['destinationCountry'];
    $destinationPort = $_POST['destinationPort'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    // اعتبارسنجی اطلاعات
    if (empty($transportType) || empty($containerType) || empty($quantity) || empty($departureCountry) || empty($departurePort) || empty($destinationCountry) || empty($destinationPort) || empty($phoneNumber) || empty($email)) {
        die('All fields are required!');
    }
    $verificationCode = rand(100000, 999999);
    try {
        require 'vendor/autoload.php';
        $api = new \Kavenegar\KavenegarApi("636B51624643442F69657A7A6971654D6B6C5972676F564234654C594459746F657548784A6D46563737773D");

        // ارسال پیامک کد تأیید
        $message = "Your verification code is: $verificationCode";
        $result = $api->Send("2000660110", [$phoneNumber], $message);

        // ذخیره یا ارسال ایمیل (اختیاری)
        mail($email, "Rate Quote Request", "Your verification code: $verificationCode");

        echo "Verification code sent to $phoneNumber!";
    } catch (\Kavenegar\Exceptions\ApiException $e) {
        echo "Error: " . $e->errorMessage();
    } catch (\Kavenegar\Exceptions\HttpException $e) {
        echo "HTTP Error: " . $e->errorMessage();
    }


}
?>