<?php

declare(strict_types=1);

namespace LaSalle\ChupiTest\Application;

use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;
use LaSalle\ChupiProject\Module\Color\Infrastructure\InMemoryColorRepository;
use LaSalle\ChupiTest\Domain\ColorExpectFakeRepository;
use LaSalle\ChupiTest\Infrastructure\Fake\RandomColorExceptFake;
use Mockery;
use PHPUnit\Framework\TestCase;

final class CoolWordWithStyleCreatorTest extends TestCase
{
    /**
     * @test
    */
    public function shouldCreateDifferentRandomColor()
    {
        $inMemoryColorRepository = new InMemoryColorRepository();
        $randomColorSearcher = new RandomColorSearcher($inMemoryColorRepository);

        $randomColorExceptFake = new RandomColorExceptFake();

        $actualColor = $randomColorExceptFake->_random_color_except("green", $randomColorSearcher);

        $this->assertNotEquals("green", $actualColor);
    }

    /**
     * @test
     */
    public function shouldCheckIfCreateDifferentRandomColor()
    {

        $colorSearcher = new RandomColorSearcher(new InMemoryColorRepository());

        $bgColor = $colorSearcher();

        $colorExpectFakeRepository = Mockery::mock(ColorExpectFakeRepository::class);
        $colorExpectFakeRepository
            ->shouldReceive('_random_color_except')
            ->once()
            ->with($bgColor,\Hamcrest\Matchers::equalTo($colorSearcher));

        $fgColor = $colorExpectFakeRepository->_random_color_except($bgColor, $colorSearcher);

        $this->assertNotEquals($bgColor, $fgColor);

    }
}

