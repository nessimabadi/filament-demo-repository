<?php

namespace App\Http\Controllers;

class TagExampleController extends Controller
{
    public function __invoke()
    {
        return view('tag.form');
    }
}
