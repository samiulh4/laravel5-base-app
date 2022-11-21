<?php
use Illuminate\Support\Facades\Route;

Route::group(['module' => 'Users', 'middleware' => ['web'], 'namespace' => 'App\Modules\Users\Controllers'], function() {
    Route::get('/user/register', 'UsersController@register')->name('user.register');
});
