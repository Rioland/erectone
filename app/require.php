<?php

require "./vendor/autoload.php";
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
$client = new CoinGeckoClient();
// $data = $client->derivatives()->getExchanges();
// $data = $client->simple()->getPrice('0x,bitcoin', 'usd,rub');
// $data = $client->coins()->getList();
$data = $result = $client->coins()->getMarkets('gbp');
// $data = $client->simple()->getSupportedVsCurrencies();

$response = $client->getLastResponse();
$headers = $response->getHeaders();

print_r($data);

?>