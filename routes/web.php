<?php

<<<<<<< HEAD
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\jobcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Indexcontroller::class,"index"]);
Route::get('/about', [Indexcontroller::class,"about"]);
Route::get('/contact', [Indexcontroller::class,"contact"]);

route::get('job',[Jobcontroller::class,'index']);
=======
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 7abed62 (creat job-board1)
