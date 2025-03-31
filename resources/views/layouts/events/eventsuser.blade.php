@extends('layouts.app')

@section('events')

<body>
<div class="container">
    <h1>Członkowie wydarzenia {{$event->name}}</h1>
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
  @forelse($event->grouplist as $user)
    <tr>
      <th scope="row">{{ $user->id}}</th>
      <th scope="row">{{ $user->name}}</th>
      <th scope="row">{{ $user->surname}}</th>
      <th scope="row">{{ $user->phone_number}}</th>
      <th scope="row">{{ $user->email}}</th>
      <th scope="row">-----------</th>
    </tr>
    @empty
    <p>
        dfdfd
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