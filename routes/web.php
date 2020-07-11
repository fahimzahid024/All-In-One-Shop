 <?php







/*******************Frontend All Route ********************/

/*******************User Cntroller ************************/
Route::get('/', 'UserController@index');
Route::get('/view-details/{product_id}', 'UserController@view_product');
Route::get('/grocery-product/{subcategory_id}', 'UserController@grocery_product');
Route::get('/Clothes-product/{subcategory_id}', 'UserController@clothes_product');


/*****************Cart Controller*****************/
Route::post('/add-to-cart', 'CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');



/*******************Backend All Route**********************/


Route::get('/admin', 'loginController@login');

//Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');



/*******************Category Controller****************/
Route::get('/add-category', 'CategoryConrtoller@index')->name('add.category');
Route::post('/save-category','CategoryConrtoller@save_category')->name('save.category');
Route::get('/all-category','CategoryConrtoller@all_category')->name('all.category');
Route::get('/delete-category/{category_id}','CategoryConrtoller@delete_category');
Route::get('/edit-category/{category_id}','CategoryConrtoller@edit_category');
Route::post('/update-category/{category_id}','CategoryConrtoller@update_category');
Route::get('/unactive-category/{category_id}','CategoryConrtoller@unactive_category');
Route::get('/active-category/{category_id}','CategoryConrtoller@active_category');
Route::get('/view-category/{category_id}','CategoryConrtoller@view_category');


/*******************All Sub Category *********************/
Route::get('/add-subcategory', 'subcategoryController@index')->name('add.subcategory');
Route::post('/save-subcategory','subcategoryController@save_subcategory')->name('save.subcategory');
Route::get('/all-subcategory','subcategoryController@all_subcategory')->name('all.subcategory');
Route::get('/edit-subcategory/{subcategory_id}','subcategoryController@edit_subcategory');
Route::post('/update-subcategory/{subcategory_id}','subcategoryController@update_subcategory');
Route::get('/unactive-subcategory/{subcategory_id}','subcategoryController@unactive_subcategory');
Route::get('/active-subcategory/{subcategory_id}','subcategoryController@active_subcategory');
Route::get('/delete-subcategory/{subcategory_id}','subcategoryController@delete_subcategory');
Route::get('/view-subcategory/{subcategory_id}','subcategoryController@view_subcategory');


/********************Product Controller*****************/
Route::get('/add-product','ProductController@index')->name('add.product');
Route::post('/save.product','ProductController@save_product')->name('save.product');
Route::get('/all-product','ProductController@all_product')->name('all.product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::post('/update-product/{product_id}','ProductController@update_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');
Route::get('/view-product/{product_id}','ProductController@view_product');





Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');