<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Monrovia,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MonroviaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Monrovia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(0, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('Z', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
