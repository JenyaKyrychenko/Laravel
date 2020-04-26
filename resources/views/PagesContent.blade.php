@extends('layouts.Pages')

@section('content')
    @if($content==null)
        <p align="center">Выберите категорию</p>
    @else
        @foreach($content as $c)
            <h1 align="center">{{$c->caption}}</h1>
            <p align="center">{{$c->content}}</p>
        @endforeach


    @endif
@endsection