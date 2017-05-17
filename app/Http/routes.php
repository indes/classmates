<?php

Route::group(['middleware'=>'uauth'],function (){
    Route::get('/','IndexController@index')->name('index');
    Route::get('/search','IndexController@search');
    Route::get('/rdct','IndexController@rd');
//    Route::get('/class/file','cmClassController@files');
    Route::resource('avatar','AvatarController');
//    Route::resource('/class/file/del/{id?}','FileController@del');
    Route::resource('/class/file','FileController');

    //后台控制器
    Route::get('/admin','AdminController@index');
    Route::get('/admin/file','AdminController@file');
    Route::get('/admin/user/{id?}','AdminController@user');
    Route::get('/admin/class','AdminController@class');
    Route::get('/admin/journal','AdminController@journal');

    Route::any('/admin/pwd/{id}','AdminController@pwd');
    Route::any('/admin/profile/{id}','AdminController@profile');

});


Route::group(['namespace' => 'Home'], function()
{
    Route::group(['middleware'=>'uauth'],function (){
        Route::get('/home/{id?}','HomeController@index')->name('home');
        Route::post('/home','HomeController@publish');
        Route::get('/exit','AuthController@logout');

        Route::get('/del/{id}','HomeController@del');//动态删除路由
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::post('/login','AuthController@login');
        Route::get('/login',function (){
            return view('home.login')->withInfo(['title'=>'登录']);
        });
        Route::get('/signup',function (){
            return view('home.signup')->withInfo(['title'=>'注册']);
        });
        Route::post('/signup','AuthController@signup');
        Route::get('/',function (){
            abort(404);
        });
    });
});


//account路由
Route::group(['prefix' => 'account','middleware'=>'uauth'], function () {
    Route::group(['prefix' => 'set'], function () {
        Route::get('pwd',function (){
            return view('set.pwd')->withInfo(['title'=>'密码修改','active'=>'set']);
        });
        Route::post('pwd','AccountController@pwdset');
        Route::any('profile','AccountController@profileset');
    });
});


Route::group(['prefix' => 'class','middleware'=>'uauth'], function () {
    Route::get('/','cmClassController@index');
    Route::get('/members','cmClassController@mbr');
});


Route::get('/set',function (){
    session(['admin'=>123]);
    return 123;
});


Route::get('/get','indexController@test');

