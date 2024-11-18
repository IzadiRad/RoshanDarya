<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $transportType = $_POST['transportType'];
    $containerType = $_POST['containerType'];
    $quantity = $_POST['quantity'];
    $departureCountry = $_POST['departureCountry'];
    $departurePort = $_POST['departurePort'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    // اعتبارسنجی اطلاعات
    if (empty($transportType) || empty($containerType) || empty($quantity) || empty($departureCountry) || empty($departurePort) || empty($phoneNumber) || empty($email)) {
        die('All fields are required!');
    }

    // ارسال ایمیل یا ذخیره در پایگاه‌داده
    // مثلا:
    mail($email, "Rate Quote Request", "Your request has been received.");

    echo "Your request has been submitted successfully!";
}
?>