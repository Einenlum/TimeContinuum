<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Johannesburg,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JohannesburgTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Johannesburg;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(2, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+02:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
