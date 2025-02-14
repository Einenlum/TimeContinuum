<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\NorthDakota;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\NorthDakota\Center,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CenterTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Center;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
