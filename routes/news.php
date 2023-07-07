<?php


use Illuminate\Support\Facades\Route;


route::prefix('News')->name('News.')->
controller(NewsController::class)->group(function(){
route::get('/Index','Index')->name('Index');
route::get('/User','User')->name('User');
route::get('/About','About')->name('About');
route::get('/Payment','Payment')->name('Payment');
});
