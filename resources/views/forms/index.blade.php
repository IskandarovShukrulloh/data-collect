@extends('layouts.app')
@section('title')
    Form Index
@endsection

@section('content')

    <table class="table" border="1">
        <tr>
            <th>#</th>
            <th>Заголовок</th>
            <th>Описание</th>
            <th>Автор</th> {{-- name from user id --}}
            <th colspan="2">Активно</th>
            <th>Создано</th>
            <th>Обновлено</th>
            <th>Изменить</th>
            <th>Показать</th>
            <th>Удалить</th>
        </tr>

        @foreach($forms as $form)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$form->title}}</td>
                <td>{{$form->description}}</td>
                <td>Author</td>{{--{{$form-user_id}}--}}
                <td>{{$form->start_time}}</td>
                <td>{{$form->end_time}}</td>
                <td>{{$form->created_at}}</td>
                <td>{{$form->updated_at}}</td>

                <td>
                    <form action="{{route('forms.edit', $form)}}" method="get">
                        @csrf
                        @method('get')
                        <input class = "btn btn-outline-success" type="submit" value="Изменить">
                    </form>
                </td>

                <td>
                    <form action="{{route('forms.show', $form)}}" method="post">
                        @csrf
                        @method('get')
                        <input class = "btn btn-outline-warning" type="submit" value="Показать">
                    </form>
                </td>

                <td>
                    <form action="{{route('forms.destroy', $form)}}" method="post">
                        @csrf
                        @method('delete')
                        <input class = "btn btn-outline-danger" type="submit" value="Удалить">
                    </form>
                </td>

            </tr>

        @endforeach
    </table>


    <br>
    <div class="container-fluid">
        <form action="{{route('forms.create')}}" method="">
            <input class = "btn btn-outline-primary" type="submit" value="Добавить">
        </form>
    </div>

@endsection
