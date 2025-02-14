<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Virgin,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VirginTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Virgin;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
