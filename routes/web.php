<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ParametersController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\FriendRequestController;
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


Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');


// Routes pour accéder aux différentes pages
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/apropos', [AproposController::class, 'index'])->name('apropos');


// Partie Profil
Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.show');
Route::get('profile-blog-form', [BlogsController::class, 'form'])->name('profile.blog');
Route::post('profile-blog-form-add', [BlogsController::class, 'store'])->name('blog.add');


// Partie demande d'ami
Route::post('/friend-request', [FriendRequestController::class, 'send'])->name('friendrequest.send');
Route::delete('/friend-request/{id}', [FriendRequestController::class, 'remove'])->name('friendrequest.remove');



// Partie upload d'images
Route::get('/image-upload', [ImageUploadController::class, 'index'])->name('image.form');
Route::post('/upload-image', [ImageUploadController::class, 'store'])->name('image.store');


// Partie Messages
Route::get('/messages', [MessagesController::class, 'index'])->name('messages');
Route::post('/messages/ajout', [MessagesController::class, 'add'])->name('messages.ajout');
Route::get('/messagesdetails/{id}', [MessagesController::class, 'details'])->name('messages.details');
Route::get('/messagessent', [MessagesController::class, 'sent'])->name('messages.sent');
Route::get('messages-user/{id}', [MessagesController::class, 'user'])->name('messages.user');


// Partie Notifications
Route::get('/notifications', [NotifyController::class, 'show'])->name('notif');
Route::post('/notifications/{id}', [FriendRequestController::class, 'reject'])->name('notif.reject');
Route::put('/notifications/{id}', [FriendRequestController::class, 'add'])->name('notif.add');


// Partie Posts
Route::get('/publications', [PostsController::class, 'index'])->name('publications');
Route::get('/publications-details/{id}', [PostsController::class, 'details'])->name('publications.details');
Route::get('/publications-ajout', [PostsController::class, 'form'])->name('publications.form');
Route::post('/publications-add', [PostsController::class, 'store'])->name('publications.add');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/login', [LoginController::class, 'seeLogin'])->name('login');


Route::get('/users', [SearchController::class, 'index'])->name('utlisateurs');
Route::get('/register', [RegisterController::class, 'seeRegister'])->name('register');


require __DIR__.'/auth.php';
