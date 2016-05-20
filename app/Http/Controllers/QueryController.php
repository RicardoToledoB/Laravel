<?php

namespace EloquentOrm\Http\Controllers;

use Illuminate\Http\Request;

use EloquentOrm\Http\Requests;
use EloquentOrm\User;
class QueryController extends Controller
{
    public function eloquentAll(){
        $users=User::all();
        $title="Todos los usuarios(ALL)";
        return view('query.methods',  compact('title','users'));
        
    }
    public function eloquentGet($gender){
        $users=User::where('gender','=',$gender)
                ->get();
        $title="Todos los usuarios(GET)";
        return view('query.methods',  compact('title','users'));
        
    }
}
