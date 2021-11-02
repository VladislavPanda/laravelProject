<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        /*$category = Category::find(1);

        dd($category->posts);*/
        $post = Post::find(1);
        dd($post->tags);
        //return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post){
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);

        $post->update($data);
        return redirect()->route('posts.show');
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function delete(){
        $post = Post::withTrashed()->find(3);
        $post->restore();
         
        //$post->delete();

    }

    public function firstOrCreate(){
        $post = Post::find(1);
        $somePost = [
            'title' => 'some title',
            'content' => 'some content',
            'image' => 'some ing',
            'likes' => 20,
            'is_published' => 0
        ];

        $post = Post::firstOrCreate([
            'title' => 'some title'
        ], [
            'title' => 'some title',
            'content' => 'some content',
            'image' => 'some ing',
            'likes' => 20,
            'is_published' => 0
        ]);

        dd($post);
    }

    public function updateOrCreate(){
        $post = Post::updateOrCreate([
            'title' => 'some title new'
        ], [
            'title' => 'new some title',
            'content' => 'new some content',
            'image' => 'new some ing',
            'likes' => 18,
            'is_published' => 1
        ]);

        dd($post);
    }
}
