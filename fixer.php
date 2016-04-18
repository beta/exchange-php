<?php

namespace Exchange;

class Fixer {
  
  public function getCurrencyList($base) {
    $result = \file_get_contents("https://api.fixer.io/latest?base={$base}");
    $resultObj = \json_decode($result);
    
    if (\property_exists($resultObj, 'error')) {
      return NULL;
    } else {
      $currencies = \array_keys(\get_object_vars($resultObj->rates));
      return $currencies;
    }
  }
  
  public function getExchangeRateBetweenCurrencies($base, $currency) {
    $result = \file_get_contents("https://api.fixer.io/latest?base={$base}&currencies={$currency}");
    $resultObj = \json_decode($result);
    
    if (\property_exists($resultObj, 'error') || \count(\get_object_vars($resultObj->rates)) == 0) {
      return NULL;
    } else {
      return $resultObj->rates->$currency;
    }
  }
  
}