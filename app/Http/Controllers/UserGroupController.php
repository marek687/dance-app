<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;


class UserGroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $users = User::with('groups')->get();
  
        return view('layouts.group-user.index',[
            'users'=> User::all()
        ]);
        return response()->json(['user' => $users], 200);

        
    }
    public function create()
    {
        $users = User::with('groups')->get();
        //$groups = Group::with('users')->get();

  
        return view('layouts.group-user.create',[
            'users'=> User::all()
        ]);
        // return view('layouts.group-user.create');
    }

    public function show()
    {
        $users = User::with('groups')->get();
        
        $users = User::orderBy('created_at','ASC');
        
        return view('layouts.group-user.show',[
            'users'=> User::all()
        ]);

    }
}
