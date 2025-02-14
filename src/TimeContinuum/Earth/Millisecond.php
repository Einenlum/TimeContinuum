<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    TimeContinuum\MillisecondInterface,
    Exception\InvalidArgumentException,
};

final class Millisecond implements MillisecondInterface
{
    private $millisecond;

    public function __construct(int $millisecond)
    {
        if ($millisecond < 0 || $millisecond > 999) {
            throw new InvalidArgumentException;
        }

        $this->millisecond = $millisecond;
    }

    public function toInt(): int
    {
        return $this->millisecond;
    }

    public function __toString(): string
    {
        return (string) $this->millisecond;
    }
}
