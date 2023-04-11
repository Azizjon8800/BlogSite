<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::with('category')->paginate(5);
        $randomPost = Post::with('category')->get()->random(4);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        return view('post.index', compact('posts', 'randomPost', 'likedPosts'));
    }
}
