<?php

use App\Http\Livewire\Categories\Categories;
use App\Http\Livewire\Categories\Categoryposts;
use App\Http\Livewire\Posts\Posts;
use App\Http\Livewire\Posts\Post as p;
use App\Http\Livewire\Tags\Tagposts;
use App\Http\Livewire\Tags\Tags;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('test', function () {
//     $category = App\Models\Category::find(3);
//     // return $category->posts;

//     $comment = App\Models\Comment::find(152);
//     // return $comment->author;
//     // return $comment->post;

//     $post = App\Models\Post::find(152);
//     // return $post->category;
//     // return $post->author;
//     // return $post->images;
//     // return $post->comments;
//     // return $post->tags;

//     $tag = App\Models\Tag::find(5);
//     // return $tag->posts;

//     $author = App\Models\User::find(88);
//     // return $author->posts;
//     return $author->comments;
// });

Route::middleware(['set_locale'])->group(function () {

    Route::get('/setlocale/{locale}', function ($locale) {
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    })->name('setlocale');

    Route::get('/', function () {
        return view('pages/index');
    });

    Route::get('/about', function () {
        return view('pages/about');
    });

    Route::get('/calculator', function () {
        return view('pages/calc');
    });

    Route::get('/favorit', function () {
        return view('pages/favorit');
    });

    Route::get('/favorit-corp', function () {
        return view('pages/favorit-corp');
    });

    Route::get('/contact', function () {
        return view('pages/contact');
    });

    Route::get('/mails', function () {
        return view('pages/mails');
    });

    Route::get('/certificates', function () {
        return view('pages/certificates');
    });

    Route::get('/service-favorit', function () {
        return view('pages/service-favorit');
    });

    Route::get('/service-cloud', function () {
        return view('pages/service-cloud');
    });

    Route::get('/news', function () {
        return view('pages/news');
    });

    Route::get('/new-resertification', function () {
        return view('pages/new-resertification');
    });
    Route::get('/new-digitalization', function () {
        return view('pages/new-digitalization');
    });
    Route::get('/new-open-taldyqorgan', function () {
        return view('pages/new-open-taldyqorgan');
    });
    Route::get('/new-successful-implementation-completed', function () {
        return view('pages/new-successful-implementation-completed');
    });
    Route::get('/new-taxes-change', function () {
        return view('pages/new-taxes-change');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('dashboard/categories', Categories::class)->name('categories');
Route::get('dashboard/categories/{id}/posts', Categoryposts::class);

Route::get('dashboard/posts', Posts::class)->name('posts');
Route::get('dashboard/posts/{id}', p::class);

Route::get('dashboard/tags', Tags::class)->name('tags');
Route::get('dashboard/tags/{id}/posts', Tagposts::class);
