@extends('layout.layout')
@section('header')
@parent
@stop
@section('content')
    <div style="text-align: center;" class="col-lg-4 col-lg-offset-4">
        <div class="list-group">
            <a href="#" class="list-group-item active">Cursos </a>
            <ul>
             @forelse($courses as $c)
                 <li>{{HTML::linkAction('HomeController@showCourse', $c->fullname, array($c->id))}}</li>
             @empty
                 <div class="alert alert-dismissable alert-danger">
                 <strong>No estas activo en ningun curso</strong>
                 </div>
             @endforelse
             </ul>
         </div>
    </div>
@stop
