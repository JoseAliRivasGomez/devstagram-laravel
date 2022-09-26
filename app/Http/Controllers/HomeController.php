<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke() {

        $ids = auth()->user()->following->pluck('id')->toArray();

        $posts = Post::whereIn('user_id', $ids)->latest()->paginate(20);

        $users = User::query()->paginate(20);

        //dd($users);

        //dd($posts);

        return view('home', [
            'posts' => $posts,
            'users' => $users,
        ]);

    }
}
