<?php // src/Entity/User.php

namespace App\Entity;

use App\Interface\AuthenticatedUserInterface;

class User implements AuthenticatedUserInterface
{
    public function __construct(private int $id, private string $name)
    {
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setPassword(string $password): void
    {
        echo 'Setting password...';
    }
}