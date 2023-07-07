<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\SiteController;

//use
//namespace

// route::get('/test/{name}/{age}',function($name,$age){
//     return 'Welcome '.$name.' You have '.$age;
// }
// )->WhereAlpha('name')->WhereNumber('age');
/*
route::get('/',function(){
    $post=22;
    $comment=334;
    $url =route('NewsInfo',[$post,$comment]);
return 'welcome to our news site here is the url:'.$url;
});


route::get('/news/{postid}/comments/{commentid}/show',function($postid,$commentid){
return 'News '.$postid.' comment '.$commentid;
})->name('NewsInfo');

*/

// route::prefix('admin')->Group(function(){
//     route::get('user',function(){return 'Admin User';});
//     route::get('comment',function(){return 'Admin comment';});
//     route::get('pay',function(){return 'Admin pay';});
//     route::get('interface',function(){return 'Admin interface';});
//     });

// route::get('/',function(){
// $name='Alhassan';
// $age =20;
// $url = route('newsInfo',[$name,$age]);
// return " welcome To Your Site $name Yor Link is http:  $url";
// });

// route::get('/news/{name}/{age?}',function($name,$age =null){
//     return "Welcome ".$name." your age is ".$age;
// })->WhereAlpha('name')->WhereNumber('age')->name('newsInfo');

// route::perfix('admain')->name('admain.')->group(function(){

route::get('/web', [WebController::class, 'web'])->name('web');
route::get('/user', [WebController::class, 'user'])->name('user');
route::get('/contant', [WebController::class, 'contant'])->name('contant');
route::get('/main', [WebController::class, 'main'])->name('main');
// });
