<?php

use App\Http\Controllers\applicant\ApplicantAuthController;
use App\Http\Controllers\applicant\ApplicantMainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ApplicantMainController::class, 'index']);

Route::prefix('/applicant')->group( function() {

    Route::get('/', [ApplicantMainController::class, 'index']);
    Route::get('/login', [ApplicantAuthController::class, 'loginPage']);
    Route::get('/register', [ApplicantAuthController::class, 'registerPage']);
    
    Route::prefix('/auth') -> group(function() {
        Route::get('/', [ApplicantMainController::class, 'dashboard']);
        Route::get('/dashboard', [ApplicantMainController::class, 'dashboard']);
        Route::get('/personalInfo', [ApplicantMainController::class, 'personalInfo']);
        Route::get('/applicationHistory', [ApplicantMainController::class, 'applicationHistory']);
    });
});

Route::prefix('/personel')->group( function() {
    Route::get('/', [ApplicantMainController::class, 'index']);
    
    Route::prefix('/auth') -> group(function() {
        Route::get('/publicationOfVacancies', [ApplicantMainController::class, 'publicationOfVacancies']);
        Route::get('/individualEvaluationResult', [ApplicantMainController::class, 'individualEvaluationResult']);
        Route::get('/signatoriesPage', [ApplicantMainController::class, 'signatoriesPage']);
    });
});

Route::prefix('/psb')->group( function() {
    Route::get('/', [ApplicantMainController::class, 'index']);
    
    Route::prefix('/auth') -> group(function() {
        Route::get('/individualEvaluationResultTeacher1', [ApplicantMainController::class, 'individualEvaluationResultTeacher1']);
    });
});