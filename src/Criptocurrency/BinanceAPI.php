<?php

namespace App\Criptocurrency;

class BinanceAPI
{
    /**
     * Simulate the API call to get the last price of Bitcoin
     *
     * @return float
     */
    public function getLastPrice(): float
    {
        return rand(0, 99999);
    }
}