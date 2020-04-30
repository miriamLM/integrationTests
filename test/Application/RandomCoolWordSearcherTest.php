<?php 

declare(strict_types=1);

namespace LaSalle\ChupiTest\Application;

use PHPUnit\Framework\TestCase;
use LaSalle\ChupiTest\Infrastructure\InMemoryCoolWordStub;
use LaSalle\ChupiProject\Module\CoolWord\Domain\RandomCoolWordSearcher;

final class RandomCoolWordSearcherTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetRandomCoolWord()
    {
        $coolWordStub = new InMemoryCoolWordStub();
        $randomColorSearcher = new RandomCoolWordSearcher($coolWordStub);

        $coolWordReceive = $randomColorSearcher();

        $this->assertEquals('Chachi pistachi!', $coolWordReceive);

    }

}