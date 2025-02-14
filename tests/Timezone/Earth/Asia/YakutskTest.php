<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Yakutsk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class YakutskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yakutsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
