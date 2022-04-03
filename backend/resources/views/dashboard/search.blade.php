@extends('layout.main')
@section('main-container')
    <style>

    </style>
    <div  class="table-today">
        <h1>Search result`s :</h1>
        @if (count($data)<1)
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
                                <td><a style="text-decoration: none" href="{{route('stuAd',[$random_string,$item['student_id'],$item['name']])}}">Attendance</a></td>
                            </tr>
                        @endforeach
                    
              
            </table>

        @endif
        
    </div>
@endsection
