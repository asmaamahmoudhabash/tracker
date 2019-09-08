<?php



Route::group(array('prefix' => 'AdminPanel', 'middleware' => 'auth'), function () {



    Route::resource('Admins', 'AdminController');
    Route::resource('Settings', 'SettingController');
    Route::resource('Tasks', 'TaskController');
    Route::resource('Projects', 'ProjectController');


    // status routs

    // admins
    Route::get('active_admin/{id}','AdminController@active');
    Route::get('unactive_admin/{id}','AdminController@unactive');


    // tasks
    Route::get('active_task/{id}','TaskController@active');
    Route::get('unactive_task/{id}','TaskController@unactive');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
