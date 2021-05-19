<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/* Route::get('/', function () {
    return Inertia::render('Welcome', [ 
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}); */

Route::get('/',[HomeController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])
->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})
->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
->get('/test', [TestController::class,'index'])
->name('test.index');