@extends('layout')

@section('title','index')

@section('content')

    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>

    <h1>create project</h1>

    {{Form::open(['action' => "/projects" ])}}}
    <div>
        <input type="int" name="score" placeholder="User Score">
    </div>

    <select action="/dynamic_dependent">
        <option value="user">Select user </option>



    </select>


    <div>
        <button type="submit"> Sla Score op </button>

    </div>
    {{Form::close()}}
    <form method="POST" action="/projects">

        {{ csrf_field() }}

        <div>
            <input type="int" name="score" placeholder="User Score">
        </div>

        <select action="/dynamic_dependent">
            <option value="user">Select user </option>



        </select>


        <div>
            <button type="submit"> Sla Score op </button>

        </div>
    </form>


@endsection
