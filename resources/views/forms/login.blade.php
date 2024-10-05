@extends('layout.app')
@section('title')
    Forms Log in
@endsection
@section('content')


    <div class="container-fluid">
        <h2>Регистрация</h2>
        <form class="form-control" action="" method="post">
            <label for="name">Имя</label>
            <input class="form-control" type="text" id="" name="name" required>

            <label for="email">Email</label>
            <input class="form-control" type="email" id="" name="email" required>

            <label for="password">Пароль</label>
            <input class="form-control" type="password" id="" name="password" required>
            <br>
            <input class="btn btn-outline-primary" type="submit" value="Зарегистрироваться">
        </form>

        <div>
            Уже есть аккаунт? <a href="" onclick="toggleForms()">Войти</a>
        </div>
    </div>

    <div class="container" style="display:none;">
        <h2>Вход</h2>
        <form >
            <label for="email">Email</label>
            <input type="email" id="" name="email" required>

            <label for="password">Пароль</label>
            <input type="password" id="" name="password" required>

            <input type="submit" value="Войти">
        </form>

        <div class="navbar-toggler">
            Нет аккаунта? <a href="#" onclick="toggleForms()">Зарегистрироваться</a>
        </div>
    </div>

    <script>
        function toggleForms() {
            const registerForm = document.querySelector('.container');
            const loginForm = document.getElementById('login-container');
            if (registerForm.style.display === "none") {
                registerForm.style.display = "block";
                loginForm.style.display = "none";
            } else {
                registerForm.style.display = "none";
                loginForm.style.display = "block";
            }
        }
    </script>


@endsection
