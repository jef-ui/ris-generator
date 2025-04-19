<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/certificate/form', [CertificateController::class, 'showForm'])->name('certificate.form');
Route::post('/certificate/preview', [CertificateController::class, 'preview'])->name('certificate.preview');
Route::post('/certificate/generate', [CertificateController::class, 'generate'])->name('certificate.generate');
Route::get('/certificate/history', [CertificateController::class, 'history'])->name('certificate.history');
