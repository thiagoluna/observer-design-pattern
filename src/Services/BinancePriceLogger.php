<?php

namespace App\Services;

class BinancePriceLogger implements BitcoinPriceObserver
{

    /**
     * @param float $price
     * @return void
     */
    public function update(float $price): void
    {
        // TODO: Implement update() method.
        echo "Logger updated with new price: $price" . PHP_EOL;
    }
}