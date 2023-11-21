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
            'time' => 'required'
        ]);
        $newEvent = Events::create($data);
        return redirect( route('events.index'));
    }
    public function edit(Events $events)
    {
        return view('layouts.events.edit',['events' => $events]);
    }

    public function update(Events $events, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'data' => 'required',
            'time' => 'required'
        ]);

        $events->update($data);

        return redirect( route('events.index'))->with('success','Aktualizacja przebiegła pomyśle.');
    }
    public function destroy(Events $events)
    {
        $events->delete();
        return redirect( route('events.index'))->with('success','Wydarzenie zostało usunięte.');
    }

}
