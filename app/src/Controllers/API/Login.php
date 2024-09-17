<?php

namespace Controllers\API;

use Request\Post;
use Database\Db;
use Models\User;
class Login
{
    public function postRequest(Post $request) : string
    {
        if($request->has("login") && $request->has("password"))
        {
            $user = User::getUserByLogin($request->get("login"));
            if ($user[0]->password === $request->get("password"))
            {
                $token = $this->generateToken();
                User::updateUserToken($user[0]->id, $token);
                $user[0]->token = $token;
                return json_encode(["token" => $token]);
            }
            else
            {
                return json_encode(value: ["error" => "Password doesn't match"]);
            }
        }
        else
        {
            return json_encode(["error" => "User not found"]);
        }
    }
    
            public function generateToken($length = 32) : string
            {
                return bin2hex(random_bytes($length / 2));
            }
}