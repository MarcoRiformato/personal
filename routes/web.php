<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HousingController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\RidesharingController;
use App\Models\Ridesharing;
use Illuminate\Foundation\Application;
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
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/trovacoinquilino', [HousingController::class, 'show'])->name('HousingIndex');
Route::get('/nuovoanncasa', [HousingController::class, 'create'])->name('newHousing');
Route::post('/housingadeded', [HousingController::class, 'store'])->name('housingadded');

Route::get('/selezionatratta', [RidesharingController::class, 'showSelect'])->name('SelezionaTratta');

Route::get('/elbalavoro', [JobsController::class, 'show'])->name('ElbaLavoro');

Route::get('/notizie', [ArticleController::class, 'show'])->name('notizie');

Route::get('/login', function(){
    return Inertia::render('Auth/Login');
})->name('login');

Route::get('/register', function(){
    return Inertia::render('Auth/Register');
})->name('register');



