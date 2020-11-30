<?php
use App\Post;
use App\User;
use App\Country;
use App\Photo;
use App\Video;
use App\Tag;

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

Route::get('/', function () {
    return view('welcome');
});

// get all the tags of a specific post
Route::get('/posts/{id}/tags', function($id) {
    $post_tags = Post::find($id);
     
    foreach($post_tags->tags as $tag) {
        echo $tag->name . '<br>';
    }
});

// get all the tags of a specific video
Route::get('/videos/{id}/tags', function($id) {
    $video_tags = Video::find($id);

    foreach($video_tags->tags as $tag) {
        echo $tag->name . '<br>';
    }
});

Route::get('/tag/{id}/post', function($id) {
    $tag_post = Tag::find($id);
    
    foreach($tag_post->posts as $post) {
        echo $post->title . '<br>';
    }
});

Route::get('/tag/{id}/videos', function($id) {
    $tag_video = Tag::find($id);
    
    foreach($tag_video->videos as $video) {
        echo $video->name . '<br>';
    }
});