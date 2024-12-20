<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CaptionController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('index');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/logout', [LoginController::class, 'userLogout'])->name('user.logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes(
    ['register' => false]
);

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('divisions', DivisionController::class);
    Route::resource('units', UnitController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('captions', CaptionController::class);
    Route::get('staff-redeployment-option/{slug}', [CaptionController::class, 'deploymentoption'])->name('deploymentoption');
    //adjustments for staff redeployment option
    Route::get('single/staff-redeployment/{slug}', [CaptionController::class, 'singlestaffdeployment'])->name('singlestaffdeployment');
    Route::post('deploy-a-staff/{slug}', [PostingController::class, 'deployastaff'])->name('deployastaff');

    Route::get('batch/staff-redeployment/{slug}', [CaptionController::class, 'batchstaffdeployment'])->name('batchstaffdeployment');



    Route::post('redeployment/staff/on-option/{slug}', [CaptionController::class, 'makeredeploymentbasedonoption'])->name('makeredeploymentbasedonoption');
    Route::post('continue-with-single/staff/redeployment/{id}/{slug}', [CaptionController::class, 'continuesinglestaffdeployment'])->name('continuesinglestaffdeployment');
    Route::get('redeploy-staff/{slug}', [CaptionController::class, 'redeploystaff'])->name('redeploystaff');
    Route::get('redeploy-single-staff/{phone}/{slug}', [PostingController::class, 'redeploysinglestaff'])->name('redeploysinglestaff');
    Route::post('post-single-staff', [PostingController::class, 'postsinglestaff'])->name('postsinglestaff');
    Route::resource('postings', PostingController::class);
    //for printing
    Route::get('print/deployed/staff/{slug}', [PrintController::class, 'printdeployedstaff'])->name('printdeployedstaff');
    Route::get('user-profile/{phone}', [ProfileController::class, 'profile'])->name('profile');
});
