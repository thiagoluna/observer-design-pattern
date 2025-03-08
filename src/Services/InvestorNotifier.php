<?php

namespace App\Services;

use App\Services\Interfaces\BitcoinPriceObserverInterface;

class InvestorNotifier implements BitcoinPriceObserverInterface
{
    /**
     * @param float $price
     * @return void
     */
    public function update(float $price): void
    {
        // TODO: Implement update() method.
        echo "Investor notified with new price: $price" . PHP_EOL;
    }
}