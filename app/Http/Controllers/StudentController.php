<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
         return view('create');
    }

   
    public function store(Request $request)
    {
        //
        
        $req=new student;
        $req->firstname=$request->input('firstname');
        $req->lastname=$request->input('lastname');
        $req->sem=$request->input('sem');
        $req->address=$request->input('address');
        $req->save();
       return redirect('view');
        
        //return view('view');
 
    }

   
    public function show(Student $student)
    {
        //
        return view('view')->with('array',student::all());
    }

    public function edit(Student $student,$id)
    {
        //
        return view('edit')->with('array',student::find($id));  


    }

   
    public function update(Request $request, Student $student,$id)
    {
        $req=student::find($id);
        $req->firstname=$request->input('firstname');
        $req->lastname=$request->input('lastname');
        $req->sem=$request->input('sem');
        $req->address=$request->input('address');
        $req->update();
       return redirect('view');
        //

    }

   
    public function destroy(Student $student,$id)
    {
        //
        student::destroy(array('id',$id));
        return redirect('view');
    }
}
