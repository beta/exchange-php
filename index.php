<?php 

namespace Exchange;

ini_set('display_errors', 1);

require 'vendor/autoload.php';
require 'exchange.php';

use \Flight;

\mb_internal_encoding('UTF-8');
\mb_http_output('UTF-8');

Flight::route('GET /', function() {
  echo(Exchange::getCurrencyList());
});

Flight::route('GET /@currency/@amount', function($currency, $amount) {
  echo(Exchange::calculateExchange($currency, $amount));
});

Flight::start();