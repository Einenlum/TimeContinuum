<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Galapagos,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GalapagosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Galapagos;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
