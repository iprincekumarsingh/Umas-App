<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/theme.css') }}">
</head>

<body>
    <div class="screenChooser">
        <h1>Admin Login</h1>

        <form action="{{ route('admin.login.check') }}" method="post">
            @csrf
            <div class="">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="">
                <input type="text" name="password" placeholder="Password">
            </div>
            <button type="submit">Login</button>
            @if (session()->has('msg'))
            <p class="error">
                {{ session('msg') }} 
            </p>
        @endif

        </form>

    </div>
</body>

</html>
