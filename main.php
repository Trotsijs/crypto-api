<?php declare(strict_types=1);

require 'vendor/autoload.php';

use App\ApiClient;
use App\CryptoReport;

$client = new ApiClient();

$cryptoCurrencies = $client->getReport();


echo
"
 __    ___   _     ___  _____  ___        __    ___   _  
/ /`  | |_) \ \_/ | |_)  | |  / / \      / /\  | |_) | | 
\_\_, |_| \  |_|  |_|    |_|  \_\_/     /_/--\ |_|   |_| 

";

$input = readline(' ▶ PRESS "ENTER" TO LIST TOP 5 RANKED CRYPTO COINS ◀ ');


if ($input == '') {
    echo "==================================", PHP_EOL;
    echo PHP_EOL;

    foreach ($cryptoCurrencies->data as $coin) {
        $crypto = new CryptoReport(
            $coin->name,
            $coin->symbol,
            $coin->quote->USD->price,
            $coin->quote->USD->percent_change_24h,
            $coin->quote->USD->market_cap,
            $coin->cmc_rank
        );

        echo "(#{$crypto->getRank()}) {$crypto->getName()} [{$crypto->getSymbol()}]".PHP_EOL;
        echo '  ■  Price: $'.number_format($crypto->getPriceUsd(), 2).PHP_EOL;
        echo '  ■  Price change 24h: '.number_format($crypto->getPriceChange24h(), 2).'%'.PHP_EOL;
        echo '  ■  Market Cap: $'.number_format($crypto->getMarketCap()).PHP_EOL;
        echo PHP_EOL;
        echo "==================================", PHP_EOL;
        echo PHP_EOL;

    }


}