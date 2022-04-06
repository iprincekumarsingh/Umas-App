@extends('layout.main')
@section('main-container')
    <div style="display: block" class="table-today">

        @if (count($studentPAttendance)>0)
            <table>

                <div style="margin-top: 5px" class="">
                    Student name - {{ session('name') }}
                </div>
                @if (session()->has('isLoggedIn') != 'admin')
                    <tr>
                        <th>Reg no</th>
                        <th>Attendance Date</th>
                    </tr>
                @else
                    <tr>
                        <th>Name</th>
                        <th>Regd No</th>
                        <th>Branch</th>
                        <th>Section</th>
                        <th>Attendance Date</th>
                    </tr>
                @endif



                @if (session()->has('isLoggedIn') != 'admin')
                    @foreach ($studentPAttendance as $item)
                        <tr>
                            <td>{{ $item['stu_RegistrationNumber'] }}</td>
                            <td>{{ $item['dob'] }}</td>
                        </tr>
                    @endforeach
                @else
                    @foreach ($studentPAttendance as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['stu_RegistrationNumber'] }}</td>
                            <td>{{ $item['branch'] }}</td>
                            <td>{{ $item['section'] }}</td>
                            <td>{{ $item['dob'] }}</td>
                        </tr>
                    @endforeach
                @endif

            </table>
        @else
            <h1>No Attendance Found </h1>
        @endif

    </div>
@endsection
