<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Voyager::model('Page')->where('slug', 'home')->firstorfail();
        return view('page.index', ['page' => $page ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = Voyager::model('Page')->where('slug', '=', $slug)->firstorfail();

        return view('page.show', ['page' => $page ]);
    }

}
