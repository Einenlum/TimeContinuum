<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\Lima,
    TimezoneInterface
};

class LimaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Lima;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-5, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-05:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
