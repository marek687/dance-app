@extends('layouts.app')

@section('events')

<div class="container">
    <h1 class="text-center">Dodaj użytkownika do grupy</h1>
    
    @foreach($users as $user)
        @foreach($user->groups as $group)
        <select>
        
            <option>{{ $group->name }}</option>
            
        </select>
        @endforeach
    @endforeach

    <button type="button" class="btn btn-primary">Powrót</button>

</div>
@endsection

