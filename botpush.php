<?php



require "vendor/autoload.php";

$access_token = 'KiBadtnVUYd9aM+1CYBADxOa+Yr15zjwcH02DgYoXMqQ8siHtQPWAijmxKIviDfwO/6OpCuQO3cOGUjVQiLhdUKwJyncbDGw6hyo461gdXjt8I+kc9Tgh+sIOd2JprdeMaS+sB2jEgzyf4J0ZwSoRQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5716104aebcdaada7d5a0173cf9b24e0';

$pushID = 'U9f3e4bf99525d593490bac0982259d17';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







