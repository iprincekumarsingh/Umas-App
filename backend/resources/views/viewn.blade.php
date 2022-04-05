@extends('layout.main')
@section('main-container')
    @foreach ($newsm as $msg)
        <h1>Notice:{{ $msg['title'] }}</h1>
        <h4>Date : <td>{{ date_format($msg['created_at'], 'Y-m-d ') }}</td>
        </h4>
        <pre style="text-decoration: underline">{{ $msg['notice'] }}</pre>
    @endforeach
@endsection
