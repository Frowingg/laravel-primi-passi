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

    $data = [
        'students' => ['Franco', 'Alessia', 'Maria'],
        // 'drama' => [ 
        //     'title' => 'a',
        //     'year' => 'aa',
        // ],
        // 'comedy' => [ 
        //     'title' => 'b',
        //     'year' => 'bb',
        // ],
        // 'action' => [ 
        //     'title' => 'c',
        //     'year' => 'cc',
        // ],
    ];

    return view('home', $data);

})->name('home');;
