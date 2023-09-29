<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotesController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

//code de base dans le fichier
//Route::get('/', function () {
//    return view('welcome');
//})->name('home');

//faire des tests
Route::get('/test', function () {
    return 'test';
})->name('test');

//montrer tous les allies
Route::get('/user', function () {
    return User::all();
});

//montrer tous les allies avec un controlleur
Route::get('/userbycontroller', [\App\Http\Controllers\UserController::class, 'index'] );

//on fait un dashboard
//utiliser laravel idea
Route::get('/', DashboardController::class)->name('dashboard');

//voir le path
//echo request()->method();
//die;

//il y a les 7 routes du controllers qu'on avait l'année passée là
Route::resource('notes', NotesController::class);





