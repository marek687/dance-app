@extends('layouts.app')

@section('events')


@foreach($users as $user)
<p>{{ $user-> name }}</p>
<p>{{ $user-> phone_number }}</p>

    @foreach($user->groups as $group)
    <p>{{ $group-> level  }}</p>
    @endforeach


@endforeach

@endsection

