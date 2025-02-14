<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\Stanley,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class StanleyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Stanley;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
