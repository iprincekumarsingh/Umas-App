@extends('layout.main')
@section('main-container')
    <div style="display: block" class="table-today">

        <table>
            <div style="margin-top: 5px" class="">
                Student name - {{ session('name') }}
            </div>
            <tr>
                <th>Reg no</th>
                <th>Attendance Date</th>
            </tr>

            @if (session()->has('role') != 'admin')
                @foreach ($studentPAttendance as $item)
                    <tr>
                        <td>{{ $item['stu_RegistrationNumber'] }}</td>
                        <td>{{ $item['dob'] }}</td>
                    </tr>
                @endforeach
            @else
            @endif

        </table>
    </div>
@endsection
