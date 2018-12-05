@extends('layout')

@section('title','index')

@section('content')

    <h1>index</h1>

    @foreach ($projects as $project)
    <li>{{ $project->score }}</li>
    @endforeach

@endsection
