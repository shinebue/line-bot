<?php

include ('line-bot.php');

$bot = new \LINE\LINEBot(new CurlHTTPClient('your-channel-token'), [
    'channelSecret' => 'f475cac7a9e191fad18a48480516b2a2'
]);

$res = $bot->getProfile('user-id');


echo $res