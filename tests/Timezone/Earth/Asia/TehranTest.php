<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Tehran,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TehranTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tehran;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(4, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('+04:30', (string) $zone);
        } else {
            $this->assertSame(3, $zone->hours());
            $this->assertSame(30, $zone->minutes());
            $this->assertSame('+03:30', (string) $zone);
        }
    }
}
