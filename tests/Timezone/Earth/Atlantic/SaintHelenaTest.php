<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\SaintHelena,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaintHelenaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintHelena;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
