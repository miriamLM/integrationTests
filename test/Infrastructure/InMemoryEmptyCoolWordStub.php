<?php 

declare(strict_types=1);

namespace LaSalle\ChupiTest\Infrastructure;

use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordRepository;

final class InMemoryEmptyCoolWordStub implements CoolWordRepository
{
    public function all(): array
    {
        return [];
    }
}

