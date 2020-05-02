<?php

declare(strict_types=1);

namespace LaSalle\ChupiTest\Infrastructure\Fake;

use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;

final class RandomColorExceptFake
{
    public function __invoke(string $colorExcept, RandomColorSearcher $randomColorSearcher):string
    {
        $randomColorGenerate = $colorExcept;

        while ($colorExcept === $randomColorGenerate) {
            $randomColorGenerate = $randomColorSearcher();
        }
    
        return $randomColorGenerate;
    }
}