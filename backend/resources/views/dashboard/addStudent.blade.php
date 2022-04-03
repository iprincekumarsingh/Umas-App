@extends('layout.main')
@section('main-container')
<div class="">
    @if (session()->has('msg'))
        {{ session('msg') }}
    @endif()

</div>
    <div class="form add">
        <form action="{{route('add-student-data')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Student Name" id="">
            <input type="tel" name="phone" placeholder="Student Phone no" id="">
            <input type="text" name="email" placeholder="Student Email" id="">
            <input type="text" name="sid" placeholder="Student Registraion Number" id="">
            <input type="text" name="branch" placeholder="Branch" id="">
            <input type="text" name="sec" placeholder="Section" id="">
            {{-- <div class="custom-select"> --}}
                <select class="adyear" name="" id="">
                    <option value="">Select Year</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            {{-- </div> --}}
            <select name="cyear" id="">
                <option value="">Current Year</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>

            </select>
            <select name="lyear" id="">
                <option value="">Year Till</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
            </select>
            <div class="" style="display: flex;flex-direction:column;width:100px">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" placeholder="Student Date of birth" id="">
            </div>
            <input type="text" name="pass" placeholder="Default Password" id="">
            <br>
            <button type="submit" style="margin: 10px">Add</button>
        </form>
    </div>
@endsection
