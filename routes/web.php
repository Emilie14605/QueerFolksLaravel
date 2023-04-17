<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ParametersController;

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

Route::get('/', function () {return view('home');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes pour accéder aux différentes pages
Route::get('/home', [HomeController::class, 'seeHome'])->name('home');
Route::get('/apropos', [AproposController::class, 'seeApropos'])->name('apropos');
Route::get('/blogs', [BlogsController::class, 'seeBlogs'])->name('blogs');
Route::get('/contact', [ContactController::class, 'seeContact'])->name('contact');
Route::get('/login', [LoginController::class, 'seeLogin'])->name('login');
Route::get('/messages', [MessagesController::class, 'seeMessages'])->name('messages');
Route::get('/parameters', [ParametersController::class, 'seeParameters'])->name('parameters');
Route::get('/profile', [ProfileController::class, 'seeProfile'])->name('profile');
Route::get('/search', [SearchController::class, 'seeSearch'])->name('search');
Route::get('/register', [RegisterController::class, 'seeRegister'])->name('register');
Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');


require __DIR__.'/auth.php';
