<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/theme.css')}}">
  
</head>
<body>
    <header>
        <div class="logo">
            Logo
        </div>
        <nav>
            <ul>
                <li>
                    <a href="">Dashboard</a>
                    @if (session()->has('role')=='admin'))
                    <a href="">Regisetred-Student</a>
                    <a href="">Registred-Faculty</a>
                    <a href="">Profile</a>  
                    @endif
                    <a href="">Attendance</a>
                  
                </li>
            </ul>
        </nav>
    </header>
    
