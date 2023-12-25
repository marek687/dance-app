@extends('layouts.app')

@section('events')

<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
      <form action="{{ route('events.update', ['events' => $events ]) }}" method="post" class="form">
        @csrf
        @method('put')
        <div class="formbold-mb-5">
          <label for="name" class="formbold-form-label"> Nazwa kursu </label>
          <input
            value="{{ $events->name}}"
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
                    value="{{ $events->data}}"
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
                value="{{ $events->time}}"
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
                        <button type="submit" class="btn btn-primary">Zmiana danych</button>
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


@endsection

