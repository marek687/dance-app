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

<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
      <form action="{{ route('events.store') }}" method="post" class="form">
        @csrf
        @method('post')
        <div class="formbold-mb-5">
          <label for="name" class="formbold-form-label"> Nazwa kursu </label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Nazwa kursu"
            class="formbold-form-input"
          />
        </div>

        <div class="flex flex-wrap formbold--mx-3">
            <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5 w-full">
                <label for="data" class="formbold-form-label"> Data </label>
                <input
                    type="date"
                    name="data"
                    id="data"
                    class="formbold-form-input"
                />
                </div>
            </div>

            <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                <label for="time" class="formbold-form-label"> Czas </label>
                <input
                    type="time"
                    name="time"
                    id="time"
                    class="formbold-form-input"
                />
                </div>
            </div>
        </div>

        <div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('events.index')}}">
                        <button type="submit" class="btn btn-primary">Zapisz wydarzenie</button>
                    </a>
                  </div>
                  <div class="col ">
                    <a href="{{ route('events.index')}}">
                        <button type="button" class="btn btn-primary">Powrót</button>
                    </a>
                  </div>
            </div>
        </div>

      </form>
    </div>
