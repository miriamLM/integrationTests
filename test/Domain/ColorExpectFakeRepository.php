<?php

declare(strict_types=1);

namespace LaSalle\ChupiTest\Domain;

use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;

interface ColorExpectFakeRepository
{
    function _random_color_except(string $except, RandomColorSearcher $randomColorSearcher): string;

}