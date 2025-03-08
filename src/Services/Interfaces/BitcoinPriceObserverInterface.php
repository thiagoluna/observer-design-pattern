<?php

namespace App\Services\Interfaces;

interface BitcoinPriceObserverInterface
{
    /**
     * @param float $price
     * @return void
     */
    public function update(float $price): void;
}