<?php

namespace EloquentOrm\Http\Controllers;

use Illuminate\Http\Request;

use EloquentOrm\Http\Requests;

class PageController extends Controller
{
    //
    public function home(){
        return view('pages.home');
        
    }
}
