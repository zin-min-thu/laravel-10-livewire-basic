<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Post;
use App\Http\Livewire\User;
use App\Http\Livewire\Home;
use App\Http\Livewire\Form;
use App\Http\Livewire\Action;
use App\Http\Livewire\Product;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Users;
use App\Http\Livewire\Students;

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
    return view('welcome');
});

Route::get('/post', Post::class);
Route::get('/user', User::class);
Route::get('/home/{name?}', Home::class);

Route::get('/form', Form::class);

Route::get('/action', Action::class);

Route::get('/product', Product::class);

Route::get('/contact', Contact::class);

Route::get('/users', Users::class);

Route::get('/students', Students::class);
