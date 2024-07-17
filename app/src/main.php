<?php

class Main 
{
    public string $var1 = "var1";
    protected $var2 = "var2";
    private $var3 = "var3";

    public static $ps = "ps";

    public function func() : string 
    {
        return $this->var1;
    }

    public static function stat_func(int &$int) : void 
    {
        $int++;
    }
}