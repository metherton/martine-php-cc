<!DOCTYPE html>
<html>
<body>

<?php
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;
phpinfo();
echo "My first actual PHP script!";

$account_sid = getenv('ACCOUNT_SID');
$auth_token = getenv('TOKEN');
echo "create client";
// A Twilio number you own with Voice capabilities
$twilio_number = getenv('TWILIO_PHONE_NUMBER');
// Where to make a voice call (your cell phone?)
$to_number = getenv('MARTIN_OUTBOUND');

$client = new Client($account_sid, $auth_token);
echo $client;
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