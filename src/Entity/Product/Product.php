<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

class Product extends BaseProduct
{
    private $color;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
