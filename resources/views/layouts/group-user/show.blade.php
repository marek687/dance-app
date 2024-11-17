@extends('layouts.app')

@section('events')
<div class="container">
    <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Lp.</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Phone numer</th>
                <th scope="col">E-mail</th>
                <th scope="col">Nazwa kursu</th>
                </tr>
            </thead>

        @foreach($users as $user)
            <tbody>
                <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name}}</th>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->phone_number}}</td>
                <td>{{ $user->email }}</td>
                @foreach($user-> groups as $group)
                    <td>{{ $group->name }}</td>
                @endforeach
                </tr>
                
        @endforeach

        </table>
        <div class="row row justify-content-center">
            <div class="col-4">
                <a href="{{ route('events.index')}}">
                    <button type="button" class="btn btn-primary">Powrót</button>
                </a>
            </div>
        </div>
    </div>
@endsection