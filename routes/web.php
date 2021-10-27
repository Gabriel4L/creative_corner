<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('home',[
        "title" =>"Home",
        "active"=>'home'
    ]);
});


// Route::get('/login',[LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/profile',[ProfileController::class, 'index'])->middleware('auth');
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->middleware('auth');
Route::get('/profile/{id}', [ProfileController::class, 'show'])->middleware('auth');
Route::post('/profile/{id}', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/signup',[SignupController::class, 'index'])->middleware('guest');
Route::post('/register',[SignupController::class, 'store']);

Route::get('/index',[DashboardController::class, 'index'])->middleware('auth');

Route::get('/gallery',[PostsController::class, 'index'])->middleware('auth');
Route::post('/gallery/store', [PostsController::class, 'store']);

Route::get('/club',[ClubController::class, 'index'])->middleware('auth');
Route::get('/club2',[ClubController::class, 'index2'])->middleware('auth');
Route::get('/club3',[ClubController::class, 'index3'])->middleware('auth');

Route::get('/detail/{id}',[PostsController::class, 'index2'])->middleware('auth');
Route::get('/gallery/hapus/{id}',[PostsController::class, 'destroy'])->middleware('auth');
Route::get('/gallery/edit/{id}',[PostsController::class, 'edit'])->middleware('auth');
Route::post('/gallery/{id}', [PostsController::class, 'update'])->middleware('auth');
Route::get('/gallery/{id}', [PostsController::class, 'show'])->middleware('auth');