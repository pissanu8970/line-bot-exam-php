<?php



require "vendor/autoload.php";

$access_token = 'Tq1val+hgUVfESJt93KewQg6jHl8y0iXWSJV/drOWFi8oxG1u1XNnwFQUOixPFlGFqj+OkysZanM2L2v6ZdJ0RZXZEgVi0lsG7dxtnz6XmZJO4xg9qkXemyaWH+0mm0Uvrj4dd4bfF+aZr/rwaj5rgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







