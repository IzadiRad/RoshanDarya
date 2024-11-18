<?php
require __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // اطلاعات دریافت‌شده از فرم
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    try {
        $apiKey = "YOUR_API_KEY_HERE"; // کلید API را جایگزین کنید
        $api = new \Kavenegar\KavenegarApi($apiKey);

        $sender = "10004346"; // شماره ارسال‌کننده
        $receptor = [$phoneNumber]; // شماره گیرنده

        $result = $api->Send($sender, $receptor, $message);

        if ($result) {
            echo "Message sent successfully!";
            foreach ($result as $r) {
                echo "<br>Message ID: {$r->messageid}";
                echo "<br>Status: {$r->statustext}";
                echo "<br>Cost: {$r->cost} IRR";
            }
        }
    } catch (\Kavenegar\Exceptions\ApiException $e) {
        // خطاهای API
        echo "API Error: " . $e->errorMessage();
    } catch (\Kavenegar\Exceptions\HttpException $e) {
        // خطاهای ارتباطی
        echo "HTTP Error: " . $e->errorMessage();
    }
} else {
    echo "Invalid request method!";
}
?>