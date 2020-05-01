<?php

namespace LaSalle\ChupiProject\Module\Color\Domain\Exception;

use DomainException;

final class NotFoundColorException extends DomainException
{
    public function __construct()
    {
        parent::__construct($this->errorMessage());
    }

    public function errorMessage():string
    {
        return "Not found color.";
    }
}