<?php

namespace Ololomarket\Domain\Core;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
interface Collection
{
    public function add($object);

    public function getValues();
}
