<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\HomeController;


Route::get('/', function () {
    return view('home.userpage');
});

route::get('redirect',[HomeController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('redirect', [Homecontroller::class, 'redirect']);