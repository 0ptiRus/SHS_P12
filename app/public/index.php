<?php

// $array = [
//     "Russia" => ["capital" => "Moscow", "citizen" => 140000],
//     "China" => ["capital" => "Beijing", "citizen" => 12000],
//     "Belarus" => ["capital" => "Minsk", "citizen" => 1300000],
    
// ];

// foreach($array as $key => list("capital" => $capital, "citizen" => $citizen))
// {
//     var_dump($key);
//     var_dump($capital);
//     var_dump($citizen);
// }

// $var = "20";

// try {
//     $return = match ($var)
//     {
//         "val1" => "for_var_1",
//         "val2" => "for_var_3",
//         "val3" => "for_var_3",
//         20 => "20",
//         // default => "default"
//     };
// }
// catch(Throwable $e)
// {
//     echo "Exception";
// }

// echo PHP_EOL;
// echo $return;

// $micro = microtime(true);

// for($i = 0; $i < 5000000; $i++)
// {
//     $var = "var1";
//     $return = null;

//     switch($var)
//     {
//         // case "var1":
//         //     $return = "val_for_val1";
//         //     break;
//         // case "var2":
//         //     $return = "val_for_val2";
//         //     break;
//         // case "var3":
//         //     $return = "val_for_val3";
//         //     break;
//         // default:
//         //     $return = "base_val";
//         //     break;
        
//     }

//     switch(true)
//     {
//         // case "var1":
//         //     $return = "val_for_val1";
//         //     break;
//         // case "var2":
//         //     $return = "val_for_val2";
//         //     break;
//         // case "var3":
//         //     $return = "val_for_val3";
//         //     break;
//         // default:
//         //     $return = "base_val";
//         //     break;
        
//         case $i < 1000:
//             $return = "val1";
//             break;
//         case $i < 2000:
//             $return = "val2";
//             break;
//         case $i < 3000:
//             $return = "val3";
//             break;
                        
//     }
// }

// echo microtime(true) - $micro;
// echo PHP_EOL;

// $micro = microtime(true);

// for($i = 0; $i < 5000000; $i++)
// {
//     // $var = "val1";
//     // try {
//     // $return = match ($var)
//     //     {
//     //         "val1" => "for_var_1",
//     //         "val2" => "for_var_3",
//     //         "val3" => "for_var_3",
//     //         20 => "20",
//     //         // default => "default"
//     //     };
//     // }
//     // catch(Throwable $e)
//     // {
//     //     echo "Exception";
//     // }

//     $return = null;
//     if($i < 1000)
//     {
//         $return = "val1";
//     }
//     else if($i < 2000)
//     {
//         $return = "val2";
//     }
//     else if($i < 3000)
//     {
//         $return = "val3";
//     }
// }

// echo microtime(true) - $micro;

// include "../src/main.php";

// $main = new Main();

// var_dump($main);
// echo PHP_EOL;
// var_dump($main->var1);
// $main->var1 = "not a var";
// var_dump($main->var1);
// echo PHP_EOL;

// var_dump(Main::$ps);
// echo PHP_EOL;

// var_dump($main->func());
// echo PHP_EOL;

// $int = 5;
// Main::stat_func($int);

// echo $int;
// echo PHP_EOL;

// print_r($_GET);
// print_r($_POST);
// print_f($_FILES);

// if(isset($_FILES["upload_file"]))
// {
//     move_uploaded_file(["upload_file"]["tmp_name"], '/app/public/ .$_FILES[upload_file][tmp_name]');
// }

include('../src/main.php');

$main = new Main();

$main->main();