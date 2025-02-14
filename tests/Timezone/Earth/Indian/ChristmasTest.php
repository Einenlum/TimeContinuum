<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Christmas,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChristmasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Christmas;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
