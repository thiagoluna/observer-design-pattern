<?php

namespace App\Services;

class NewsPlatform implements BitcoinPriceObserver
{
    /**
     * @param float $price
     * @return void
     */
    public function update(float $price): void
    {
        // TODO: Implement update() method.
        echo "News Platform updated with new price: $price" . PHP_EOL;
    }
}