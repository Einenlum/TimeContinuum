<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Norfolk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NorfolkTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Norfolk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
