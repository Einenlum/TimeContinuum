<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Move\Earth;

use Innmind\TimeContinuum\{
    Move\Earth\Month,
    PointInTimeInterface,
    PointInTime\Earth\PointInTime,
    FormatInterface,
};
use PHPUnit\Framework\TestCase;

class MonthTest extends TestCase
{
    /**
     * @dataProvider cases
     */
    public function testInterface($time, $expectedForward, $expectedBackward)
    {
        $format = new class implements FormatInterface {
            public function __toString(): string
            {
                return 'Y-m-d H:i:s.u';
            }
        };
        $forward = Month::forward(1);
        $backward = Month::backward(1);

        $point = $forward(new PointInTime($time));

        $this->assertInstanceOf(PointInTimeInterface::class, $point);
        $this->assertSame($expectedForward, $point->format($format));

        $point = $backward(new PointInTime($time));

        $this->assertInstanceOf(PointInTimeInterface::class, $point);
        $this->assertSame($expectedBackward, $point->format($format));
    }

    public function cases(): array
    {
        return [
            ['2016-02-29 13:12:11.675', '2016-03-29 13:12:11.675000', '2016-01-29 13:12:11.675000'],
            ['2016-01-30 13:12:11.675', '2016-02-29 13:12:11.675000', '2015-12-30 13:12:11.675000'],
            ['2017-12-31 13:12:11.675', '2018-01-31 13:12:11.675000', '2017-11-30 13:12:11.675000'],
        ];
    }
}
