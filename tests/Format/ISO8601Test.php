<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\ISO8601,
    FormatInterface,
};
use PHPUnit\Framework\TestCase;

class ISO8601Test extends TestCase
{
    public function testInterface()
    {
        $format = new ISO8601;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::ATOM, (string) $format);
    }
}
