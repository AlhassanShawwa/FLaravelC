<?php


use Illuminate\Support\Facades\Route;

route::prefix('/Admain')->name('Admain.')->group(function(){
route::get('/News',function(){return'News Bage';})->name('News');
route::get('/About',function(){return'About Bage';})->name('About');
route::get('/Contact',function(){return'Contact Bage';})->name('Contact');
route::get('/Payment',function(){return'Payment Bage';})->name('Payment');
route::get('/Home',function(){return'Home Bage';})->name('Home');
});
