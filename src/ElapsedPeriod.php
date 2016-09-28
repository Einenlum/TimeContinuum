<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\Exception\ElapsedPeriodCantBeNegativeException;

final class ElapsedPeriod
{
    private $milliseconds;

    public function __construct(int $milliseconds)
    {
        if ($milliseconds < 0) {
            throw new ElapsedPeriodCantBeNegativeException;
        }

        $this->milliseconds = $milliseconds;
    }

    public function milliseconds(): int
    {
        return $this->milliseconds;
    }

    public function longerThan(self $period): bool
    {
        return $this->milliseconds > $period->milliseconds();
    }
}
