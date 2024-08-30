<?php

use Request\Request;
use Routing\Route;
use Shop\Customer\Order;

class Main 
{
    private Request $request;

    private Route $route;
    public function main() : void
    {
        $this->init();
        echo "RUN SUCCESSFUL";
        $order = new Order();
        $namespace = $this->route->getParent();
        $base = $this->route->getBase();

        if($base)
        {
            $class =  "Controllers\\" . implode("\\", $namespace) . "\\" . $base[0];
            $object = new $class();
            if($this->request->getServer()->isGet())
            {
                echo $object->getRequest($this->request->getGet());
            }
            else if($this->request->getServer()->isPost())
            {
                echo $object->postRequest($this->request->getPost());
            }
        }
        print_r($namespace);
        print_r($base);
    }

    private function init() : void
    {
        include("Autoload.php");
        Autoload::registrate();
        $this->request = new Request($_GET, $_POST, $_SERVER);
        $this->route = new Route($_SERVER["REQUEST_URI"]);   
    }
}