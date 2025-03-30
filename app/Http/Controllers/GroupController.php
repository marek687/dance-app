<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('layouts.group.index',['groups' => $groups]);

    }
    public function create()
    {
        return view('layouts.group.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'level' => 'required',
            'description' => 'required',
        ]);

        $newGroup = Group::create($data);

        return redirect(route('group.index'));
    }
    public function edit(Group $group)
    {
        return view('layouts.group.edit',['group' => $group]);
    }
    public function update(Group $group, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'level' => 'required',
            'description' => 'required',
        ]);

        $group->update($data);

        return redirect(route('group.index'))->with('success','Aktualizacja grupy przebiełam pomyśle.');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect(route('group.index'))->with('success','Grupa została usunięta');
    }
    public function groupuser($id)
    {
        $groups = Group::find($id);
        $users = User::find($id);

        return view('layouts.group.groupuser',['groups' => $groups]); 
    }
}
