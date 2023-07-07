<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

//use
//namespace
route::get('/Home/{bage}/{num}',function($bage,$num){
    return 'Welcome in '.$bage.' You are in bage number '.$num;
})->name('BageScreen');

route::get('/',function(){
    $bage='content';
    $num=111;
    $url=route('BageScreen',[$bage,$num]);
    return 'This Is The Url : '.$url;
});

