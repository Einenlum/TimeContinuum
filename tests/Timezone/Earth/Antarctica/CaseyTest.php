<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\Casey,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CaseyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Casey;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
