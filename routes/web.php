<?php

use Illuminate\Support\Facades\Auth;
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

    // Route::group(['namespace'=>'Admin', 'prefix'=> 'admin'], function() {
    //     Route::group(['namespace'=>'Hobbie'], function() {
    //         Route::get('/hobbie', 'IndexController')->name('admin.hobbie.index');
    //     });
    // });
    // Route::prefix('admin')->namespace('App\Http\Controllers\Admin\Post')->middleware('admin')->group(function() {
    //     Route::get('/post', AdminController::class)->name('admin.post');
    // });
    Route::get('/admin', App\Http\Controllers\Admin\MainAdmin\IndexController::class)->middleware('admin')->name('admin.index');

    Route::get('/admin/hobbie', App\Http\Controllers\Admin\Hobbie\IndexController::class)->middleware('admin')->name('admin.hobbie.index');
    Route::get('/admin/hobbie/{hobbieShow}', App\Http\Controllers\Admin\Hobbie\ShowController::class)->middleware('admin')->name('admin.hobbie.show');
    Route::get('/admin/hobbie/{hobbieEdit}/edit', App\Http\Controllers\Admin\Hobbie\EditController::class)->middleware('admin')->name('admin.hobbie.edit');
    Route::patch('/admin/hobbie/{hobbie}', App\Http\Controllers\Admin\Hobbie\UpdateController::class)->middleware('admin')->name('admin.hobbie.update');
    Route::delete('admin/hobbie/{hobbieShow}', App\Http\Controllers\Admin\Hobbie\DestroyController::class)->middleware('admin')->name('admin.hobbie.destroy');
    

    Route::get('/admin/news', App\Http\Controllers\Admin\News\IndexController::class)->middleware('admin')->name('admin.news.index');
    Route::get('/admin/news/{newsShow}', App\Http\Controllers\Admin\News\ShowController::class)->middleware('admin')->name('admin.news.show');
    Route::get('/admin/news/{newsEdit}/edit', App\Http\Controllers\Admin\News\EditController::class)->middleware('admin')->name('admin.news.edit');
    Route::patch('/admin/news/{news}', App\Http\Controllers\Admin\News\UpdateController::class)->middleware('admin')->name('admin.news.update');
    Route::delete('admin/news/{newsShow}', App\Http\Controllers\Admin\News\DestroyController::class)->middleware('admin')->name('admin.news.destroy');

    Route::get('/admin/work', App\Http\Controllers\Admin\Work\IndexController::class)->middleware('admin')->name('admin.work.index');
    Route::get('/admin/work/{workShow}', App\Http\Controllers\Admin\Work\ShowController::class)->middleware('admin')->name('admin.work.show');
    Route::get('/admin/work/{workEdit}/edit', App\Http\Controllers\Admin\Work\EditController::class)->middleware('admin')->name('admin.work.edit');
    Route::patch('/admin/work/{work}', App\Http\Controllers\Admin\Work\UpdateController::class)->middleware('admin')->name('admin.work.update');
    Route::delete('admin/work/{workShow}', App\Http\Controllers\Admin\Work\DestroyController::class)->middleware('admin')->name('admin.work.destroy');





    Route::get('/profile', \App\Http\Controllers\Profile\IndexController::class)->name('profile.index');
    Route::get('/profile/{profile}/edit', \App\Http\Controllers\Profile\EditController::class)->name('profile.edit');
    Route::patch('/profile/{profile}', \App\Http\Controllers\Profile\UpdateController::class)->name('profile.update');
    Route::get('/profile/create', \App\Http\Controllers\Profile\CreateController::class)->name('profile.create');
    Route::post('/profile', \App\Http\Controllers\Profile\StoreController::class)->name('profile.store');


    Route::get('/contacts', \App\Http\Controllers\Contacts\IndexController::class)->name('contacts.index');
    Route::get('/contacts/create', \App\Http\Controllers\Contacts\CreateController::class)->name('contacts.create');
    Route::post('/contacts', \App\Http\Controllers\Contacts\StoreController::class)->name('contacts.store');
    Route::get('/contacts/{contact}/edit', \App\Http\Controllers\Contacts\EditController::class)->name('contacts.edit');
    Route::patch('/contacts/{contact}', \App\Http\Controllers\Contacts\UpdateController::class)->name('contacts.update');
    // Route::get('/contacts/create', [ContactsController::class, 'createContacts']);

    
    Route::get('/hobbies', \App\Http\Controllers\Hobbie\IndexController::class)->name('hobbies.index');
    Route::get('/hobbies/create', \App\Http\Controllers\Hobbie\CreateController::class)->name('hobbies.create');
    Route::post('/hobbies', \App\Http\Controllers\Hobbie\StoreController::class)->name('hobbies.store');
    Route::get('/hobbies/{hobbie}', \App\Http\Controllers\Hobbie\ShowController::class)->name('hobbies.show');
    Route::get('/hobbies/{hobbie}/edit', \App\Http\Controllers\Hobbie\EditController::class)->name('hobbies.edit');
    Route::patch('/hobbies/{hobbie}', \App\Http\Controllers\Hobbie\UpdateController::class)->name('hobbies.update');
    Route::delete('/hobbies/{hobbie}', \App\Http\Controllers\Hobbie\DestroyController::class)->name('hobbies.destroy');

