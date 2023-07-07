<?php
namespace App\Http\Controllers;


class NewsController{

    function index(){
        route::get('user',function(){return 'News User';})->name('user');
        route::get('comments',function(){return 'News Comments';})->name('comment');
        route::get('sites',function(){return 'News Sites';})->name('sites');
        route::get('orders',function(){return 'News Orders';})->name('order');
        route::get('payment',function(){return 'News Payment';})->name('payment');
       
    }
}