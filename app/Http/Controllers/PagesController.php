<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Hello World';
        return view('pages.index')->with('title', $title);
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
