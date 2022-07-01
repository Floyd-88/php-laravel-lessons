<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MySiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HobbieController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [MySiteController::class, 'showSite']);
Route::get('/profile', [ProfileController::class, 'showProfile']);

Route::get('/hobbie', [HobbieController::class, 'showHobbie']);
Route::get('/hobbie/create', [HobbieController::class, 'createHobbie']);
Route::get('/hobbie/update', [HobbieController::class, 'updateHobbie']);

Route::get('/contacts', [ContactsController::class, 'showContacts']);

Route::get('/work', [WorkController::class, 'showWork']);
Route::get('/work/create', [WorkController::class, 'createWork']);
Route::get('/work/update', [WorkController::class, 'updateWork']);

Route::get('/news', [NewsController::class, 'showNews']);
Route::get('/news/create', [NewsController::class, 'createNews']);
Route::get('/news/update', [NewsController::class, 'updateNews']);