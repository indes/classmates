<?php


Route::group(['namespace' => 'Home'], function()
{
    Route::group(['middleware'=>'uauth'],function (){
        Route::get('/home','HomeController@index')->name('home');
        Route::post('home','HomeController@publish');
        Route::get('/exit','AuthController@logout');

        Route::get('/',function (){
            return redirect()->route('home');
        });
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



Route::get('/set',function (){
    session(['admin'=>123]);
    return 123;
});

Route::get('/get',['middleware'=>'user',function(){
    return 'Admin';
}]);