<?php

namespace Ololomarket\Domain\Core;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
interface Collection
{
    public function add($element): void;

    public function contains($element): bool;

    public function containsKey($key): bool;

    public function get($key);

    public function removeElement($element): void;

    public function getValues(): array;
}
