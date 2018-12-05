@extends('layout')

@section('title','Leaderbord')

@section('content')

    <h1>Leaderbord</h1>

    <ul>
        @foreach($scores as $score)
            <li>{{ $score }} </li>
        @endforeach
    </ul>

@endsection

