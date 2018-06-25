<?php

namespace Ololomarket\Domain\Marketplace\Entity;

use Ololomarket\Domain\Marketplace\ValueObject\OfferId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
abstract class AbstractOffer
{
    /**
     * @var OfferId
     */
    protected $id;

    /**
     * @var Company
     */
    protected $company;

    /**
     * @var bool
     */
    protected $available;

    /**
     * //FIXME: money type
     * @var float
     */
    protected $price;

    //FIXME: add more fields;
}
