<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\SaintLucia,
    TimezoneInterface
};

class SaintLuciaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new SaintLucia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-4, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-04:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
