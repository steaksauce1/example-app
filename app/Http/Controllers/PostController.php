<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        
              return view('posts.index', [
                 'posts' => Post::latest()->filter(
                    request(['search', 'category', 'author',])
                )->paginate(6)->withQueryString()
            ]);
    }

    public function show( Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }


   //custom class
    public function showform(){

        return view('posts.submit', [
            'posts' => request(['category'])
        ]);
    }

    // public function store(Post $post){
    //     $post->comments()->create([
    //             'user_id' => request()->user()->id,
    //             'category_id' => request('category'),
    //             'title' => request('title'),
    //             'slug' => request('slug'),
    //             'excerpt' => request('excerpt'),
    //             'body' => request('body')
    //        ]);

    //     return view ('posts.index');
    // }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(){
        // ddd(request()->file('thumbnail'));

     
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/posts');
    }



}
