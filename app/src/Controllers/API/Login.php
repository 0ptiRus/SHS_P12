<?php

namespace Controllers\API;

use Request\Post;
use Database\Db;
use Models\User;
class Login
{
    public function postRequest(Post $request) : string
    {
        $alluser = User::getAllUsers();
        print_r($alluser);
        return print_r($request, true);
    }
}