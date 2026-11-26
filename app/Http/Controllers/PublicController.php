<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PublicController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()->orderBy('id')->paginate(20);

        return view('welcome', compact('posts'));
    }
}
