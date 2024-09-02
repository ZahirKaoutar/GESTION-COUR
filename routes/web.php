<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileController;
use App\Models\Module;


Route::get('/sem',function(){
    return view ('CHIMIE.Semestre');
})->name('Semestre');

Route::get('/semModule1',function(){
    return view ('CHIMIE.modulesemestre.modulesemestre1');
})->name('modulesemestre1');
Route::get('/semModule2',function(){
    return view ('CHIMIE.modulesemestre.modulesemestre2');
})->name('modulesemestre2');
Route::get('/semModule3',function(){
    return view ('CHIMIE.modulesemestre.modulesemestre3');
})->name('modulesemestre3');



Route::get('/tp/{id}', [FileController::class, 'showpdf'])->name('tp');
Route::get('/td/{id}', [FileController::class, 'showpdf'])->name('td');
Route::get('/cours/{id}', [FileController::class, 'showpdf'])->name('cours');
;


// Routes pour les administrateurs
Route::middleware(['auth', 'admin'])->group(function () {


    Route::get('/cours/{id}/pdf', [AdminController::class, 'showPdf'])->name('cours.showPdf');

    Route::get('tp/pdf/{id}', [AdminController::class, 'showPdf'])->name('tp.showPdf');
    Route::get('td/pdf/{id}', [AdminController::class, 'showPdf'])->name('td.showPdf');

    Route::get('/affiche', [AdminController::class, 'index'])->name('show');

    Route::get('/ll', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/upload/cours', [AdminController::class, 'uploadCours'])->name('admin.upload.cours');

    Route::get('/admin/upload/show', [AdminController::class, 'showUploadForm'])->name('admin.upload.c');
    Route::get('/admin/upload/show/TP', [AdminController::class, 'showUploadTPForm'])->name('admin.upload.P');
    Route::get('/admin/upload/show/TD', [AdminController::class, 'showUploadTDForm'])->name('admin.upload.D');

    Route::post('/admin/upload/tp', [AdminController::class, 'uploadTP'])->name('admin.upload.tp');
    Route::post('/admin/upload/td', [AdminController::class, 'uploadTD'])->name('admin.upload.td');
});

// Routes pour les utilisateurs
// Pour  affichege de smestre
Route::get('/indexsem/{id}', [FileController::class, 'SerchSemmodule'])->name('indexuser');
Route::get('/index/{id}', [FileController::class, 'indexSem'])->name('index');

// Pour  affichege de smestre
Route::get('/', [FileController::class, 'filiere'])->name('filiere');



Route::get('/serch/{id}', [FileController::class, 'PDC'])->name('PDCCHIMIE');
    Route::get('/download/cours/{id}', [FileController::class, 'downloadCours'])->name('download.cours');
    Route::get('/download/tp/{id}', [FileController::class, 'downloadTP'])->name('download.tp');
    Route::get('/download/td/{id}', [FileController::class, 'downloadTD'])->name('download.td');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});











//


require __DIR__.'/auth.php';
