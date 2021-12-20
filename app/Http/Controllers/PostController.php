<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        //dd($posts);
        return view("post.index")->with('posts', $posts);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post.single')->with('post', $post);
    }

    public function create(){
        return view("post.create");
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('txtTitle');
        $post->slug = $request->input('txtSlug');
        $post->content = $request->input('txtContent');
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect('/posts');
    }

    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post.edit')->with('post', $post);
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('txtTitle');
        $post->slug = $request->input('txtSlug');
        $post->content = $request->input('txtContent');
        $post->save();

        return redirect("/posts");
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }
}
