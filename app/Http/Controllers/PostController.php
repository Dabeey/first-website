<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        Post::create($validated);
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    
    }


    public function show($id)
    {
        $post = Post::findOrFail($id); // Find or send error message automatically
        // Using route model binding, just do show(Post $post) and laravel automatically finds the post and just return the view
        return view('posts.show', compact('post'));
    }


    public function edit($id)
    { $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $post->update($validated);
        return redirect()->route('posts.show', $post)->with('success', 'Post created successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}
