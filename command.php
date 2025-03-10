<?php

use App\Criptocurrency\BinanceAPI;
use App\Criptocurrency\Bitcoin;
use App\Services\BinancePriceLoggerInterface;
use App\Services\InvestorNotifier;
use App\Services\NewsPlatform;

require __DIR__ . '/vendor/autoload.php';

$bitcoin = new Bitcoin();

$binanceApi = new BinanceAPI();
$newPrice = $binanceApi->getLastPrice();

$bitcoin->addObservers(new BinancePriceLoggerInterface());
$bitcoin->addObservers(new InvestorNotifier());
$bitcoin->addObservers(new NewsPlatform());

$bitcoin->setPrice($newPrice);