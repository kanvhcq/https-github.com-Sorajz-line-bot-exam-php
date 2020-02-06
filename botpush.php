<?php



require "vendor/autoload.php";

$access_token = 'uH7/FdqH5XQrxB0t4yGuZmgfl92Y7ZpFa45bsGLitYHkE+eqbB+Sind850wztPqItL4WvDJjLW2eozCwS9Scs0dllMVR/wjLDG55+TzIk9/gPH10nYKQogSqbja+x+ZSAx1uR3aFpOfeNhjNplZhhAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '98cb4e8e9de7032d538b36851e9c9d48';

$pushID = 'Uee4a391925a5eef42e4a0d6e9c56c5c4';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







