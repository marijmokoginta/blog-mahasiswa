<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use App\Models\User;
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

Route::get('/', [HomeController::class, 'index']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'auth']);
    Route::post('/register', [UserController::class, 'store']);
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/preview/{post:slug}', [PostController::class, 'show']);
Route::post('/comment', [CommentController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserController::class, 'logout']);

    Route::get('/student/{user:id}', function (User $user) {
//        $role = Role::find(1);
//        $user->roles()->save($role);
        var_dump($user);
        return Role::find(1)->users;
    });

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
    Route::resource('/dashboard/posts', DashboardPostController::class);
});
