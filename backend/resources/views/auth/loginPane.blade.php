<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/theme.css') }}">
</head>
<style>
</style>
<body>
    <div class=""></div>
    <div class="screenChooser">
        <h1>Student Login</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="">
                <input type="text" name="id_student" placeholder="Student Id">
            </div>
            <div class="">
                <input type="text" name="password" placeholder="Password">
            </div>

            <button type="submit">Login</button>
            <div class="">
                @if (session()->has('msg'))
                    {{ session('msg') }}
                @endif()

            </div>

        </form>
    </div>
</body>

</html>
