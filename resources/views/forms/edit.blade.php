@extends('layouts.app')
@section('title')
    Edit Form
@endsection
@section('content')
    <form class="form-control" action="{{route('forms.update',$form )}}" method="post">
        @csrf
        @method('put')
        <label for="">Заголовок</label> <br>
        <input class="form-control" type="text" value="{{$form->title}}" name="title" id=""><br>

        <label for="">Описание</label><br>
        <input class="form-control" type="text" name="description" value="{{$form->description}}" id="">
<hr>
        <div style="display: flex; justify-content: center; align-items: center;">
            <label for="">Активно</label><br>
            <input class="form-control" name="start_time" type="datetime-local" value="{{$form->start_time}}"> До <input class="form-control" name="start_time" type="datetime-local" value="{{$form->end_time}}"><br><br>
        </div>

        <br>

        <input class="btn btn-outline-primary" type="submit" value="Сохранить">

    </form>
@endsection
