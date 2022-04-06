
    @if (session()->has('role') == 'admin')
    <style>
        .sm:items-center {
            display: none;
        }

        .w-5 {
            display: none;
        }

        .box {
            display: flex;
            flex-wrap: wrap;

        }
        .box a{
            text-decoration: none;
        }

        .student-box {
            display: flex;

            margin: 5px;
            width: 359px;
            height: 137px;
            border: 1px solid blanchedalmond;
            border-radius: 10px;
            background: rebeccapurple;
            text-align: center;
            justify-content: space-between;
            color: black;
            text-decoration: none;
            font-size: 24px;
        }
        .student-box svg{
            padding: 5px;
            opacity: 0.1;
            background-position: cover;
        }
        .student-box .title{
            text-align: center;
            text-decoration: none; 
            margin: 0 auto;
            position: relative;
            top: 40%;
        }

    </style>

    <div class="box">
        <a href="{{route('add-student')}}">

       
        <div style="background: wheat" class="student-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
            <div class="title">
                Add Student
            </div>
        </div>
    </a>
    <a href="{{url('studentall')}}">

   
        <div style="background: #EDBF69" class="student-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M360 72C360 94.09 342.1 112 320 112C297.9 112 280 94.09 280 72C280 49.91 297.9 32 320 32C342.1 32 360 49.91 360 72zM104 168C104 145.9 121.9 128 144 128C166.1 128 184 145.9 184 168C184 190.1 166.1 208 144 208C121.9 208 104 190.1 104 168zM608 416C625.7 416 640 430.3 640 448C640 465.7 625.7 480 608 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H608zM456 168C456 145.9 473.9 128 496 128C518.1 128 536 145.9 536 168C536 190.1 518.1 208 496 208C473.9 208 456 190.1 456 168zM200 352C200 369.7 185.7 384 168 384H120C102.3 384 88 369.7 88 352V313.5L61.13 363.4C54.85 375 40.29 379.4 28.62 373.1C16.95 366.8 12.58 352.3 18.87 340.6L56.75 270.3C72.09 241.8 101.9 224 134.2 224H153.8C170.1 224 185.7 228.5 199.2 236.6L232.7 174.3C248.1 145.8 277.9 128 310.2 128H329.8C362.1 128 391.9 145.8 407.3 174.3L440.8 236.6C454.3 228.5 469.9 224 486.2 224H505.8C538.1 224 567.9 241.8 583.3 270.3L621.1 340.6C627.4 352.3 623 366.8 611.4 373.1C599.7 379.4 585.2 375 578.9 363.4L552 313.5V352C552 369.7 537.7 384 520 384H472C454.3 384 440 369.7 440 352V313.5L413.1 363.4C406.8 375 392.3 379.4 380.6 373.1C368.1 366.8 364.6 352.3 370.9 340.6L407.2 273.1C405.5 271.5 404 269.6 402.9 267.4L376 217.5V272C376 289.7 361.7 304 344 304H295.1C278.3 304 263.1 289.7 263.1 272V217.5L237.1 267.4C235.1 269.6 234.5 271.5 232.8 273.1L269.1 340.6C275.4 352.3 271 366.8 259.4 373.1C247.7 379.4 233.2 375 226.9 363.4L199.1 313.5L200 352z"/></svg>
            <div class="title">
            Students 
            </div>
        </div>
    </a>
    {{-- <a href="">

 
        <div style="background: #E5D68A" class="student-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 288c79.53 0 144-64.47 144-144s-64.47-144-144-144c-79.52 0-144 64.47-144 144S176.5 288 256 288zM351.1 320H160c-88.36 0-160 71.63-160 160c0 17.67 14.33 32 31.1 32H480c17.67 0 31.1-14.33 31.1-32C512 391.6 440.4 320 351.1 320z"/></svg>
            <div class="title">
                Faculties
            </div>
        </div>
    </a>
    <a href="">

    
        <div style="background:#AF9D5A" class="student-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM192 192c35.35 0 64 28.65 64 64s-28.65 64-64 64S128 291.3 128 256S156.7 192 192 192zM288 448H96c-8.836 0-16-7.164-16-16C80 387.8 115.8 352 160 352h64c44.18 0 80 35.82 80 80C304 440.8 296.8 448 288 448z"/></svg>
            <div class="title">
              Student  Attendance
            </div>
        </div>
    </a> --}}
        
       
    </div>
    

    <div style="display: none" class="table-today">

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
                    <td>{{$item['dob']}}</td>
                    <td>{{ $item['created_at'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endif