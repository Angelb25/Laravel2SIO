<?php

use App\Models\Shoe;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shoes', function (){
    $shoes = Shoe::all();
    return view('index', [ 'shoes' => $shoes]);
});

Route::get('/shoes/{id}', function ($id){
    $DATA = [
        ['id' => 0, 'name' =>"Nike TN", 'price' =>150],
        ['id' => 1,'name' =>"Adidas", 'price' =>150]
    ];
    $maChaussure = $DATA[$id];
    return view('show', ['maChaussure' => $maChaussure]);
});
