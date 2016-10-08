<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\Earth\Timezone
};

final class TelAviv implements TimezoneInterface
{
    use Timezone;

    public function __construct()
    {
        $this->use('Asia/Tel_Aviv');
    }
}
