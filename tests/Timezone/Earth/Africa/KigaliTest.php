<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Kigali,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KigaliTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kigali;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
