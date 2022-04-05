@extends('layout.main')
@section('main-container')
    <style>
        .notice {
            box-sizing: border-box;
            padding: 10px;
            display: flex;
            flex-direction: column;

        }

        .notice .notice-box {
            display: flex;
            padding: 5px;
            justify-content: space-between;
            align-content: center;
            align-items: center;
            border-bottom: 1px solid black;

        }

        .notice .notice-box .msg {
            margin-left: 10px;
            padding: 10px;
        }

        .notice .notice-box .msgcheck {
            justify-content: flex-end;
        }
        .status {
            background: yellow;
            color: black;
            padding: 10px 50px;
            font-size: 18px;
        }


    </style>
    <h3>X University Notice Panel</h3>
    <hr>
    <div class="notice">
        @if (session()->has('status'))
        <div class="status">
                {{ session('status') }}
    
            </div>
        @endif
        @foreach ($news as $new)
            <div class="notice-box">
                <div class="date">
                    <label for="">Date: </label>
                    {{ $new['created_at'] }}
                </div>
                <div class="msg">
                   
                    {{ $new['title'] }}
                </div>
                <div class="btn msgcheck">
                    <a href="{{url('xnotice')}}/{{$new['notice_id']}}">View Notice</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
