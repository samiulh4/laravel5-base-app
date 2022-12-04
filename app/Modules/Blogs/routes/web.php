<?php

Route::group(['module' => 'Blogs', 'middleware' => ['web'], 'prefix' => 'blog', 'namespace' => 'App\Modules\Blogs\Controllers'], function() {

    Route::get('index', 'BlogController@index')->name('blog.index');

});
