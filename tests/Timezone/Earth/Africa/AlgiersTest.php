<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Algiers,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AlgiersTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Algiers;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
