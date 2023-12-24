<?php

declare(strict_types=1);

namespace Gerent\Repository;

use Gerent\Entity\User;

interface IUserRepository
{
    public function save(User $user): void;

    public function findById(string $id): ?User;

    public function getAll(): array;
}