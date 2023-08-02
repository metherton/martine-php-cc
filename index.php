<!DOCTYPE html>
<html>
<body>

<?php
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
echo "My first actual PHP script!";

$sid = getenv('ACCOUNT_SID');
$auth_token = getenv('TOKEN');
echo "create client";
$client = new Twilio\Rest\Client($sid, $token);
echo $client;

// A Twilio number you own with Voice capabilities
$twilio_number = "+3242776825";

// Where to make a voice call (your cell phone?)
$to_number = "+31624543741";

$client = new Client($account_sid, $auth_token);
$client->account->calls->create(
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);


?>

</body>
</html>