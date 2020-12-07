<?php
use App\Post;
use App\User;
use App\Country;
use App\Photo;
use App\Video;
use App\Tag;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/posts', 'PostController');

Route::get('/getname', function() {

    $user = User::find(1);

    echo $user->name;

});

Route::get('/savename', function() {

    $user = User::find(1);

    $user->name = 'jerwin fernandez';

    $user->save();

});
