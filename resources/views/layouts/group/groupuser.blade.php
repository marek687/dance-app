@extends('layouts.app')

@section('events')

<body>
<div class="container">
    <h1>Członkowie grupy {{$groups->name}}</h1>
    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Lp.</th>
      <th scope="col">Imie</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Numer telefonu</th>
      <th scope="col">E-mail</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
  @forelse($groups->user as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->surname}}</td>
      <td>{{$user->phone_number}}</td>
      <td>{{$user->email}}</td>
      <td>------------</td>
    </tr>
    @empty
      <p>

        <p>
    @endforelse
    
  </tbody>
</table>

    <div class="col ">
        <a href="{{ route('group.index')}}">
            <button type="button" class="btn btn-primary">Powrót</button>
        </a>
    </div>


</body>

@endsection