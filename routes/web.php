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


Auth::routes();
Route::get('/exit',function(){\Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('login');
}
)->name('log_out');

Route::get('/','Front\homeController@index')->name('main');
Route::get('/archive','Front\newsController@index')->name('Front.archive.index');
Route::get('/archive/{id}','Front\newsController@view')->name('Front.archive.view');
Route::get('/page/{id}','Front\homeController@page')->name('Front.page');
Route::get('/spage/{id}','Front\homeController@spage')->name('Front.spage');





Route::group (['prefix'=>'panel','middleware'=>'auth' ], function(){
    Route::get('/',function(){
        return view('cms.home');
    })->name('cms.home');


    Route::group(['prefix'=>'news'] ,function(){
       Route::get('/','cms\newsController@index')->name('cms.news.list');
       Route::get('/create','cms\newsController@create')->name('cms.news.create');
       Route::post('/create_post','cms\newsController@create_post')->name('cms.news.create_post');
       Route::get('/remove/{id}','cms\newsController@remove')->name('cms.news.remove');
       Route::get('/edit/{id}','cms\newsController@edit')->name('cms.news.edit');
       Route::post('/edit_post/{id}','cms\newsController@edit_post')->name('cms.news.edit_post');
    });
    Route::group(['prefix'=>'menu'] , function(){
       Route::get('/','cms\menuController@index')->name('cms.menu.list');
       Route::get('/create','cms\menuController@create')->name('cms.menu.create');
       Route::post('/create_post','cms\menuController@create_post')->name('cms.menu.create_post');
       Route::get('/createSub','cms\menuController@createSub')->name('cms.menu.createSub');
       Route::post('/createSub_post','cms\menuController@createSub_post')->name('cms.menu.createSub_post');
       Route::get('/remove/{id}','cms\menuController@remove')->name('cms.menu.remove');
       Route::get('/remove_subs/{id}','cms\menuController@remove_subs')->name('cms.menu.remove_subs');
       Route::get('/edit/{id}','cms\menuController@edit')->name('cms.menu.edit');
       Route::post('/edit_post/{id}','cms\menuController@edit_post')->name('cms.menu.edit_post');
       Route::get('/editsub/{id}','cms\menuController@edit_subs')->name('cms.menu.editsub');
       Route::post('/editsub_post/{id}','cms\menuController@edit_subs_post')->name('cms.menu.editsub_post');
    });



});

