<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Qatar,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class QatarTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Qatar;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
