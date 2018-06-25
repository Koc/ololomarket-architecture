<?php

namespace Ololomarket\Domain\Core;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
trait IntId
{
    /**
     * @var int
     */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
