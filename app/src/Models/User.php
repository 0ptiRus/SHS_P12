<?php

namespace Models;
use Database\Db;

class User 
{
    public ?int $id;
    public ?string $login;
    public ?string $password;
    public ?string $token;

    public static function getAllUsers() : array
    {
        return $rows = Db::getInstance()
            ->getRowByClass(
                "select * from users;",
                "\Models\User"
            );
    }

}