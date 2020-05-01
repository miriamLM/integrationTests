<?php 

declare(strict_types=1);

namespace LaSalle\ChupiTest\Infrastructure;

use LaSalle\ChupiProject\Module\Color\Domain\ColorRepository;

final class InMemoryEmptyColorStub implements ColorRepository
{
    public function all(): array
    {
        return [];
    }
}

