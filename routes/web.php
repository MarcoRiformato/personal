<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HousingController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\RidesharingController;
use App\Models\Ridesharing;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Jetstream\Rules\Role;
use Psy\CodeCleaner\FunctionContextPass;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'user' => Auth::user()
        ]);
    })->name('dashboard');
});

Route::get('/login', function(){
    return Inertia::render('Auth/Login');
})->name('login');

Route::get('/register', function(){
    return Inertia::render('Auth/Register');
})->name('register');

Route::controller(HousingController::class)->group(function(){
    Route::get('/trovacoinquilino','show')->name('HousingIndex');
    Route::get('/nuovoanncasa','create')->name('newHousing');
    Route::post('/housingadeded','store')->name('housingadded');
});

Route::resource('/selezionatratta', RidesharingController::class);

Route::resource('/elbalavoro', JobsController::class);






