<?php

// use App\Http\Controllers\RoleController;

// // use App\Http\Controllers\RoleController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Livewire\Outlets;
use App\Http\Livewire\Posts;
use App\Http\Livewire\ShowOutlets;
use App\Http\Livewire\ShowPaket;
use App\Http\Livewire\ShowPost;
use App\Http\Livewire\ShowUsers;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/member', ShowUsers::class)->name('showUsers');
    Route::get('/outlets', ShowOutlets::class)->name('showOutlets');
    Route::get('/pakets', ShowPaket::class)->name('showPaket');
    Route::get('posts', ShowPost::class)->name('showPost');
    // Route::resource('outlets', Outlets::class);

});

