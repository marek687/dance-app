<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller
{
    public function index()
    {
        return view('layouts.events.index');
    }
    public function create()
    {
        return view('layouts.events.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'data' => 'required',
            'time' => 'required',
        ]);
        $newEvent = Events::create($data);
        return redirect( route('events.index'));
    }
}
