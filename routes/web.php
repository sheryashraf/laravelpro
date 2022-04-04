<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CourseController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnrollmetController;
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
    return view('welcome');
});

Route::get('/contact',
    function () {
        return view('layout.contact');
    }
);
Route::get('/home',
    function () {
        return view('layout.home');
    }
);
Route::get(
    '/about',
    function () {
        return view('layout.about');
    }
);
 Route::resource("/courses", CourseController::class);
Route::get('userprofile', [UserController::class, "show"]);
Route::get('availablecourse',[CourseController::class, "availablecourse"]);
Route::resource("/comments", CommentController::class);
Route::resource("/users", UserController::class);
Route::get('/addcoursetouser/{id}',[CourseController::class,"addusercourse"])->name("usercources");
Route::delete('/Users/{user}', [UserController::class, "delete"]);
Route::get('/deletecourse/{id}',[CourseController::class,"deletecourse"])->name("deletecourse");
Route::get('/enroll',[CourseController::class, "courseenroll"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('layout.home');
    })->name('dashboard');
});
