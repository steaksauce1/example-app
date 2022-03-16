<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class AdminPostController extends Controller
{
    public function index(){
        return view('admin.posts.index', [ 
            'posts' => Post::paginate(50)
        ]);
    }

    //work in progress
     public function yourindex(){
        return view('admin.posts.index', [ 
           'posts' => Post::latest()->filter(
                    request(['search', 'category', 'author',])
                )->paginate(6)->withQueryString()
            ]);
    }



    public function create(){
        return view('admin.posts.create');
    }

    public function store(){
        // ddd(request()->file('thumbnail'));

        
        $attributes = $this->validatePost(New Post());
        // $attributes = request()->validate([
        //     'title' => 'required',
        //     'thumbnail' => $post->exists ? ['image'] :['required', 'image'],
        //     'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
        //     'excerpt' => 'required',
        //     'body' => 'required',
        //     'category_id' => ['required', Rule::exists('categories', 'id')]
        // ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/posts')->with('success', 'Post created!');
    }


    public function edit(Post $post){
        return view('admin.posts.edit', ['post' => $post]);
    }


    public function update(Post $post){

        $attributes = $this->validatePost($post);
        // $attributes = request()->validate([
        //     'title' => 'required',
        //     'thumbnail' => $post->exists ? ['image'] :['required', 'image'],
        //     'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
        //     'excerpt' => 'required',
        //     'body' => 'required',
        //     'category_id' => ['required', Rule::exists('categories', 'id')]
        // ]);

            if ($attributes['thumbnail'] ?? false){
                $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
            }
            

             $post->update($attributes);

            return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post){
            $post->delete();
            return back()->with('success', 'Post Removed!');
    }



    protected function validatePost(?Post $post = null): array{
        $post ??= new Post();
        return request()->validate([
            'title' => 'required',
            'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }
}
