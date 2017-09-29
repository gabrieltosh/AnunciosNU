<?php
Route::get('panel','controladorPagina@panel')->name('panel');
Route::get('login','controladorPagina@login')->name('login');
Route::get('/','controladorPagina@inicio')->name('inicio');
Route::get('contacto','controladorPagina@contacto')->name('contacto');

//Login
Route::post('log','Login\controladorLogin@log')->name('log');
Route::get('logout','Login\controladorLogin@logout')->name('logout');
