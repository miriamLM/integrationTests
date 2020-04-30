<?php

namespace LaSalle\ChupiProject\Module\Color\Domain;

final class RandomColorSearcher
{
    private $repository;

    public function __construct(ColorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        $colors = $this->repository->all();

        return $colors[mt_rand(0, count($colors) - 1)];
    }
}
