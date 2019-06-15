<?php
use Gondr\Route;

Route::get("/", "StaticController@index");
Route::get("/view", "PostController@viewPage");

if(!isset($_SESSION['user'])) {
    //로그인되지 않은 유저만
    Route::get("/login", "UserController@loginPage");
    Route::post("/login", "UserController@loginProcess");
}else {
    //로그인한 유저만
    Route::get("/logout", "UserController@logout");
    //글쓰기 관련 라우팅
    Route::get("/post", "PostController@writePage");
    Route::post("/post", "PostController@writeProcess");
    //첨부파일 업로드
    Route::post("/upload", "PostController@uploadHandle");
    Route::get("/remove", "PostController@removePage");

    Route::get("/edit", "PostController@editPage");
}
