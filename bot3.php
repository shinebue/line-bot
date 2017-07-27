<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot.php');

$channelSecret = 'f475cac7a9e191fad18a48480516b2a2';
$access_token  = 'ltjBGYjoeVWUGZrtlP2nOS6m28fwAMY0JXAlHwkIPer2M+C2MmmGtMbaQhyZE2Dr29IFqQIzU+46OZLM+SnNOXywq27vpuGAMPiUt1GqD/Mo7qmqPtnxjwlAGpwntObMoXZ7rYPY0JbZeQALuH5ILgdB04t89/1O/w1cDnyilFU=';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ทดสอบ ตอบกลับ');
$response = $bot->replyMessage('<replyToken>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

}