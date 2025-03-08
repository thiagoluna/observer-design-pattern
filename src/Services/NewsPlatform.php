<?php

namespace App\Services;

use App\Services\Interfaces\BitcoinPriceObserverInterface;

class NewsPlatform implements BitcoinPriceObserverInterface
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