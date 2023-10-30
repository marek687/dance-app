<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function index()
    {
    return view('layouts.action.set');
    }
    public function create()
    {
    return view('layouts.action.create');
    }

}
