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

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/{profile}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
// Route::get('/profile/update', [ProfileController::class, 'updateProfile']);

Route::get('/hobbies', [HobbieController::class, 'index'])->name('hobbies.index');
Route::get('/hobbies/create', [HobbieController::class, 'create'])->name('hobbies.create');
Route::post('/hobbies', [HobbieController::class, 'store'])->name('hobbies.store');
Route::get('/hobbies/{hobbie}', [HobbieController::class, 'show'])->name('hobbies.show');
Route::get('/hobbies/{hobbie}/edit', [HobbieController::class, 'edit'])->name('hobbies.edit');
Route::patch('/hobbies/{hobbie}', [HobbieController::class, 'update'])->name('hobbies.update');
Route::delete('/hobbies/{hobbie}', [HobbieController::class, 'destroy'])->name('hobbies.destroy');

// Route::get('/hobbie/update', [HobbieController::class, 'updateHobbie']);
// Route::get('/hobbie/delete', [HobbieController::class, 'deleteHobbie']);
// Route::get('/hobbie/firstOrCreate', [HobbieController::class, 'firstOrCreateHobbie']);
// Route::get('/hobbie/updateOrCreate', [HobbieController::class, 'updateOrCreateHobbie']);


Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactsController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');
Route::get('/contacts/{contact}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
Route::patch('/contacts/{contact}', [ContactsController::class, 'update'])->name('contacts.update');
// Route::get('/contacts/create', [ContactsController::class, 'createContacts']);

Route::get('/work', [WorkController::class, 'index'])->name('work.index');
Route::get('/work/create', [WorkController::class, 'create'])->name('work.create');
Route::post('/work', [WorkController::class, 'store'])->name('work.store');
Route::get('/work/{work}', [WorkController::class, 'show'])->name('work.show');
Route::get('/work/{work}/edit', [WorkController::class, 'edit'])->name('work.edit');
Route::patch('/work/{work}', [WorkController::class, 'update'])->name('work.update');
Route::delete('/work/{work}', [WorkController::class, 'destroy'])->name('work.destroy');
// Route::get('/work/create', [WorkController::class, 'createWork']);
// Route::get('/work/update', [WorkController::class, 'updateWork']);
// Route::get('/work/delete', [WorkController::class, 'deleteWork']);
// Route::get('/work/firstOrCreate', [WorkController::class, 'firstOrCreateWork']);
// Route::get('/work/updateOrCreate', [WorkController::class, 'updateOrCreateWork']);

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::patch('/news/{news}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

// Route::get('/news/create', [NewsController::class, 'createNews']);
// Route::get('/news/update', [NewsController::class, 'updateNews']);
// Route::get('/news/delete/', [NewsController::class, 'deleteNews']);
// Route::get('/news/firstOrCreate', [NewsController::class, 'firstOrCreateNews']);
// Route::get('/news/updateOrCreate', [NewsController::class, 'updateOrCreateNews']);