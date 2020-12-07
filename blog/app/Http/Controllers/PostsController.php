<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug):object
    {

        $data = Post::where('slug', $slug)->firstorfail();


        return view('posts', [
            "data" => $data
        ]);

    }
}
