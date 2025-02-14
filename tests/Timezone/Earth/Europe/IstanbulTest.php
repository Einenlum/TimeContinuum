<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Istanbul,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class IstanbulTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Istanbul;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
