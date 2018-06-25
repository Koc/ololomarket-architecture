<?php

namespace Ololomarket\Domain\Catalog\Entity\Product;

use Ololomarket\Domain\Catalog\Entity\Product;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Family
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Product[]
     */
    private $products;
}
