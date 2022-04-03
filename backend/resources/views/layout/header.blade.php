<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/theme.css') }}">
    <style>
        .body {
            background: white;
        }

        .logo {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

    </style>
</head>

<body>
    <header>
        <div class="logo">
            UMAS
        </div>
        <nav>
            <ul>
                @if (session()->has('role') == 'admin')
                    <li>
                        <form action="" method="post">
                            <input type="text" name="" placeholder="Search Student" id="">
                        </form>
                    </li>
                    <li> <a href="{{ url('/') }}">Dashboard</a></li>
                    <li><a href="">Profile</a></li>
                @else
                    <li><a href="">Profile</a></li>
                    <li><a href="">Attendance</a></li>
                @endif
                <li>
                    <a href="{{ url('/logout') }}">Logout</a>
                </li>
            </ul>



        </nav>
    </header>
