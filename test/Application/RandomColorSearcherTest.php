<?php 

declare(strict_types=1);

namespace LaSalle\ChupiTest\Application;

use LaSalle\ChupiProject\Module\Color\Domain\Exception\NotFoundColorException;
use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;
use LaSalle\ChupiTest\Infrastructure\{InMemoryColorStub, InMemoryEmptyColorStub};
use PHPUnit\Framework\TestCase;

final class RandomColorSearcherTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetRandomColor()
    {
        $colorStub = new InMemoryColorStub();
        $randomColorSearcher = new RandomColorSearcher($colorStub);

        $colorReceive = $randomColorSearcher();

        $this->assertEquals('green', $colorReceive);

    }

    /**
     * @test
     */
    public function shouldTrowExceptionWhenCoolWordCollectionIsEmpty()
    {
        $this->expectException(NotFoundColorException::class);

        $colorStub = new InMemoryEmptyColorStub();
        $randomColorSearcher = new RandomColorSearcher($colorStub);

        $colorReceive = $randomColorSearcher();

        $this->assertEquals([], $colorReceive);

    }
}