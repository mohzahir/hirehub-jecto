<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CVCategoryController;
use App\Http\Controllers\CVSampleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\SettingController;
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
Route::get('/candidate/register', [AuthController::class, 'showCandidateRegisterForm'])->name('candidate.register.form');
Route::post('/candidate/register', [AuthController::class, 'submitCandidateRegisterForm'])->name('candidate.register.submit');
Route::prefix('candidate')->as('candidate.')->middleware('auth:candidate')->group(function () {
    Route::get('/', [WebsiteController::class, 'showCandidateDashboard'])->name('dashboard');
    Route::post('/', [WebsiteController::class, 'submitCandidateInfo'])->name('submit.info');
    Route::get('/logout', [AuthController::class, 'candidateLogout'])->name('logout');
});
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/jobs', [WebsiteController::class, 'jobs'])->name('jobs');
Route::get('/jobs/{job_post}/job-details', [WebsiteController::class, 'jobDetails'])->name('job.details');
Route::post('/jobs/{job_post}/submit-job-application', [WebsiteController::class, 'submitJobApplication'])->name('submit.job.application');
Route::get('/workshops', [WebsiteController::class, 'workshops'])->name('workshops');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/contact', [WebsiteController::class, 'SubmitContact'])->name('contact.submit');
Route::get('/blogs', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/blogs/{blog}/blog-details', [WebsiteController::class, 'blogDetails'])->name('blog.details');
Route::post('/blog-comment/{blog}', [WebsiteController::class, 'blogComment'])->name('blog.comment');
Route::get('/cv-writing', [WebsiteController::class, 'cvWriting'])->name('cv.writing');
Route::get('/cv-writing/{category}/application', [WebsiteController::class, 'cvWritingApplication'])->name('cv.writing.application');




Route::get('/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login.form');
Route::post('/login', [AuthController::class, 'submitAdminLoginForm'])->name('admin.login.submit');
Route::prefix('admin')->as('admin.')->middleware('auth:web')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::get('/category/{category}/change-status', [CategoryController::class, 'changeStatus'])->name('category.change.status');
    Route::resource('job', JobController::class);
    Route::get('/job/{job}/change-status', [JobController::class, 'changeStatus'])->name('job.change.status');
    Route::resource('jobPost', JobPostController::class);
    Route::get('/jobPost/{jobPost}/change-status', [JobPostController::class, 'changeStatus'])->name('jobPost.change.status');
    Route::resource('jobApplication', JobApplicationController::class);
    Route::get('/jobApplication/{jobApplication}/change-status', [JobApplicationController::class, 'changeStatus'])->name('jobApplication.change.status');
    Route::resource('candidate', CandidateController::class);
    Route::get('/candidate/{candidate}/change-status', [CandidateController::class, 'changeStatus'])->name('candidate.change.status');
    Route::resource('cv-sample', CVSampleController::class);
    Route::resource('cv-category', CVCategoryController::class);
    Route::get('/cv-category/{cv-category}/change-status', [CVCategoryController::class, 'changeStatus'])->name('cv-category.change.status');
    Route::resource('blog', BlogController::class);
    Route::get('/blog/{blog}/change-status', [BlogController::class, 'changeStatus'])->name('blog.change.status');
    Route::resource('product', ProductController::class);
    Route::get('/product/{product}/change-status', [ProductController::class, 'changeStatus'])->name('product.change.status');
    Route::resource('employee', EmployeeController::class);
    Route::get('/employee/{employee}/change-status', [EmployeeController::class, 'changeStatus'])->name('employee.change.status');
    Route::resource('client', ClientController::class);
    Route::resource('project', ProjectController::class);
    Route::get('/project/{project}/change-status', [ProjectController::class, 'changeStatus'])->name('project.change.status');
    Route::get('/project-img/{image}/destroy', [ProjectImageController::class, 'destroy'])->name('project.image.destroy');
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/setting', [SettingController::class, 'store'])->name('setting.store');
});
