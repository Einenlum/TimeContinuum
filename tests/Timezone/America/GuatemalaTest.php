<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\Guatemala,
    TimezoneInterface
};

class GuatemalaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Guatemala;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-6, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-06:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
