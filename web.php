<?php

use Damin\Route;

Route::get("/", "MainController@index");
Route::get("/index", "MainController@index");
Route::get("/login", "LoginController@index");
Route::get("/logout", "LoginController@logout");
Route::post("/signin", "LoginController@login");
Route::get("/register", "LoginController@register");
Route::post("/signup", "LoginController@ok");
Route::get("/register_suc", "LoginController@suc");
Route::get("/upload", "UploadController@index");
Route::post("/up", "UploadController@up");
Route::get("/all", "ListController@all");
Route::get("/main1", "ListController@main1");
Route::get("/main2", "ListController@main2");
Route::get("/main3", "ListController@main3");
Route::get("/main4", "ListController@main4");
Route::get("/main5", "ListController@main5");
Route::get("/main6", "ListController@main6");