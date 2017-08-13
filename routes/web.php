<?php

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

Route::get('/', 'WelcomeController@index');

Route::get('/upadevas','SubpagesController@upadevas');
Route::get('/activities','SubpagesController@activities');
Route::get('/festivals','SubpagesController@festivals');
Route::get('/facilities','SubpagesController@facilities');
Route::get('/contactus','SubpagesController@contactus');
Auth::routes();

Route::group(['prefix' => 'online_vazhipad'], function() {
    Route::get('/', 'onlinevazhipadController@index');
    Route::post('/ajax', 'onlinevazhipadController@ajax');
    Route::group(['prefix' => 'cart', 'middleware' => 'auth'], function() {
        Route::get('/', 'CartController@index');
        Route::post('/store', 'MojoController@store');
        Route::get('/{id}/edit', 'CartController@edit')->name('cart.edit');
        Route::put('/{id}/update', 'CartController@update')->name('cart.update');
        Route::delete('/{id}/destroy', 'CartController@destroy')->name('cart.destroy');
    });
    Route::any('/thankyou', 'MojoController@thankyou');
    Route::any('/webhook', 'MojoController@webhook');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/login', 'AdminLoginController@ShowLogin');
    Route::post('/login', 'AdminLoginController@PostLogin');
    Route::get('/users', 'AdminController@userIndex');
    Route::get('/users/create', 'AdminController@userCreate');
    Route::post('/users/create', 'AdminController@userStore');
    Route::get('/users/{id}', 'AdminController@userShow')->name('user.show');
    Route::get('/users/{id}/edit', 'AdminController@userCreate')->name('user.edit');
    Route::put('/users/{id}/update', 'AdminController@userUpdate')->name('user.update');
    Route::get('/users/{id}/delete', 'AdminController@userDelete')->name('user.delete');
    Route::delete('/users/{id}/destroy', 'AdminController@userDestroy')->name('user.destroy');

    Route::get('/vtypes', 'AdminController@vtypeIndex');
    Route::get('/vtypes/create', 'AdminController@vtypeCreate');
    Route::post('/vtypes/create', 'AdminController@vtypeStore');
    Route::get('/vtypes/{id}', 'AdminController@vtypeShow')->name('vtype.show');
    Route::get('/vtypes/{id}/edit', 'AdminController@vtypeEdit')->name('vtype.edit');
    Route::put('/vtypes/{id}/update', 'AdminController@vtypeUpdate')->name('vtype.update');
    Route::get('/vtypes/{id}/delete', 'AdminController@vtypeDelete')->name('vtype.delete');
    Route::delete('/vtypes/{id}/destroy', 'AdminController@vtypeDestroy')->name('vtype.destroy');

    Route::get('/vnames', 'AdminController@vnameIndex');
    Route::get('/vnames/create', 'AdminController@vnameCreate');
    Route::post('/vnames/create', 'AdminController@vnameStore');
    Route::get('/vnames/{id}', 'AdminController@vnameShow')->name('vname.show');
    Route::get('/vnames/{id}/edit', 'AdminController@vnameEdit')->name('vname.edit');
    Route::put('/vnames/{id}/update', 'AdminController@vnameUpdate')->name('vname.update');
    Route::get('/vnames/{id}/delete', 'AdminController@vnameDelete')->name('vname.delete');
    Route::delete('/vnames/{id}/destroy', 'AdminController@vnameDestroy')->name('vname.destroy');

    Route::get('/incomes', 'AdminController@incomesIndex');
    Route::get('/incomes/create', 'AdminController@incomesCreate');
    Route::post('/incomes/create', 'AdminController@incomesStore');
    Route::get('/incomes/{id}', 'AdminController@incomesShow')->name('income.show');
    Route::get('/incomes/{id}/edit', 'AdminController@incomesEdit')->name('income.edit');
    Route::put('/incomes/{id}/update', 'AdminController@incomesUpdate')->name('income.update');
    Route::get('/incomes/{id}/delete', 'AdminController@incomesDelete')->name('income.delete');
    Route::delete('/incomes/{id}/destroy', 'AdminController@incomesDestroy')->name('income.destroy');

    Route::get('/expenses', 'AdminController@expensesIndex');
    Route::get('/expenses/create', 'AdminController@expensesCreate');
    Route::post('/expenses/create', 'AdminController@expensesStore');
    Route::get('/expenses/{id}', 'AdminController@expensesShow')->name('expenses.show');
    Route::get('/expenses/{id}/edit', 'AdminController@expensesEdit')->name('expenses.edit');
    Route::put('/expenses/{id}/update', 'AdminController@expensesUpdate')->name('expenses.update');
    Route::get('/expenses/{id}/delete', 'AdminController@expensesDelete')->name('expenses.delete');
    Route::delete('/expenses/{id}/destroy', 'AdminController@expensesDestroy')->name('expenses.destroy');

    Route::get('/cashbooks', 'AdminController@cashbookIndex');
    Route::post('/cashbooks/check', 'AdminController@cashbookCheck');

    Route::get('/news', 'AdminController@newsIndex');
    Route::get('/news/create', 'AdminController@newsCreate');
    Route::post('/news/create', 'AdminController@newsStore');
    Route::get('/news/{id}', 'AdminController@newsShow')->name('news.show');
    Route::get('/news/{id}/edit', 'AdminController@newsEdit')->name('news.edit');
    Route::put('/news/{id}/update', 'AdminController@newsUpdate')->name('news.update');
    Route::get('/news/{id}/delete', 'AdminController@newsDelete')->name('news.delete');
    Route::delete('/news/{id}/destroy', 'AdminController@newsDestroy')->name('news.destroy');
});

Route::get('/auditorium', 'auditoriumController@index')->middleware('auth');
