<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/blog', function () {
    $posts = [
        (object)[ 'title' => 'Design tips for designers that cover everything you need', 'category' => 'Startup', 'excerpt' => 'Duis aute irure dolor...', 'image' => 'post1.jpg' ],
        (object)[ 'title' => 'How to build rapport with your web design clients', 'category' => 'Business', 'excerpt' => 'Duis aute irure dolor...', 'image' => 'post2.jpg' ],
        (object)[ 'title' => 'Logo design trends to avoid in 2022', 'category' => 'Startup', 'excerpt' => 'Duis aute irure dolor...', 'image' => 'post3.jpg' ],
    ];
    return view('blog', ['posts' => $posts]);
});

Route::get('/blog-post', function () {
    return view('blogPost');
});

Route::get('/profile', function () {
    return view('profile');
});

//Signin
// Route untuk menampilkan form login
Route::get('/', [UserController::class, 'showSigninForm']);

// Route untuk memproses login
Route::post('/signin', [UserController::class, 'signin']);

//Signup
// Route untuk menampilkan form register
Route::get('/signup', [UserController::class, 'showSignupForm']);

// Route untuk memproses register
Route::post('/signup', [UserController::class, 'signup']);



Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('authMiddle');


Route::get('/blog', function () {
    $posts = [
        (object)[ 'title' => 'Design tips for designers that cover everything you need', 'category' => 'Startup', 'excerpt' => 'Duis aute irure dolor...', 'image' => 'post1.jpg' ],
        (object)[ 'title' => 'How to build rapport with your web design clients', 'category' => 'Business', 'excerpt' => 'Duis aute irure dolor...', 'image' => 'post2.jpg' ],
        (object)[ 'title' => 'Logo design trends to avoid in 2022', 'category' => 'Startup', 'excerpt' => 'Duis aute irure dolor...', 'image' => 'post3.jpg' ],
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('/post', function () {
    return view('blogPost');
})->name('post');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');
