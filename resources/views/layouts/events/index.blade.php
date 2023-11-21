<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('action/set.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <a class="dropdown-item" href="{{ route('events.index')}}">Wydarzenie</a>

                        </div>

                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>
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
                </tr>
                @endforeach()

            </tbody>
        </table>
    </div>
</body>
