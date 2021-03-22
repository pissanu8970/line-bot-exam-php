<?php


$access_token = 'KiBadtnVUYd9aM+1CYBADxOa+Yr15zjwcH02DgYoXMqQ8siHtQPWAijmxKIviDfwO/6OpCuQO3cOGUjVQiLhdUKwJyncbDGw6hyo461gdXjt8I+kc9Tgh+sIOd2JprdeMaS+sB2jEgzyf4J0ZwSoRQdB04t89/1O/w1cDnyilFU=';

$userId = 'U9f3e4bf99525d593490bac0982259d17';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

