<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Route;





Route::get('/',[UsersController::class,'index']);


Route::post('/user/store',[UsersController::class,'store']);

