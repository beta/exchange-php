# exchange-php

Backend code of a simple web app for currency exchange. The base currency is CNY.

Exchange rates are all retrived from [ECB](http://www.ecb.europa.eu/stats/exchange/eurofxref/html/index.en.html) via [Fixer.io](https://fixer.io/). 

## APIs

 - `GET /` returns all the currencies that can be exchanged into CNY.
 - `GET /$currency/$amount` returns the equivalent amount in CNY exchanged from the given currency. For example `GET /JPY/100`.

## Installation

```
git clone https://github.com/beta/exchange-php.git exchange
cd exchange
composer install
```

## Credits

 - [Fixer.io](http://fixer.io/)
 - [Flight](http://flightphp.com/)

## License

Open-sourced under the MIT License.
