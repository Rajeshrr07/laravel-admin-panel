@extends('layouts.master')
@section('title')  
  Edit Page
 @endsection

 @section('content') 

 <form class="mt-5" method="post" action="{{ URL('admin/update',$crud->id) }}"  enctype="multipart/form-data">
            @method('PUT')    
            @csrf
            <div class="form-group ml-5 mr-5">
               <label for="first_name">First Name</label>
               <input type="text" name="first_name" class="form-control"  value={{$crud->first_name}} id="exampleFormControlInput1" placeholder="Firstname" >
            </div>
            <div class="form-group ml-5 mr-5">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control"  value={{$crud->last_name}} id="exampleFormControlInput2" placeholder="Lastname" >
             </div>
            <div class="form-group ml-5 mr-5 ">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" name="email" class="form-control"  value={{$crud->email}} id="exampleFormControlInput4" placeholder="email" >
            </div>
            <label for="gender" class="ml-5 mr-5">Gender</label>
            <div class="form-check ml-5 mr-5">
                <input class="form-check-input" type="radio" name="gender"   id="flexRadioDefault1" value="male" {{ $crud->gender == 'male' ? 'checked' : ''}} >
                <label  class="form-check-label" for="gender">
                  Male
                </label>
              </div>
              <div class="form-check ml-5 mr-5 ">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" {{ $crud->gender == 'female' ? 'checked' : ''}} >
                <label  class="form-check-label" for="gender">
                  Female
                </label>
              </div>
              <div class="form-check ml-5 mr-5 ">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="others"  {{ $crud->gender == 'others' ? 'checked' : ''}} >
                <label  class="form-check-label" for="gender">
                  others
                </label>
              </div>
            <div class="form-group ml-5 mr-5">
              <label for="qualifications">Qualification</label>
              <select name="qualifications" class="form-control" id="exampleFormControlSelect1">
                <option value="ME" {{($crud->qualifications === 'ME') ? 'Selected' : ''}}>ME</option>
                <option value="BE" {{ $crud->qualifications == 'BE' ? 'selected' : '' }}>BE</option>
                <option value="B.Tech" {{ $crud->qualifications == 'B.Tech' ? 'selected' : '' }}>B.Tech</option>
              </select>
            </div>
            <div class="form-group ml-5 mr-5">
                <label for="image">Image</label>
                <input type="file"  name="image" class="form-control-file" >
                <br>
                <br>
                <img src="{{ url($crud->image) }}" width="100" alt="" title="" />
                <br>
            </div>
            <button type="submit" class="btn btn-danger ml-5">update</button>
          </form>
 @endsection
@section('scripts')
  