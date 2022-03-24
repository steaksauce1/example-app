<?php
namespace App\Models;
use App\Models\Post;

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\NewsletterController;


use App\Services\Newsletter;

//use App\Models\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Spatie\YamlFrontMatter\Document;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

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

Route::get('ping', function () { 
    $mailchimp = New \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us20'
    ]);

    // $response = $mailchimp->ping->get();
    $response = $mailchimp->lists->getAllLists();
    // 15593bf754
    // $response = $mailchimp->lists->getList('15593bf754');
    // $response = $mailchimp->lists->getListMembersInfo('15593bf754');

    $response = $mailchimp->lists->addListMember('15593bf754', [
            'email_address' => 'timaaa@gmail.com',
            'status' => 'subscribed'
    ]);
    ddd($response);

});
// Route::post('newsletter', NewsletterController::class);
Route::post('newsletter', function(){

    request()->validate(['email' => 'required|email']);
    $mailchimp = New \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us20'
    ]);

    $response = $mailchimp->lists->addListMember('15593bf754', [
            'email_address' => request('email'),
            'status' => 'subscribed'
    ]);
    return redirect('/posts')->with('success', 'Signed up for newletter!');
});



//welcome view page
Route::get('/', function () {
 
    return view('welcome');
});

//link made while eating a banana to fill out the grid on welcome page
Route::get('/banana', function () {
    return view('banana');
});


/*
    MAIN PAGE ROUTES

    These are the main routes related to the project. This is a constantly evolving project where I'm just trying out new things and seeing how they work.
    Most of these routes are based of the Laravel8 tutorial from laracase.
*/

//POSTS -  page that shouws all posts in the database
Route::get('/posts', [PostController::class, 'index'])->name('home');

//POST PAGE - a direct page to a post with its contents, author, and category
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);
Route::delete('posts/{post:slug}/comments', [PostCommentsController::class, 'destroy']);

//SUBMIT PAGE - form sto submit posts using si
Route::get('/submit', [PostController::class, 'showform']);
Route::post('/submit', [PostController::class, 'store']);

// CATEGORY - a page displaying all posts in the related category
// Route::get('categories/{category:slug}', function(Category $category){
//        return view('posts', [
//         'posts' => $category->posts->load(['category', 'author']), // returns the post blade with all posts related to the category
//         'currentCategory' => $category,
//          'categories' => Category::all()
//     ]);
// })->name('category');


// AUTHOR -  a page displaying all the posts from the author
Route::get('authors/{author:username}', function(User $author){
    return view('posts.index', [ 
        'posts' => $author->posts->load(['category', 'author']) // returns the post blade with all the posts related to the author       
    ]);
});

// Route::get('admin/posts/your', function(User $author){
//     return view('admin.posts.index', [ 
//         'posts' => Post::latest()->paginate(5) // returns the post blade with all the posts related to the author   
//     ]);
// });

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('admin/posts', [AdminPostController::class, 'store']);
Route::get('admin/posts/create', [AdminPostController::class, 'create']);

Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('admin');
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');


Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin');
Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin');

Route::get('admin/posts/your', [AdminPostController::class, 'yourindex'])->middleware('admin');
Route::patch('admin/posts{post}/changestatus', [AdminPostController::class, 'changestatus'])->middleware('admin');


// Route::get('post/{post}', function ($id) {
//     $post=Post::find($id);
//     return view('post', [
//       'post' => $post
//     ]); 
//   }) -> where('post', '[A-z_\-]+');


