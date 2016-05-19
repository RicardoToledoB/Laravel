<?php

namespace EloquentOrm\Http\Controllers;

use Illuminate\Http\Request;

use EloquentOrm\Http\Requests;
use EloquentOrm\User;
class QueryController extends Controller
{
    public function getAll(){
        $users=User::all();
        return view('query.all',  compact('users'));
        
    }
}
