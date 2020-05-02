<?php

declare(strict_types=1);

namespace LaSalle\ChupiTest\Infrastructure\Fake;

use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;
use LaSalle\ChupiTest\Domain\ColorExpectFakeRepository;

final class RandomColorExceptFake implements ColorExpectFakeRepository
{
    public function _random_color_except(string $colorExcept, RandomColorSearcher $randomColorSearcher):string
    {
        $randomColorGenerate = $colorExcept;

        while ($colorExcept === $randomColorGenerate) {
            $randomColorGenerate = $randomColorSearcher();
        }
    
        return $randomColorGenerate;
    }
}