@if (session('role') != 'admin' && session()->has('isLoggedIn') == 1)
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
                    @if (session('isSubmitted') == 1)
                        Attendance submitted
                        {{-- <td style="background: grey">Attendance submitted</td> --}}
                    @elseif (session('isSubmitted') == 0)
                        <input type="submit" value="Submit Attendance">
                    @endif

                </form>
            </td>
        </tr>
    </table>
</div>
@endif