<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


 Route::get('/', 'HomeController@getIndexPage');
Route::get('/index','HomeController@getIndexPage' );




Route::get('about-us', function () {
    return view('about-us');
});



Route::get('/sub-category/{sub_category_id}', 'Sub_CategorieController@getBySubCategory');



Route::get('category-grid-view-default-with-ajax-tab', function () {
    return view('category-grid-view-default-with-ajax-tab');
});
Route::get('forgot-password', function () {
    return view('forgot-password');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('account-home', 'HomeController@index'); 


Route::get('admin/register', function () {
    return view('register');
});
Route::POST('/register/admin', 'AdminController@createAdmin'); 

Route::get('admin-pending-approvals', 'AdminController@adminsPendingApproval');
Route::delete('/admin/{admin}', 'AdminController@destroy');
Route::delete('update-admin/{admin}', 'AdminController@adminApprove');


Route::get('deactivate-user', 'AdminController@getDeactivateUserPage');
Route::delete('delete-user/{user}', 'AdminController@deactivateUser');
Route::delete('activate-user/{user}', 'AdminController@activateUser');


Route::get('admin-add-category', 'AdminController@getAddCategoryPage');
Route::post('/add-categories', 'AdminController@addCategory');

Route::delete('category-delete/{category}', 'AdminController@deleteCategory');
Route::delete('category-deactivate/{category}', 'AdminController@deactivateCategory');
Route::delete('category-activate/{category}', 'AdminController@activateCategory');
Route::delete('category-show-on-index/{category}', 'AdminController@showCategoryonIndex');
Route::delete('category-delete-from-index/{category}', 'AdminController@deleteCategoryFromIndex');
Route::delete('category-edit/{category}', 'AdminController@editCategory');

Route::get('pending-add-approval', 'AdminController@getAddPendingAprovalPage');
Route::delete('approve-add/{advertisement_data}', 'AdminController@activateAdds');
Route::delete('delete-adds/{advertisement}', 'AdminController@deactivateAdds');


Route::delete('add-new-comment/{advertisement_id}', 'CommentController@postComment');

Route::get('/add-sub-category/', 'AdminController@getSubCategoryPage');

Route::post('add-new-sub-categories', 'AdminController@addNewSubCategory');




Route::get('property-details', function () {
    return view('property-details');
});
Route::get('property-list', function () {
    return view('property-list');
});
Route::get('register', function () {
    return view('auth.register');
});
Route::get('signup', function () {
    return view('auth.register');
});
Route::get('sub-category-sub-location', function () {
    return view('sub-category-sub-location');
});


Route::get('terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('faq', function () {
    return view('faq');
});
Route::get('contact', function () {
    return view('contact');
});



Auth::routes();



Route::get('category/{categoryid}', 'AdvertisementController@getByCategory');

Route::get('ads-details/{id}', 'AdvertisementController@getById')->where('id', '[0-9]+');

//Route::get('ads-details', 'PostController@getall');

Route::group(['middleware' => 'auth'], function () 
{
        // Comments
     Route::post('comments/{advertisement_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
    Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
    Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
    Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
    Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);


    Route::get('account-myads', 'AdvertisementController@getMyListings');

    Route::get('account-pending-approval-ads', 'AdvertisementController@getMyListings');

    Route::get('/post-ads', 'AdvertisementController@addPost');
   // Route::get('store', 'AdvertisementController@getCreate');
    Route::post('store', 'AdvertisementController@create')->name('post-ads');

    Route::post('post-ads/{id}', 'AdvertisementController@update')->where('id', '[0-9]+');
    Route::get('post-ads/{id}', 'AdvertisementController@delete')->where('id', '[0-9]+')->name('advertisements.delete');

});

Route::delete('add-new-province', 'AdminController@addprovince');
Route::get('admin-add-province', 'AdminController@getAddProvincePage');
Route::get('admin-add-city', 'AdminController@getAddCityPage');
Route::delete('add-new-city', 'AdminController@addcity');


