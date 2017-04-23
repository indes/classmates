<?php


Route::get('/','IndexController@index');



Route::group(['namespace' => 'Home'], function()
{
    Route::group(['middleware'=>'uauth'],function (){
        Route::get('/home/{id?}','HomeController@index')->name('home');
        Route::post('/home','HomeController@publish');
        Route::get('/exit','AuthController@logout');

    });

    Route::group(['prefix' => 'auth'], function () {
        Route::post('/login','AuthController@login');
        Route::get('/login',function (){
            return view('home.login');
        });
        Route::get('/signup',function (){
            return view('home.signup');
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
            return view('set.pwd');
        });

        Route::post('pwd','AccountController@pwdset');
        Route::any('profile','AccountController@profileset');
    });
});

Route::group(['prefix' => 'class','middleware'=>'uauth'], function () {
    Route::get('/','cmClassController@index');
});



Route::get('/set',function (){
    session(['admin'=>123]);
    return 123;
});

Route::get('/get',['middleware'=>'user',function(){
    return 'Admin';
}]);