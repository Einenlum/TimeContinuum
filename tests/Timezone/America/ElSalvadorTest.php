<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\{
    Timezone\America\ElSalvador,
    TimezoneInterface
};

class ElSalvadorTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new ElSalvador;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(-6, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('-06:00', (string) $zone);
        $this->assertFalse($zone->daylightSavingTimeApplied());
    }
}
