<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\Reykjavik,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ReykjavikTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Reykjavik;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
