@extends('layouts.app')

@section('events')

<div class="container">
    <h1 class="text-center">Dodaj użytkownika do grupy</h1>
    <div class="row row justify-content-center">
        <div class="col-12 ">

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Lp.</th>
                        <th scope="col">Imie</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Grupy</th>
                        <th scope="col">Akcja</th>
                        </tr>
                    </thead>

                @foreach($users as $user)

                    <tbody>
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surname }}</td>

                            
                            @foreach($user-> groups as $group)
                            <td>{{$group->name }}</td>

                            
                            <td> --------------------- </td>

                            @endforeach

                            <td><button type="button" class="btn btn-primary">Dodaj</button></td>
                        </tr>
                    </tbody>
                
                        
                @endforeach
                </table>

        </div>
    <div class="row row justify-content-center">
        <div class="col-4">
            <a href="{{ route('events.index')}}">
                <button type="button" class="btn btn-primary">Powrót</button>
            </a>
        </div>
    </div>
    


</div>
@endsection

