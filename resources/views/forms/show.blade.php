@extends('layouts.app')
@section('title')
    List Post
@endsection

@section('content')
    <label for="">Заголовок</label><br>
    {{$form->title}}<br>
    <hr>
    <label for="">Описание</label><br>
    {{$form->description}}<br>

    <form action="{{route('forms.index')}}" method="">
        <input class="btn btn-outline-primary" type="submit" value="Back">
    </form>

@endsection
