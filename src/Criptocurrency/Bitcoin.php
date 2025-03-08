<?php

namespace App\Criptocurrency;

use App\Services\BitcoinPriceObserver;

class Bitcoin
{
    public function __construct(
        private float $price = 0,
        private array $observers = [],
    ) {
    }

    /**
     * @param float $newPrice
     * @return void
     */
    public function setPrice(float $newPrice): void
    {
        if ($newPrice !== $this->price) {
            $this->price = $newPrice;
        }

        $this->notifyObservers();
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param BitcoinPriceObserver $observer
     * @return void
     */
    public function addObservers(BitcoinPriceObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @return void
     */
    private function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->price);
        }
    }
}