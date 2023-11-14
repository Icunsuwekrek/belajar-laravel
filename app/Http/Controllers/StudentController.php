<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Support\Facades\File;
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
        $validate = $request->validate([
            'name'=>'required',
            'gender'=>'in:L,P',
            'NIS' => 'required|max:10'
        ]);
        if ($request->file('photo')) {
            // $input = $request->all();
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
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
    // public function showedit(){
    //     return view('students.edit');
    // }
    public function update(Request $request, $id)
    {
        $student = student::find($id);
        // $input = $request->all();
        $validate = $request->validate([
            'name'=>'required',
            'gender'=>'in:L,P',
            'NIS' => 'required|max:10'
        ]);

        if ($request->file('image')->isValid()) {
            $oldImage = $student->image;

            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '.' . $ext;
            $upload = $request->image->move(public_path() . '/storage/photo', $newFileName);

            // $student->image = $nsewFileName;
            // $student->save();

            if ($upload) {
                $delete = File::delete(public_path() . '/storage/photo/' . $oldImage);
                $student->update($request->except('image') + ['image' => $newFileName]);
            }
        }

        return redirect('student')->with('flash_message', 'student Updated!');
    }
    public function destroy($id)
    {   $student = student::find($id);
        $oldImage = $student->image;
        $delete = File::delete(public_path() . '/storage/photo/' . $oldImage);
        if ($delete) {
            student::destroy($id);
        }
      
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
