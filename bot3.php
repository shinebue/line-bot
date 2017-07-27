<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot.php');

$channelSecret = 'f475cac7a9e191fad18a48480516b2a2';
$access_token  = 'ltjBGYjoeVWUGZrtlP2nOS6m28fwAMY0JXAlHwkIPer2M+C2MmmGtMbaQhyZE2Dr29IFqQIzU+46OZLM+SnNOXywq27vpuGAMPiUt1GqD/Mo7qmqPtnxjwlAGpwntObMoXZ7rYPY0JbZeQALuH5ILgdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ทดสอบ ตอบกลับ');
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, $textMessageBuilder);

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}