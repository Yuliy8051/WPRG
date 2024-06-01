<?php

class Cart
{
    private $products;
    public function __constructor():void
    {
        $this->products = [];
    }
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }
    public function removeProduct(Product $product)
    {
        foreach ($this->products as $key => $item){
            if ($product === $item){
                unset($this->products[$key]);
            }
        }
    }
    public function getTotal()
    {
        $sum = 0;
        foreach ($this->products as $product){
            $sum += $product->getPrice() * $product->getQuantity();
        }
        return $sum;
    }

    public function __toString()
    {
        $description = "Products in cart:\n";
        foreach ($this->products as $product){
            $description .= $product . "\n";
        }
        $description .= "Total price: " . $this->getTotal();
        return $description;
    }

}