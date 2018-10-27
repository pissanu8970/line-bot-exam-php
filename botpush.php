<?php



require "vendor/autoload.php";

$access_token = 'Tq1val+hgUVfESJt93KewQg6jHl8y0iXWSJV/drOWFi8oxG1u1XNnwFQUOixPFlGFqj+OkysZanM2L2v6ZdJ0RZXZEgVi0lsG7dxtnz6XmZJO4xg9qkXemyaWH+0mm0Uvrj4dd4bfF+aZr/rwaj5rgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8c2b0398d5f3157e5752fa8315f7d0ea';

$pushID = 'U2385f06ee5cdc234f0aae24d3491a821';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







