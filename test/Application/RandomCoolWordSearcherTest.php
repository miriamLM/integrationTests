<?php 

declare(strict_types=1);

namespace LaSalle\ChupiTest\Application;

use PHPUnit\Framework\TestCase;
use LaSalle\ChupiTest\Infrastructure\{InMemoryCoolWordStub, InMemoryEmptyCoolWordStub};
use LaSalle\ChupiProject\Module\CoolWord\Domain\RandomCoolWordSearcher;
use LaSalle\ChupiProject\Module\CoolWord\Domain\Exception\NotFoundCoolWordException;

final class RandomCoolWordSearcherTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetRandomCoolWord()
    {
        $coolWordStub = new InMemoryCoolWordStub();
        $randomCoolWordSearcher = new RandomCoolWordSearcher($coolWordStub);

        $coolWordReceive = $randomCoolWordSearcher();

        $this->assertEquals('Chachi pistachi!', $coolWordReceive);

    }

    /**
     * @test
     */
    public function shouldTrowExceptionWhenCoolWordCollectionIsEmpty()
    {
        $this->expectException(NotFoundCoolWordException::class);
        $coolWordStub = new InMemoryEmptyCoolWordStub();
        $randomColorSearcher = new RandomCoolWordSearcher($coolWordStub);

        $coolWordReceive = $randomColorSearcher();

        $this->assertEquals([], $coolWordReceive);

    }


}