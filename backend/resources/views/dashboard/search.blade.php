@extends('layout.main')
@section('main-container')
    <style>
        .filter {
            padding: 10px;
        }

        .filter select {
            width: 300px;
            /* height: 10px; */
        }

        .filter select::after {
            width: 300px;
            height: 300px;
        }

        .filter input {
            width: 100px;
            /* padding: 8px 30px;
                                    background: blueviolet;
                                    outline: none;
                                    border: none;
                                    color: white;
                                    font-size: 18px;
                                    border-radius: 10px; */
        }

    </style>
    <div class="table-today">
        @if (isset($data))
            <h1>Search result`s :</h1>

            @if (count($data) < 1)
                <h1>No Student Data found</h1>
            @else
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Regd no</th>
                        <th>Branch</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $random_string = md5(microtime());
                    ?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['stu_RegistrationNumber'] }}</td>
                            <td>{{ $item['branch'] }}</td>
                            {{-- <td>{{ $item['status'] }}</td> --}}
                            <td><a style="text-decoration: none"
                                    href="{{ route('stuAd', [$random_string, $item['student_id'], $item['name']]) }}">Attendance</a>
                            </td>
                        </tr>
                    @endforeach


                </table>
            @endif
        @else
            <div class="filter">
                <form action="{{ route('stu.filter.branch') }}" method="post">
                    @csrf
                    <label for="">Select Branch</label>
                    <select name="branch" id="">
                        <option value="BCA">BCA</option>
                        <option value="BTECH">BTECH</option>
                        <option value="MCA">MCA</option>

                    </select>
                    <input type="submit" value="Filter">
                </form>
            </div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Regd no</th>
                    <th>Branch</th>
                    <th>Attendance</th>
                    <th>Profile</th>
                </tr>
                <?php
                $random_string = md5(microtime());
                ?>
                @if (isset($stuData))
                    @foreach ($stuData as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['stu_RegistrationNumber'] }}</td>
                            <td>{{ $item['branch'] }}</td>
                            {{-- <td>{{ $item['status'] }}</td> --}}
                            <td><a style="text-decoration: none"
                                    href="{{ route('stuAd', [$random_string, $item['student_id'], $item['name']]) }}">Attendance</a>
                            </td>
                            <td><a style="text-decoration: none"
                                    href="{{ url('profile', [$item['student_id']]) }}">Profile</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    @foreach ($stufilter as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['stu_RegistrationNumber'] }}</td>
                            <td>{{ $item['branch'] }}</td>
                            {{-- <td>{{ $item['status'] }}</td> --}}
                            <td><a style="text-decoration: none"
                                    href="{{ route('stuAd', [$random_string, $item['student_id'], $item['name']]) }}">Attendance</a>
                            </td>
                            <td><a style="text-decoration: none"
                                href="{{ url('profile', [$item['student_id']]) }}">Profile</a>
                        </td>
                        </tr>
                    @endforeach
                @endif

            </table>
        @endif
    </div>
@endsection
