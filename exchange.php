<?php 

namespace Exchange;

require 'fixer.php';

class Exchange {
  
  public function getCurrencyList() {
    $currencies = Fixer::getCurrencyList('CNY');
    return \json_encode($currencies);
  }

  public function calculateExchange($currency, $amount) {
    $rate = Fixer::getExchangeRateBetweenCurrencies('CNY', strtoupper($currency));

    if (NULL === $rate) {
      return 'ERROR';
    } else {
      $exchangedAmount = round($amount / $rate, 2);
      return $exchangedAmount;
    }
  }

}