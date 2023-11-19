<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::all();
        return view('layouts.events.index',['events' => $events]);
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
    public function edit(Events $event)
    {
        return view('layouts.events.edit',['event'=> $event]);
    }
}
