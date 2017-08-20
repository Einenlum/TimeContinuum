<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Oral,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class OralTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Oral;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(5, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+05:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
