<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class Pagecontroller extends Controller
{
    public function index(){
        $post = Post::all();

        return response()->json($post);
    }
}
