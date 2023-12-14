<?php

namespace App\Exception;

class BadRequestException extends \DomainException
{
    public static function drop(string $message): self
    {
        return new self($message);
    }
}