<?php
namespace Ttree\LearnNeosCustomNode\Domain\Model;

use Neos\ContentRepository\Domain\Model\Node;

class ProductNode extends Node
{
    public function getDiscountedPrice(): int
    {
        $price = $this->getProperty('price');
        $discount = $this->getProperty('discount');
        if ($discount > 0) {
            return $price - ($price * $discount / 100);
        }
        return $price;
    }
}
