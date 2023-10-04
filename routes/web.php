<?php

use Illuminate\Support\Facades\Route;

use App\Imports\DatalogImport;
use Maatwebsite\Excel\Facades\Excel;

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

Route::post('/import-csv', function(){
    Excel::import(new DatalogImport(), request()->file('csv-file'));
    dd("berhasil");
})->name('import.csv');
