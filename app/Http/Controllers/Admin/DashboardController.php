<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MOdels\student;

class DashboardController extends Controller
{
public function index()
{
   $crud = student::all();
   return view ('admin.dashboard' , compact('crud'));
   
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('admin.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $crud = new student; 
    $crud->first_name =  $request->get('first_name'); 
    $crud->last_name = $request->get('last_name');
    $crud->email = $request->get('email'); 
    $crud->gender = $request->get('gender');  
    $crud->qualifications = $request->get('qualifications'); 
    if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $image_path =$image->storeAs('uploads',$image_name, 'public');
        $path = "/storage/".$image_path;       
    } 
    $crud->image = $path;
    $crud->save();
    
    return redirect('admin/dashboard');
}



/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $crud= student::find($id);
    return view('admin/edit', compact('crud'));
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $crud = student::findOrFail($id); 
    $crud->first_name =  $request->first_name;  
    $crud->last_name = $request->last_name;
    $crud->email = $request->email; 
    $crud->gender = $request->gender;  
    $crud->qualifications = $request->qualifications;
    
    if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $image_path =$image->storeAs('uploads',$image_name, 'public');
        $path = "/storage/".$image_path;
        $crud->image=$path;      
    } 
   
    $crud->update();

    return redirect('admin/dashboard');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $crud=student::find($id);  
    $crud->delete(); 
    return redirect('admin/dashboard'); 
}
}
