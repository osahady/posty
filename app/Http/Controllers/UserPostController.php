<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class UserPostController extends Controller
{
    public function showIndex(User $user)
    {
        //Eager Loading 
        $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
