<?php



Route::get('/', function () {
    return redirect()->route('login');
});

//Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');