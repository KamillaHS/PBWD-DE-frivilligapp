<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::all();



//       $title = 'Hello World';
      //  $user_id = auth()->user()->id;
      //  $user = User::find($user_id);

        $data = array(
            'title' => 'Hello World',
            'posts' => $posts
        );

        return view('pages.index')->with($data);
    }

    public function about()
    {
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }

    public function historik()
    {
        $data = array(
            'title' => 'Historik',
            'jobs' => ['Job 1', 'Job 2', 'Job 3']
        );
        return view('pages.historik')->with($data);
    }
}
