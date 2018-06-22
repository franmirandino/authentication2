<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpersonationsController extends Controller
{
    public function store()
    {
    	auth()->loginUsingId(request('user_id')); //logeamos el usuario con user_id

    	return back()->with('flash', 'Estás personificando al usuario con el id ' . request('user_id'));

    }
}
