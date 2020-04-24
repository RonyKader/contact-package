<?php 



Route::get('/contact','Rk\Contact\Http\Controllers\ContactController@index');
Route::post('/contact','Rk\Contact\Http\Controllers\ContactController@store')->name('contact.submit');

?>