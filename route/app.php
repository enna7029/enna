<?php

use Enna\Framework\Facade\Route;
use Enna\Framework\Middleware\AllowCrossDomain;

//Route::group('index', function () {
//    Route::get('get', 'Index/get');
//    Route::post('post', 'Index/post');
//    Route::rule('rule', 'Index/rule');
//});

//Route::miss('index/miss');
//
//Route::domain('enna', function () {
//    Route::get('test/:id', 'Index/test');
//});
//Route::resource('blog', 'blog');

//Route::get('think', 'index/miss')->middleware([AllowCrossDomain::class]);

Route::get('allow', 'index/allow')->allowCrossDomain();