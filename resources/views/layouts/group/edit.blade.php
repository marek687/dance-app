@extends('layouts.app')

@section('events')

<body>
    <div class="formbold-main-wrapper">

        <div class="formbold-form-wrapper">
    <h3 class="text-center pt-1">Edycja grupy</h3>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        <form action="{{ route('group.update', ['group' => $group ]) }}" method="post" class="form">
            @csrf
            @method('put')
            <div class="formbold-mb-5">
              <label for="name" class="formbold-form-label"> Nazwa Grupy</label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Nazwa grupy"
                class="formbold-form-input"
                value="{{$group->name}}"
              />
            </div>

            <div class="flex flex-wrap formbold--mx-3">
                <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5 w-full">
                    <label for="data" class="formbold-form-label">Poziom grupy</label>
                    <input
                        type="text"
                        name="level"
                        id="level"
                        class="formbold-form-input"
                        value="{{$group->level}}"
                    />
                    </div>
                </div>

                <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                    <label for="time" class="formbold-form-label">Opis</label>
                    <input
                        type="text"
                        name="description"
                        id="description"
                        class="formbold-form-input"
                        value="{{$group->description}}"
                    />
                    </div>



                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="{{ route('group.index')}}">
                        <button type="submit" class="btn btn-primary">Edycja grupy</button>
                    </a>

                  </div>
                  <div class="col ">
                    <a href="{{ route('group.index')}}">
                        <button type="button" class="btn btn-primary">Powrót</button>
                    </a>
                  </div>
            </div>

        </div>
    </div>


    </form>
</div>
</body>

@endsection
