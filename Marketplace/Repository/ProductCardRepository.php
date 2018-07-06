<?php

namespace Ololomarket\Domain\Marketplace\Repository;

use Ololomarket\Domain\Catalog\ValueObject\ProductId;
use Ololomarket\Domain\Marketplace\Entity\ProductCard;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
interface ProductCardRepository
{
    public function get(ProductId $id): ProductCard;

    public function save(ProductCard $productCard): void;
}
