<?php



require "vendor/autoload.php";

$access_token = '9BLD/bdZBYSOQ5yHxJRysAYn2yh9ESeTdCPcJEhCV8/BckpdRagN1RPelcigm7YE6FDtHuY0/frUE1qzr2nqbDhiJlBZ7Tgd+QMm9tqGGNNaH09/6C8no6zWuF47wC17RHzleftyZU7zt5wjoIm2bwdB04t89/1O/w1cDnyilFU=
';
$channelSecret = 'e148d8bc47856689678bf9866a0e1dbb';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







