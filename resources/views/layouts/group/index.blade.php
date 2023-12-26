@extends('layouts.app')

@section('events')
<div class="container">
    <h1>Grupy</h1>
    <div class="row">
        <div class="col">
            <h3>Stwórz nową grupę</h3>
        </div>
        <div class="col">
            <a href="{{route('group.create')}}"  class="btn btn-primary">Nowa grupa</a>
        </div>
    </div>
<div>
    @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
</div>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Lp.</th>
        <th scope="col">Nazwa grupy</th>
        <th scope="col">Poziom grupy</th>
        <th scope="col">Opis</th>
        <th scope="col">Edycja</th>
        <th scope="col">Usun</th>
      </tr>
    </thead>
    <tbody>
        @foreach($groups as $group)
      <tr>
        <th scope="row">{{$group->id}}</th>
        <td>{{$group->name}}</td>
        <td>{{$group->level}}</td>
        <td>{{$group->description}}</td>
        <td>
            <a href="{{route('group.edit',['group' => $group ])}}" class="btn btn-primary">Edycja</a>
        </td>
        <td>
            <form method="post" action="{{route('group.destroy', ['group' => $group ])}}">
                @csrf
                @method('delete')
                <input type="submit" value="Usuń" class="btn btn-danger">
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
