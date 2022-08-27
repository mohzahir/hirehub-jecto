<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\WebsiteController;
use App\Models\Candidate;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('set.locale');



Route::get('/candidate/login', [AuthController::class, 'showCandidateLoginForm'])->name('candidate.login.form');
Route::post('/candidate/login', [AuthController::class, 'submitCandidateLoginForm'])->name('candidate.login.submit');
Route::prefix('candidate')->as('candidate.')->group(function () {
    Route::get('/', [WebsiteController::class, 'showCandidateDashboard'])->name('dashboard');
    Route::post('/', [WebsiteController::class, 'submitCandidateInfo'])->name('submit.info');
    Route::get('/logout', [AuthController::class, 'candidateLogout'])->name('logout');
});
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/jobs', [WebsiteController::class, 'jobs'])->name('jobs');
Route::get('/jobs/{job_post}/job-details', [WebsiteController::class, 'jobDetails'])->name('job.details');
Route::post('/jobs/{job_post}/submit-job-application', [WebsiteController::class, 'submitJobApplication'])->name('submit.job.application');
