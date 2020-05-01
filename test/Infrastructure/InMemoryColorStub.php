<?php

namespace LaSalle\ChupiTest\Infrastructure;

use LaSalle\ChupiProject\Module\Color\Domain\ColorRepository;

final class InMemoryColorStub implements ColorRepository
{
    public function all(): array
    {
        return ['green'];
    }
}
