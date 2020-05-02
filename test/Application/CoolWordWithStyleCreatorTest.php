<?php

declare(strict_types=1);

namespace LaSalle\ChupiTest\Application;

use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;
use LaSalle\ChupiProject\Module\Color\Infrastructure\InMemoryColorRepository;
use LaSalle\ChupiTest\Infrastructure\Fake\RandomColorExceptFake;
use PHPUnit\Framework\TestCase;

final class CoolWordWithStyleCreatorTest extends TestCase
{
    /**
     * @test
    */
    public function shouldGenerateDifferentRandomColor()
    {
        $inMemoryColorRepository = new InMemoryColorRepository();
        $randomColorSearcher = new RandomColorSearcher($inMemoryColorRepository);

        $randomColorExceptFake = new RandomColorExceptFake();

        $actualColor = $randomColorExceptFake->_random_color_except("green", $randomColorSearcher);

        $this->assertNotEquals("green", $actualColor);
    }
}

