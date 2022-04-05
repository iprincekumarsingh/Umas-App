@extends('../layout.main')
@section('main-container')
    <div style="display: none" class="table-today">
        @isset($data)
            <table>
                <tr>
                    <th>Name</th>
                    <th>Regd no</th>
                    <th>Section</th>
                    <th>Branch</th>
                    <th>Approve</th>
                    <th>Date</th>
                </tr>

                @if (session()->has('role') == 'admin')
                    {}
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['stu_RegistrationNumber'] }}</td>
                            <td>{{ $item['section'] }}</td>
                            <td>{{ $item['branch'] }}</td>
                            <td>{{ $item['status'] }}</td>
                            <td>{{ $item['dob'] }}</td>
                            <td>{{ $item['created_at'] }}</td>
                        </tr>
                    @endforeach
                @else
                @endif

            </table>
        @endisset
        @isset($data)
            <table>
                <tr>
                    <th>Name</th>
                    <th>Regd no</th>
                    <th>Section</th>
                    <th>Branch</th>
                    <th>Approve</th>
                    <th>Date</th>
                </tr>

                @if (session()->has('role') == 'admin')
                    {}
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['stu_RegistrationNumber'] }}</td>
                            <td>{{ $item['section'] }}</td>
                            <td>{{ $item['branch'] }}</td>
                            <td>{{ $item['status'] }}</td>
                            <td>{{ $item['dob'] }}</td>
                            <td>{{ $item['created_at'] }}</td>
                        </tr>
                    @endforeach
                @else
                @endif

            </table>
        @endisset

      



    </div>

@endsection
