<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ExampleController extends Controller
{
    public function show()
    {
        $comments=Post::find(1)->comments;
        return view('comments', compact('comments'));
    }
}
