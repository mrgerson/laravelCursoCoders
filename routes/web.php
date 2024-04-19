<?php

use App\Http\Controllers\QueriesAll;
use App\Models\User;
use App\Models\Profile;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/prueba', function () {

    $post = Post::find(1);

    /* $comments = $post->comments()->create([
        'body' => 'este es una prueba'
    ]); */

    $post->tags()->attach([1,2,3]);

    return "agregado";
});

Route::get('pdf', [QueriesAll::class, 'index']);
