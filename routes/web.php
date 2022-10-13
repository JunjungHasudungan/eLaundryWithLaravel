<?php

// use App\Http\Controllers\RoleController;

// // use App\Http\Controllers\RoleController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Member;
use App\Http\Livewire\Roles;
use App\Http\Livewire\ShowCategories;
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

    // Route::get('member', Member::class)->name('member');
 

});

