<?php



Route::get('/', function () {
    return redirect()->route('login');
});

//Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');



/*******************Category Controller****************/
Route::get('/add-category', 'CategoryConrtoller@index')->name('add.category');
Route::post('/save-category', 'CategoryConrtoller@save_category')->name('save.category');
Route::get('/all-category','CategoryConrtoller@all_category')->name('all.category');
Route::get('/delete-category/{category_id}','CategoryConrtoller@delete_category');
Route::get('/edit-category/{category_id}','CategoryConrtoller@edit_category');
Route::post('/update-category/{category_id}','CategoryConrtoller@update_category');
Route::get('/unactive-category/{category_id}','CategoryConrtoller@unactive_category');
Route::get('/active-category/{category_id}','CategoryConrtoller@active_category');
Route::get('/view-category/{category_id}','CategoryConrtoller@view_category');





Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');