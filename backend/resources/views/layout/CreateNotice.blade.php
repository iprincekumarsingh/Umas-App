@extends('layout.main')
@section('main-container')
    <style>
        button {
            font-size: 19px;
        }

        textarea {
            /* padding: 5px; */
        }

        .status {
            background: green;
            color: white;
            padding: 10px 50px;
            font-size: 18px;
        }

        input {

            /* background: red; */
            padding: 10px 30px;
            border: 1px solid grey;
            margin: 5px;
            border-radius: 5px;
        }

    </style>

    <div class="c-notice">
        @if (session()->has('status'))
            <div class="status">
                {{ session('status') }}

            </div>
        @endif
        <form action="{{ route('news.create') }}" method="post">
            @csrf
            <input type="text" name="title" placeholder="Notice title" id="">
            <textarea style="resize:none;width:100%;" placeholder="Post a notice...." wrap="" class="notice" name="notice"
                id="" cols="30" rows="10"></textarea>
            <input style="background: blueviolet" type="submit" value="Post">
        </form>
    </div>
    <div style="display: " class="table-today">

        <table>
            <tr>
                <th>title</th>
                <th>Notice</th>
                <th>Issued Date</th>
                <th>Delete</th>

            </tr>

            @foreach ($news as $notice)
                <tr>
                    <td>{{ $notice['title'] }}</td>

                    <td>{{ $notice['notice'] }}</td>
                    <td>{{ date_format($notice['created_at'], 'Y-m-d ') }}</td>
                    <td>
                        <form action="{{ url('noticedelete') }}/{{ $notice['notice_id'] }}" method="post">
                            @csrf
                            <input style="background:red" type="submit" name="delete" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach


        </table>






    </div>
@endsection