// Route::get('/hobbie/update', [HobbieController::class, 'updateHobbie']);
// Route::get('/hobbie/delete', [HobbieController::class, 'deleteHobbie']);
// Route::get('/hobbie/firstOrCreate', [HobbieController::class, 'firstOrCreateHobbie']);
// Route::get('/hobbie/updateOrCreate', [HobbieController::class, 'updateOrCreateHobbie']);




Route::get('/work', \App\Http\Controllers\Work\IndexController::class)->name('work.index');
Route::get('/work/create', \App\Http\Controllers\Work\CreateController::class)->name('work.create');
Route::post('/work', \App\Http\Controllers\Work\StoreController::class)->name('work.store');
Route::get('/work/{work}', \App\Http\Controllers\Work\ShowController::class)->name('work.show');
Route::get('/work/{work}/edit', \App\Http\Controllers\Work\EditController::class)->name('work.edit');
Route::patch('/work/{work}', \App\Http\Controllers\Work\UpdateController::class)->name('work.update');
Route::delete('/work/{work}', \App\Http\Controllers\Work\DestroyController::class)->name('work.destroy');
// Route::get('/work/create', [WorkController::class, 'createWork']);
// Route::get('/work/update', [WorkController::class, 'updateWork']);
// Route::get('/work/delete', [WorkController::class, 'deleteWork']);
// Route::get('/work/firstOrCreate', [WorkController::class, 'firstOrCreateWork']);
// Route::get('/work/updateOrCreate', [WorkController::class, 'updateOrCreateWork']);


Route::get('/news', \App\Http\Controllers\News\IndexController::class)->name('news.index');
Route::get('/news/create', \App\Http\Controllers\News\CreateController::class)->name('news.create');
Route::post('/news', \App\Http\Controllers\News\StoreController::class)->name('news.store');
Route::get('/news/{news}', \App\Http\Controllers\News\ShowController::class)->name('news.show');
Route::get('/news/{news}/edit', \App\Http\Controllers\News\EditController::class)->name('news.edit');
Route::patch('/news/{news}', \App\Http\Controllers\News\UpdateController::class)->name('news.update');
Route::delete('/news/{news}', \App\Http\Controllers\News\DestroyController::class)->name('news.destroy');

// Route::get('/news/create', [NewsController::class, 'createNews']);
// Route::get('/news/update', [NewsController::class, 'updateNews']);
// Route::get('/news/delete/', [NewsController::class, 'deleteNews']);
// Route::get('/news/firstOrCreate', [NewsController::class, 'firstOrCreateNews']);
// Route::get('/news/updateOrCreate', [NewsController::class, 'updateOrCreateNews']);

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
