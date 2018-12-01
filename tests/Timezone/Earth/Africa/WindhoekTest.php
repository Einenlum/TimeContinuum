<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Windhoek,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WindhoekTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Windhoek;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(2, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+02:00', (string) $zone);
    }
}
