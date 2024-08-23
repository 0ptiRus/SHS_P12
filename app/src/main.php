<?php

use Request\Get;
use Request\Post;
use Request\Server;
use Routing\Route;
use Shop\Customer\Order;

class Main 
{
    private Get $get;

    private Post $post;

    private Server $server;

    private Route $route;
    // public string $var1 = "var1";
    // protected $var2 = "var2";
    // private $var3 = "var3";

    // public static $ps = "ps";

    // public function func() : string 
    // {
    //     return $this->var1;
    // }

    // public static function stat_func(int &$int) : void 
    // {
    //     $int++;
    // }

    public function main() : void
    {
        $this->init();
        echo "RUN SUCCESSFUL";
        $order = new Order();
        // print_r($this->get->all());
        // print_r($this->post->all());
        // print_r($this->server);
        $namespace = $this->route->getParent();
        $base = $this->route->getBase();

        if($base)
        {
            $class =  "Controllers\\" . implode("\\", $namespace) . "\\" . $base[0];
            $object = new $class();
            if($this->server->isGet())
            {
                echo $object->getRequest($this->get);
            }
            else if($this->server->isPost())
            {
                echo $object->postRequest($this->post);
            }
        }
        print_r($namespace);
        print_r($base);
    }

    private function init() : void
    {
        spl_autoload_register(function($class)
        {
            $file = __DIR__ . "/" . str_replace('\\', '/', $class) . ".php";
            if(file_exists($file))
            {
                print_r($file);
                include($file);
                return true;
            }
            return false;
        });

        $this->get = new Get($_GET);  
        $this->post = new Post($_POST);   
        $this->server = new Server($_SERVER);
        $this->route = new Route($_SERVER["REQUEST_URI"]);   
    }
}