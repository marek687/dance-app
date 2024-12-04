@extends('layouts.app')

@section('events')
<body>
    <div class="container">
        <div class="row p-2">
            <div class="col">
                <h2>Dodaj kurs</h2>
            </div>
            <div class="col">

                    <a class="dropdown-item" href="{{ route('events.create')}}">
                        <button type="button" class="btn btn-primary">
                            Dodaj wydarzenie</button></a>

            </div>
            <div class="col">
                <a href="{{ url('invoice') }}" class="btn btn-success">Download PDF</a>
            </div>
            
        </div>
    <div>
    <div class="container">
        <div>
            @if(session()->has('success'))
                </div>
                    {{ session('success')}}
                </div>
            @endif
        </div>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">Lp.</th>
                <th scope="col">Nazwa kursu</th>
                <th scope="col">Data</th>
                <th scope="col">Godzina</th>
                <th scope="col">Edycja</th>
                <th scope="col">Usuń</th>
                <th scope="col">Użytkownicy grupy</th>
                <th scope="col">Dodaj użytkownika do grupy</th>
            </tr>
            </thead>

            <tbody>
                @foreach($events as $events)
                <tr>
                    <th scope="col">{{$events->id}}</th>
                    <th scope="col">{{$events->name}}</th>
                    <th scope="col">{{$events->data}}</th>
                    <th scope="col">{{$events->time}}</th>
                    <th scope="col">
                        <a href="{{ route('events.edit',['events' => $events ])}}" class="btn btn-primary">Edycja</a>
                    </th>
                    <th scope="col">
                        <form method="post" action=" {{ route('events.destroy',[ 'events' => $events ])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Usuń" class="btn btn-danger"/>
                        </form>
                    </th>
                    <th scope="col">
                        <a class="dropdown-item" href="{{ route('group-user.show')}}">
                            <button type="button" class="btn btn-secondary">
                                Sprawdż</button></a>

                        </div>
                    </th>
                    <th scope="col">
                    <div class="col">

                        <a class="dropdown-item" href="{{ route('group-user.create')}}">
                            <button type="button" class="btn btn-success">
                                Dodaj</button></a>

                        </div>
                    </th>
                </tr>
                @endforeach()

            </tbody>
        </table>
    </div>
</body>

@endsection
