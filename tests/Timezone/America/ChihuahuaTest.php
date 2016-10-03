<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\Chihuahua,
    TimezoneInterface
};

class ChihuahuaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new Chihuahua;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(-6, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-06:00', (string) $zone);
        } else {
            $this->assertSame(-7, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('-07:00', (string) $zone);
        }
    }
}
