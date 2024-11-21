<?php
require '/vendor/autoload.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // اطلاعات دریافت‌شده از فرم
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    try {
        $apiKey = "636B51624643442F69657A7A6971654D6B6C5972676F564234654C594459746F657548784A6D46563737773D"; // کلید API را جایگزین کنید
        $api = new .\KavenegarApi($apiKey);

        $sender = "2000500666"; // شماره ارسال‌کننده
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