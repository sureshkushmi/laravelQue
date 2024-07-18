<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        //fetch all users with their posts
        $users = User::with('posts')->get();
        //$posts = Post::all();
        return view('posts.index', compact('users'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create([
            'user_id' => $user_id,
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        return redirect()->route('post.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }


}
