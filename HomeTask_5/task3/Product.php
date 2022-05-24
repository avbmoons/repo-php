<?php

class Product
{
    private string $title;
    private ?float $price;
    private ?array $components;

    public function __construct(string $title, ?float $price, ?array $components = [])
    {
        $this->title = $title;
        $this->price = $price;
        $this->components = $components;

        if (empty($components)) {
            $this->price = $price;
        } else {
            $this->updatePrice();
        }
    }

    private function updatePrice()
    {
        $price = 0;

        foreach ($this->components as $component) {
            $price += $component->getPrice();
        }
        $this->price = $price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
