<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
		$data=[
			"frase1" => "di gnomi, dove gli ospiti a un bambino",
			"frase2" => "tavola, improvvisato",
			"frase3" => "ritroverai in un rugoso grumo",
			"frase4" => "mio figlio piange",
			"frase5" => "paralisi, faccina",
			"frase6" => "a cinque anni",
			"frase7" => "fuori che l'acqua era tutto artificio",
			"frase8" => "maniglie girando, chinato",
			"frase9" => "per condurti laddove ora ti aggiri",
			"frase10" => "ti ergi solitario, o in mezzo a un prato"
		];

		return view('home', $data);
});
