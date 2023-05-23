<?php

use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ModulPjjController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\DashboardOsisController;
use App\Http\Controllers\OsisController;


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

//LandingPage
Route::get('/', function () {
    return view('landing');
});
Route::get('/', [LandingPageController::class, 'index'])->name('landing');

//About
Route::get('/about', function () {
    return view('about');
});


//Layanan
Route::get('/layanan', function () {
    if (!auth()->user()) {
        return redirect()->route('login');
    }
    return view('layanan');
});

//Post
Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/kategories', function (Kategori $kategori) {
    return view('kategori', [
        'title' => $kategori->name,
        'posts' => $kategori->posts,
        'kategori' => $kategori->name
    ]);
});

//LoginRegister
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

route::get('/dashboard', function () {
    if (auth()->user()->roles != 'admin') {
        return redirect()->route('landing');
    }
    return view('dashboard.index');
})->middleware('auth');

//Admin
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// Route::resource('/dashboard/edit', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/module', ModuleController::class)->middleware('auth');
Route::get('dashboard/module/download/{module}', [ModulPjjController::class, 'download']);
Route::resource('/dashboard/osis', DashboardOsisController::class)->middleware('auth');
Route::get('/modulpjj', [ModulPjjController::class, 'index']);
// Route::get('/download/viewfile', [DownloadController::class, 'index']);

//kesiswaan
Route::get('/osis', [OsisController::class, 'index']);
Route::get('/tatatertib', [KesiswaanController::class, 'tatatertib']);
Route::get('/datasiswa', [KesiswaanController::class, 'datasiswa']);
Route::get('/basket', [KesiswaanController::class, 'basket']);
Route::get('/futsal', [KesiswaanController::class, 'futsal']);
Route::get('/marchingband', [KesiswaanController::class, 'marchingband']);

//kurikulum
Route::get('/informasikurikulum', [KurikulumController::class, 'informasikurikulum']);
Route::get('/jadwalptm ', [KurikulumController::class, 'jadwalptm']);

//foto
Route::get('/foto', [FotoController::class, 'foto']);
