<?php

use ProxyConversionRate\RateConverter;

require '../autoloader.php';

$converter = new RateConverter();
$rate = $converter->conversionRate('DKK');
printf("Exchange rate: %.2f\n", $rate);

$eur = 10;
$dkk = $eur * $rate;
printf("%.2f € is %.2f DKK\n", $eur, $dkk);


$proxy = new SoapClient('http://www.webservicex.net/CurrencyConvertor.asmx?wsdl');
$result = $proxy->ConversionRate([
    'FromCurrency' => 'AFA',
    'ToCurrency' => 'ALL',
]);
$rate = $result->ConversionRateResult;
printf("Exchange rate: %.2f\n", $rate);

$eur = 10;
$dkk = $eur * $rate;
printf("%.2f € is %.2f DKK\n", $eur, $dkk);
