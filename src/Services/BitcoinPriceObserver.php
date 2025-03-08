<?php

namespace App\Services;

interface BitcoinPriceObserver
{
    /**
     * @param float $price
     * @return void
     */
    public function update(float $price): void;
}