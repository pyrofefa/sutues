<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;


use App\Http\Controllers\webController;
use App\Http\Controllers\Admin\SecretariesController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\DocumentsController;
use App\Http\Controllers\Admin\TransparencyObligationsController;
use App\Http\Controllers\Admin\ConvocationsController;
use App\Http\Controllers\Admin\SuppliersController;
use App\Http\Controllers\Admin\QuarterlyReportsController;
use App\Http\Controllers\Admin\MeetingSesionsController;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('users', UserController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return Inertia::render('Dashboard');
        })->name('dashboard');
        Route::resource('secretaries',SecretariesController::class);
        Route::resource('staff',StaffController::class);
        Route::resource('news',NewsController::class);
        Route::resource('convocations',ConvocationsController::class);
        Route::resource('documents',DocumentsController::class);
        Route::resource('transparency-obligations',TransparencyObligationsController::class);
        Route::resource('quarterly-reports',QuarterlyReportsController::class);
        Route::resource('/suppliers',SuppliersController::class);
        Route::resource('/meetings',MeetingSesionsController::class);

        Route::prefix('files-delete')->group(function () {
            Route::get('/news/{id}', [NewsController::class, 'deleteFile'])->name('file.news');
            Route::get('/convocations/{id}', [ConvocationsController::class, 'deleteFile'])->name('file.convocations');
            Route::get('/documents/{id}', [DocumentsController::class, 'deleteFile'])->name('file.documents');
            Route::get('/transparency/{id}', [TransparencyObligationsController::class, 'deleteFile'])->name('file.transparency');
            Route::get('quarterly-reports/{id}',[QuarterlyReportsController::class, 'deleteFile'])->name('file.quarterly');
            Route::get('meetings/{id}',[MeetingSesionsController::class, 'deleteFile'])->name('file.meetings');

        })->name('files');

        Route::prefix('pictures-delete')->group(function () {
            Route::get('/news/{id}', [NewsController::class, 'deletePicture'])->name('picture.news');
            Route::get('/convocations/{id}', [ConvocationsController::class, 'deletePicture'])->name('picture.convocations');
            Route::get('/documents/{id}', [DocumentsController::class, 'deletePicture'])->name('picture.documents');
        })->name('files');
    })->name('admin');
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
Route::get('/documentos/{slug}', [webController::class, 'documentsDetails'])->name('documentsDetails');
Route::get('/convocatorias', [webController::class, 'convocations'])->name('convocations');
Route::get('/convocatorias/{slug}', [webController::class, 'convocationsDetails'])->name('convocationsDetails');

Route::prefix('transparencia')->group(function () {
    Route::get('/procedimiento-solicitud', [webController::class, 'applicationProcedure'])->name('applicationProcedure');
    Route::get('/oficina-de-enlace', [webController::class, 'cordinationOffice'])->name('cordinationOffice');
    Route::get('/comite-de-transparencia', [webController::class, 'transparencyCommission'])->name('transparencyCommission');
    Route::get('/obligaciones-de-transparencia', [webController::class, 'transparencyObligations'])->name('transparencyObligations');
    Route::get('/obligaciones-de-transparencia/{year}', [webController::class, 'transparencyObligationsYear'])->name('transparencyObligations.year');
    Route::get('/obligaciones-de-transparencia/download/{id}/{year}', [webController::class, 'downloadFileTransparency'])->name('transparencyObligations.download');
    Route::post('/obligaciones-de-transparencia/send', [webController::class, 'sendTransparency'])->name('transparency-obligations.send');
    Route::get('/informes-trimestrales-de-secretarias/{year}', [webController::class, 'quarterlyReports'])->name('quarterly-reports.years');
    Route::get('/actas-de-sesiones', [webController::class, 'meetingSessions'])->name('meeting-sessions');
    Route::get('/actas-de-sesiones/{slug}', [webController::class, 'meetingsDetails'])->name('meetingsDetails');
})->name('transparency');

Route::get('/noticias', [webController::class, 'news'])->name('news');
Route::get('/noticias/{slug}', [webController::class, 'newsDetails'])->name('newsDetails');
Route::get('/proveedores', [webController::class, 'suppliers'])->name('suppliers');

Route::get('/contactanos', [webController::class, 'contactUs'])->name('contactUs');
Route::post('/contactanos/send', [webController::class, 'sendContactUs'])->name('contactUs.send');


Route::get('/download/{id}/{type}', [webController::class, 'downloadFile'])->name('download');

require __DIR__.'/auth.php';
