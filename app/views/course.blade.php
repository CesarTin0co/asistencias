@extends('layout.layout')
@section('header')
@parent
@stop
@section('content')
    <div style="text-align: center;" class="col-lg-4 col-lg-offset-4">
        <div>
        <p>Usuarios</p>
        <pre>
        {{var_dump($users)}}
        </pre>
        </div>
    </div>
@stop