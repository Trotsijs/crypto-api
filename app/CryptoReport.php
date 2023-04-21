<?php declare(strict_types=1);

namespace App;

class CryptoReport
{
    private string $name;
    private string $symbol;
    private float $priceUsd;
    private float $priceChange24h;
    private float $marketCap;
    private int $rank;

    public function __construct
    (
        string $name,
        string $symbol,
        float $priceUsd,
        float $priceChange24h,
        float $marketCap,
        int $rank
    ) {
        $this->name = $name;
        $this->symbol = $symbol;
        $this->priceUsd = $priceUsd;
        $this->priceChange24h = $priceChange24h;
        $this->marketCap = $marketCap;
        $this->rank = $rank;

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getPriceUsd(): float
    {
        return $this->priceUsd;
    }

    public function getPriceChange24h(): float
    {
        return $this->priceChange24h;
    }

    public function getMarketCap(): float
    {
        return $this->marketCap;
    }

    public function getRank(): int
    {
        return $this->rank;
    }
}