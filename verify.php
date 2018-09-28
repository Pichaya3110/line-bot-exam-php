<?php
$access_token = '9BLD/bdZBYSOQ5yHxJRysAYn2yh9ESeTdCPcJEhCV8/BckpdRagN1RPelcigm7YE6FDtHuY0/frUE1qzr2nqbDhiJlBZ7Tgd+QMm9tqGGNNaH09/6C8no6zWuF47wC17RHzleftyZU7zt5wjoIm2bwdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
