<?php

namespace App\Services;

class InvestorNotifier implements BitcoinPriceObserver
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