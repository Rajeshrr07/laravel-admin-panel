@extends('layouts.master')
@section('title', 'dashboard')
<!-- <style>
  form.form.mr-5,table{
    margin-left: 180px;
    margin-top: 30px;
}
</style>   -->

<body class="">
    @section('content')
    <div class="container">
        <a href="{{ url('admin/create') }}" class="btn btn-primary float-right mt-5">Create</a>
        <table class='table'>
        <thead>
                <tr>
                    <span><th>First_name</th></span>
                    <th>Last_name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Qualification</th>
                    <th>image</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody> 
                
                @foreach($crud as $std)  
                        
                            <td>{{$std->first_name}}</td>  
                            <td>{{$std->last_name}}</td>
                            <td>{{$std->email}}</td>   
                            <td>{{$std->gender}}</td>  
                            <td>{{$std->qualifications}}</td>  
                            <td><img src="{{ url($std->image) }}" width="100" alt="" title="" /></td>
                            <td>  
                               <form action="{{ url('admin/destroy', $std->id)}}" method="post">  
                                  @csrf  
                                  @method('DELETE')  
                                  <button class="btn btn-danger" type="submit">Delete</button>  
                                </form>  
                            </td>  
                            <td >  
                                <form action="{{ url('admin/edit', $std->id)}}" method="GET">  
                                  @csrf  
                                  <button class="btn btn-danger" type="submit">Edit</button>  
                                </form>  
                            </td>  
                        </tr>  
                @endforeach  
                </tbody>   
        </table>
        </div> 
    @endsection
   @section('scripts')
   @endsection  

 
</body>

</html>