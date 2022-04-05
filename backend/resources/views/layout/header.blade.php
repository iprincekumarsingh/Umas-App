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


        @if (session()->has('role') == 'admin')
            <a style="text-decoration: none" href="{{ url('/user') }}">
                <div style="font-size: 34px" class="logo">
                    Admin UMAS
                </div>
            @else
            <a style="text-decoration: none" href="{{ url('/user') }}">

                <div style="font-size: 34px" class="logo">
                    UMAS
                </div>
            </a>
        @endif

        
        @if (session()->has('isLoggedIn'))
        <nav>
            <ul>
                @if (session()->has('role') == 'admin')
                    <li>
                        <form action="{{ route('student.search') }}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Search Student" id="">
                        </form>
                    </li>
                    <li> <a href="{{ url('/user') }}">Dashboard</a></li>
                    <li> <a href="{{ route('create.notice') }}">Create Notice</a></li>
                    <li><a href="">Profile</a></li>

                @else
                    <li><a href="{{ url('profile') }}">Assignment</a></li>
                    <li><a href="{{ url('/student') }}">Attendance</a></li>
                    <li><a href="{{ url('/notice') }}">Notices</a></li>
                    <li ><a href="{{ url('profile') }}">Profile</a></li>
                @endif
                <li>
                    <a href="{{ url('/logout') }}">Logout</a>
                </li>
            </ul>



        </nav>
        @else
        <h2>Notice Board</h2>
        @endif
        
    </header>
