<?php

namespace Ololomarket\Domain\PriceAggregator\Service;

class OrderedTreeIterator implements \IteratorAggregate
{
    private $unordered;

    private $ordered;

    public static function fromIterator(iterable $categoryParser): self
    {

    }

    public function getIterator()
    {
        if (null !== $this->ordered) {
            yield from $this->ordered;

            return;
        }

        // perform sort, throw exception on recursion
    }
}
