<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Voyager::model('Post')->where('status', '=', 'PUBLISHED')->get();
        return view('blog.index', ['posts' => $posts ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Voyager::model('Post')->where('slug', '=', $slug)->firstorfail();
        return view('blog.show', ['post' => $post ]);
    }

}
