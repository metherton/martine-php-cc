<!DOCTYPE html>
<html>
<body>

<?php
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
echo "My first actual PHP script!";

$sid = "ACXXXXXX";
$token = "YYYYYY";
$client = new Twilio\Rest\Client($sid, $token);
echo $client;

?>

</body>
</html>