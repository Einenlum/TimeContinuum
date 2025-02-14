<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Yap,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class YapTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yap;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
