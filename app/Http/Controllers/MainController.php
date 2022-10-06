<?php

namespace App\Http\Controllers;

use PhpParser\Node\Name;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Models\Tag;

class MainController extends Controller
{
    public function index() 
    {
        $tags = Tag::all();
        if(!empty($_GET['tag_id']))
        {
            $tag_id = $_GET['tag_id'];
            $posts = Post::where();
        }
        else
        {
        $posts = Post::all();
        }
        return view('main', ['posts' => $posts, 'tags' => $tags]);
    }
}
