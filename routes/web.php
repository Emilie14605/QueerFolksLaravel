<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\FriendRequestController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\OsefController;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;

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

Route::get('/', function () {return view('index');});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('osef/{surname}', [OsefController::class, 'test'])->name('test');


Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');


// Routes pour accéder aux différentes pages
Route::get('/home', function () {return view('index');})->name('index');
Route::get('/apropos', function () {return view('apropos');})->name('apropos');


// Partie Profil
Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.show');
Route::get('profile-blog-form', [BlogsController::class, 'form'])->name('profile.blog');
Route::post('profile-blog-form-add', [BlogsController::class, 'store'])->name('blog.add');
Route::post('profile-image-form-add', [ImageUploadController::class, 'store'])->name('image.store');


// Partie demande d'ami
Route::post('/friend-request', [FriendRequestController::class, 'send'])->name('friendrequest.send');
Route::delete('/friend-request/{id}', [FriendRequestController::class, 'remove'])->name('friendrequest.remove');


// Partie Messages
Route::get('/messages', [MessagesController::class, 'index'])->name('messages');
Route::post('/messages/ajout', [MessagesController::class, 'add'])->name('messages.ajout');
Route::get('/messages/details/{id}', [MessagesController::class, 'details'])->name('messages.details');
Route::get('/messages/envoyés', [MessagesController::class, 'sent'])->name('messages.sent');
Route::get('messages/{id}', [MessagesController::class, 'user'])->name('messages.user');


// Partie Notifications
Route::get('/notifications', [NotifyController::class, 'show'])->name('notif');
Route::post('/notifications/{id}', [FriendRequestController::class, 'reject'])->name('notif.reject');
Route::put('/notifications/{id}', [FriendRequestController::class, 'add'])->name('notif.add');


// Partie Posts
Route::get('/publications', [PostsController::class, 'index'])->name('publications');
Route::get('/publications/{id}', [PostsController::class, 'details'])->name('publications.details');
Route::get('/publications-ajout', [PostsController::class, 'form'])->name('publications.form');
Route::post('/publications-add', [PostsController::class, 'store'])->name('publications.add');



Route::get('/contact', function () {return view('contact');})->name('contact');

Route::get('/profils', [SearchController::class, 'index'])->name('utlisateurs');


require __DIR__.'/auth.php';
