<?php


use Illuminate\Support\Facades\Route;


route::prefix('User')->name('User.')->controller(UserController::class)->group(function(){
route::get('/Name/{name}','Name')->name('Name');
route::get('/Age/{age}','Age')->name('Age');
route::get('/Adress','Adress')->name('Adress');
route::get('/Payment','Payment')->name('Payment');
});
