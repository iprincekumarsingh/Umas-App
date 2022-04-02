@extends('layout.main')
@section('main-container')
    @if (session()->has('role') == 'admin')
        <style>
            .sm:items-center {
                display: none;
            }

            .w-5 {
                display: none;
            }

        </style>
        <div class="table-today">

            <table>
                <tr>
                    {{-- <th>Sr no</th> --}}
                    <th>Name</th>
                    <th>Regd no</th>
                    <th>Section</th>
                    <th>Branch</th>
                    <th>Approve</th>
                    <th>Date</th>
                </tr>
                <?php
                $count = 0;
                ?>
                @foreach ($data as $item)
                    <?php
                    $count = $count + 1;
                    ?>
                    <tr>
                        {{-- <td>{{$count}}</td> --}}
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['stu_RegistrationNumber'] }}</td>
                        <td>{{ $item['section'] }}</td>
                        <td>{{ $item['branch'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        {{-- <td>{{$item['dob']}}</td> --}}
                        <td>{{ $item['created_at'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif
    <div class="table-today">
        <table>
            <tr>

                <th>
                    Date
                </th>
                <th>
                    Action
                </th>
            </tr>
            <tr>

                <td>
                    {{ now()->format('d M Y') }}
                </td>
                <td>    
                    <form class="ad" action="{{ route('student.adSubmit') }}" method="post">
                        @csrf
                        @if (session()->has('status')==null){
                            <input type="submit" value="Attendance Submitted" name="ad">
                        }
                        @elseif
                        {

                        }
                        @else
                        <input type="submit" value="Submit  Attendance" name="ad">
                            
                        @endif
                           
                           
                    </form>
                </td>
            </tr>
        </table>
    </div>
@endsection
