<?php

namespace Models;
use Database\Db;

class User 
{
    public ?int $id;
    public ?string $login;
    public ?string $password;
    public ?string $token;

    // public function __construct($_id, $_login, $_password, $_token)
    // {
    //     $id = $_id;
    //     $login = $_login;
    //     $password = $_password;
    //     $token = $_token;
    // }

    public static function getAllUsers() : array
    {
        return $rows = Db::getInstance()
            ->getRowByClass(
                "select * from users;",
                "\Models\User"
            );
    }

    public static function getUserByLogin($login) : array
    {
        $rows = Db::getInstance()
            ->getRowByClass(
                sql: "select * from users where login = '$login'",
                class: "\Models\User"
        );

        if(count($rows) > 0)
        {
            return $rows;
        }
        else
        {
            return [];
        }
    }

    public static function updateUserToken(int $userId, string $token) : bool
    {
        $sql = "UPDATE users SET token = :token WHERE id = :id";
        $params = [
            ':token' => $token,
            ':id' => $userId,
        ];

        return Db::getInstance()->execute($sql, $params);
    }

}