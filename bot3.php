<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot.php');

$channelSecret = 'f475cac7a9e191fad18a48480516b2a2';
$access_token  = 'ltjBGYjoeVWUGZrtlP2nOS6m28fwAMY0JXAlHwkIPer2M+C2MmmGtMbaQhyZE2Dr29IFqQIzU+46OZLM+SnNOXywq27vpuGAMPiUt1GqD/Mo7qmqPtnxjwlAGpwntObMoXZ7rYPY0JbZeQALuH5ILgdB04t89/1O/w1cDnyilFU=';
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);

$bot = new BOT_API($channelSecret, $access_token);
$_msg = $arrJson['events'][0]['message']['text'];


if (strpos($_msg, 'ID') !== false) {
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->source->userId));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

} else {
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();
	
}
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->source->userId));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}