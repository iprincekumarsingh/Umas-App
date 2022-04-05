@extends('layout.main')
@section('main-container')
    @foreach ($data as $profile_data )
    <?php
        $name=$profile_data['name'];
        $phone=$profile_data['stu_phone'];
        $email=$profile_data['stu_email'];
        $branch=$profile_data['branch'];
        $regdno=$profile_data['stu_RegistrationNumber'];
        $section =$profile_data['section'];
        $ayear=$profile_data['year_from'];
        $dob=$profile_data['stu_dob']
    ?>
   
    @endforeach
    <div class="profile">
        <div class="profile-img">
            <img src="{} alt="">
                                </div>
                                <div class="       profile-inf">
            <form action="" method="post">
                <div class="form-f">


                    <div class="p-lable">
                        <label class="" for="">Name</label>
                        <div class="inp-data">
                            <input disabled type="text" name="" value="{{$name}}" id="">
                        </div>
                    </div>

                    <div class="p-lable">
                        <label class="" for="">Phone Number
                            <div class="inp-data">
                                <input type="text" name="" value="{{$phone}}" id="">
                            </div>
                    </div>

                    <div class="p-lable">
                        <label class="" for="">Email</label>
                        <div class="inp-data">
                            <input type="text" name="" value="{{$email}}" id="">
                        </div>
                    </div>
                    <div class="p-lable">
                        <label class="" for="">Registration Number</label>
                        <div class="inp-data">
                            <input type="text" name="" value="{{$regdno}}" id="">
                        </div>

                    </div>
                    <div class="p-lable">
                        <label class="" for="">Branch</label>
                        <div class="inp-data">
                            <input type="text" name="" value="{{$branch}}" id="">
                        </div>

                    </div>
                    <div class="p-lable">
                        <label class="" for="">Section</label>
                        <div class="inp-data">
                            <input type="text" name="" value="{{$section}}" id="">
                        </div>

                    </div>

                    <div class="p-lable">
                        <label class="" for="">Admission Year</label>
                        <div class="inp-data">
                            <input type="text" name="" value="{{$ayear}}" id="">
                        </div>

                    </div>
                    <div class="p-lable">
                        <label class="" for="">D.O.B</label>
                        <div class="inp-data">
                            <input type="text" name="" value="{{$dob}}" id="">
                        </div>

                    </div>
                    
                </div>
                <label class="" for=""></label>
                <div class="inp-data btn-save">
                    <input style="text-align: center" type="submit" name="" value="Save" id="">
                </div>
                
        </div>

        </form>

    </div>

    </div>
@endsection
