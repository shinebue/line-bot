<?php

include ('line-bot.php');

$channelSecret = 'f475cac7a9e191fad18a48480516b2a2';
$access_token  = 'ltjBGYjoeVWUGZrtlP2nOS6m28fwAMY0JXAlHwkIPer2M+C2MmmGtMbaQhyZE2Dr29IFqQIzU+46OZLM+SnNOXywq27vpuGAMPiUt1GqD/Mo7qmqPtnxjwlAGpwntObMoXZ7rYPY0JbZeQALuH5ILgdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
$bot->sendMessageNew('U7e8e14cfddb9e369df926633b1c6be30', 'Hello World !!');

if ($bot->isSuccess()) {
    echo 'Succeeded!';
    exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
