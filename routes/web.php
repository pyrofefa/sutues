<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\webController;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/**SPA */
Route::get('/', [webController::class, 'home'])->name('home');
Route::prefix('conocenos')->group(function () {
    Route::get('/historia', [webController::class, 'history'])->name('history');
    Route::get('/estatutos', [webController::class, 'statutes'])->name('statutes');
    Route::get('/objetivos', [webController::class, 'objectives'])->name('objectives');
    Route::get('/secretarios', [webController::class, 'secretaries'])->name('secretaries');
    Route::get('/estuctura-organizacional', [webController::class, 'organization'])->name('organization');
    Route::get('/comite', [webController::class, 'staff'])->name('staff');
})->name('about');
Route::get('/documentos', [webController::class, 'documents'])->name('documents');
Route::get('/convocatorias', [webController::class, 'convocations'])->name('convocations');

Route::get('/noticias', [webController::class, 'news'])->name('news');
Route::get('/noticias/{id}', [webController::class, 'newsDetails'])->name('newsDetails');

Route::get('/contactanos', [webController::class, 'contactUs'])->name('contactUs');






require __DIR__.'/auth.php';
