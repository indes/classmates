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
    Route::get('/set/pwd',function (){
        return view('set.pwd');
    });
    Route::post('/set/pwd','AccountController@pwdset');

});



Route::get('/set',function (){
    session(['admin'=>123]);
    return 123;
});

Route::get('/get',['middleware'=>'user',function(){
    return 'Admin';
}]);