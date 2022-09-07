@extends('layouts.master')
@section('title', 'create')
<body class="">
    @section('content')
     <div class="container">
     <form class="mt-5" method="post" action="{{ URL('admin/store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group ml-5 mr-5">
               <label for="first_name">First Name</label>
               <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1" placeholder="Firstname" required>
            </div>
            <div class="form-group ml-5 mr-5">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="exampleFormControlInput2" placeholder="Lastname" required>
             </div>
            <div class="form-group ml-5 mr-5 ">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleFormControlInput4" placeholder="email" required>
            </div>
            <label for="gender" class="ml-5 mr-5">Gender</label>
            <div class="form-check ml-5 mr-5">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male" required>
                <label  class="form-check-label" for="gender">
                  Male
                </label>
              </div>
              <div class="form-check ml-5 mr-5 ">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" required>
                <label  class="form-check-label" for="gender">
                  Female
                </label>
              </div>
            <div class="form-group ml-5 mr-5">
              <label for="qualifications">Qualification</label>
              <select name="qualifications" class="form-control" id="exampleFormControlSelect1" required>
                <option>BE</option>
                <option>ME</option>
                <option>B.Tech</option>
              </select>
            </div>
            <div class="form-group ml-5 mr-5">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" required>
            </div>
            <button type="submit" class="btn btn-info ml-5" style="margin-top:12px"> insert</button>
          </form>
        </div>
        @endsection
</body>
</html>