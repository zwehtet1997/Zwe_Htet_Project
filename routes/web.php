<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/','UI/landing');
Route::prefix('UI')->group(function()
{
    Route::get('/landing',function()
    {
        return view('UI.landing');
    });
    Route::get('/detail',function()
    {
        return view('UI.movie-detail');
    });
    Route::get('/actor',function()
    {
        return view('UI.movie-actor');
    });
});

// function lol(){
//     echo "Hello Student.";
// }

// lol();

// -------------------------------Conditional-------------------------------------
// $a=100;
// if($a>=100)
// {
//     echo "A is greater than or equal with 100";
// }
// -------------------------------------------------------------------------------

// --------------------------------Recersive Function-----------------------------
// function recursion($a)
// {
//     if ($a < 20) {
//         echo nl2br("$a\r\n");
//         recursion($a + 1);
//     }
// }
// recursion(1);
// ----------------------------------------------------------------------------------

// --------------------------------global function-------------------------------
// $a = 1;
// $b = 2;

// function Sum()
// {
//     global $a, $b;
//     $b = $a + $b;
// } 
// Sum();
// echo $b;

// ----------------------------------------------------------------------------------


// class hee{                                 // Class Declare
//     // public $a='a default value';        // Variable Declare
//     public static function harrharr()      // Method Declare
//     {
//         echo nl2br("Welcome Laravel\r\n");                 // Return Text
//         echo "Welcome Laravel<br>";
//         return "Hello World";
//     }
// }

// Route::get('/HelloWorld', function () {    // select(/) khan pee HelloWorld lox yite pee run
//     return "Hello World";
// });

// Route::get('/', function () {     // select(/) khan pee run yone pel
//     // echo "HelloWorld";
//     echo  hee::harrharr();               // echo classname :: methodname();
//     // return view('welcome');             // return ka method htal mhr yay htr
// });

        // "files": [
        //     "app/Function/Helpers.php"
        // ],


?>