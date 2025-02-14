<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Denver,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DenverTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Denver;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
