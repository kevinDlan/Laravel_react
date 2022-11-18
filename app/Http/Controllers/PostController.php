<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Inertia\Inertia;

class PostController extends Controller
{
    //

    public function index()
    {

        $posts = ["kevin Kone","Yves Roland","Tialao", "Seka Gautier"];
        return Inertia::render('Posts/PostsComponent', props:$posts);
    }


    public function form()
    {
    
        return Inertia::render('Posts/Create');
    }

    public function create(Request $request)
    {
        dd($request->all());
        return Inertia::render('Posts/Create');
    }

}
