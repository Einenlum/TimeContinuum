<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Casablanca,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CasablancaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Casablanca;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
