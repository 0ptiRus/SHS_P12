<?php

namespace Request;

use Request\Get;
use Request\Post;
use Request\Server;

class Request 
{
    private Get $get;
    private Post $post;
    private Server $server;

    public function __construct(array $get_data, array $post_data, array $server_data)
    {
        $this->get = new Get($get_data);
        $this->post = new Post($post_data);
        $this->server = new Server($server_data);
    }

    public function getGet() : Get
    {
        return $this->get;
    }


    public function getPost() : Post
    {
        return $this->post;
    }


    public function getServer() : Server
    {
        return $this->server;
    }
}