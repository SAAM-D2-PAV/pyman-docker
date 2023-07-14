<?php // src/Service/UserFactory.php

namespace App\Service;

use App\Entity\User;

class UserFactory
{
    public static function create(int $id, string $name): User
    {
        return new User($id, $name);
    }
}