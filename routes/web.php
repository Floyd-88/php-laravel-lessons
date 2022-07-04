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
Route::get('/profile/update', [ProfileController::class, 'updateProfile']);

Route::get('/hobbie', [HobbieController::class, 'showHobbie']);
Route::get('/hobbie/create', [HobbieController::class, 'createHobbie']);
Route::get('/hobbie/update', [HobbieController::class, 'updateHobbie']);
Route::get('/hobbie/delete', [HobbieController::class, 'deleteHobbie']);
Route::get('/hobbie/firstOrCreate', [HobbieController::class, 'firstOrCreateHobbie']);
Route::get('/hobbie/updateOrCreate', [HobbieController::class, 'updateOrCreateHobbie']);


Route::get('/contacts', [ContactsController::class, 'showContacts']);
Route::get('/contacts/create', [ContactsController::class, 'createContacts']);

Route::get('/work', [WorkController::class, 'showWork']);
Route::get('/work/create', [WorkController::class, 'createWork']);
Route::get('/work/update', [WorkController::class, 'updateWork']);
Route::get('/work/delete', [WorkController::class, 'deleteWork']);
Route::get('/work/firstOrCreate', [WorkController::class, 'firstOrCreateWork']);
Route::get('/work/updateOrCreate', [WorkController::class, 'updateOrCreateWork']);

Route::get('/news', [NewsController::class, 'showNews']);
Route::get('/news/create', [NewsController::class, 'createNews']);
Route::get('/news/update', [NewsController::class, 'updateNews']);
Route::get('/news/delete/', [NewsController::class, 'deleteNews']);
Route::get('/news/firstOrCreate', [NewsController::class, 'firstOrCreateNews']);
Route::get('/news/updateOrCreate', [NewsController::class, 'updateOrCreateNews']);