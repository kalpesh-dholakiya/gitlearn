<?php

use Illuminate\Support\Facades\Mail;
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
    // return view('welcome');

    $data = [
        'title' => 'hi send mail ',
        'content' => 'this is laravel send mail',

    ];

    Mail::send('emails.test', $data, function ($message) {
        $message->to('dholakiyakalpesh79@gmail.com', "kalpesh")->subject('Hello student');
    });
});
