<?php



Route::get('/', function () {
    return view('layout.home-layout');
});
Route::get('faq', function () {
    return view('page.faq');
});
Route::get('pagamenti', "PagamentiController@getPagamenti");

Route::get('pagamenti/{id}', "PagamentiController@getPagamento");



?>
