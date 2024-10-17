@extends('layouts.app')
@section('title')
    Create Form
@endsection
@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-control" action="{{route('forms.store')}}" method="post">
        @csrf
        <label>Заголовок</label>
        <input class="form-control" type="text" name="title" id="">
        <label for="">Описание</label> <br>
        <input class="form-control" type="text" name="description" id=""><br>
        <div style="display: flex; justify-content: center; align-items: center;">
            <label for="">Активно</label><br>
            <input class="form-control" name="start_time" type="datetime-local"> До <input class="form-control" name="start_time" type="datetime-local"><br><br>
        </div>
        <input class="btn btn-outline-primary" type="submit" value="Save">
    </form>
@endsection
