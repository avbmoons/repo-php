<?php

class Cart
{
    private array $products = [];

    public function getTotal(): float
    {
        $price = 0;
        foreach ($this->products as $product) {
            $price += $product->getPrice();
        }
        return $price;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $products): void
    {
        $this->products = $products;
    }
}
