<?php

namespace App\Http\Controllers;

use App\Models\student;
use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class StudentController extends Controller
{
    public function index()
    {
        $nama = "Ichsan";
        // eloquent orm (rekom)
        // query builder
        // raw querry
        $student = student::all();
        return view('students.student')->with('student', $student);
    }

    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $newName = '';

        if($request->file('photo')){
        // $input = $request->all();
        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
        $request->file('photo')->storeAs('photo', $newName);
    }
        $request['image'] = $newName;
        $student = student::create($request->all());
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    public function show($id)
    {
        $student = student::find($id);
        return view('students.show')->with('student', $student);
    }

    public function edit($id)
    {
        $student = student::find($id);
        return view('students.edit')->with('student', $student);
    }
    // public function showedit($id)
    // {
    //     return view('students.show');
    // }
    public function update(Request $request, $id)
    {
        $student = student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');
    }
    public function destroy($id)
    {
        student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
