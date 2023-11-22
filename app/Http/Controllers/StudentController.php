<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Support\Facades\File;
use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $student = student::where('name', 'LIKE', '%' . $keyword . '%')
            ->orwhere('gender', $keyword)
            ->orderBy('created_at', 'desc')->paginate(4);
        return view('students.student')->with('students', $student);
    }

    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $newName = '';
        $validate = $request->validate([
            'name' => 'required',
            'gender' => 'in:L,P',
            'NIS' => 'required|integer|min_digits:6|max_digits:10',
            'image' => 'mimes: png,jpeg,jpg'
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
        $tambahan = [];
        // $input = $request->all();
        $validate = $request->validate([
            'name' => 'required',
            'gender' => 'required|in:L,P',
            'NIS' => 'required|integer|min_digits:6|max_digits:10',
            'image' => 'mimes: png,jpeg,jpg'
        ]);
        // $message = [
        //     'name' => ''
        // ]

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $oldImage = $student->image;

            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time() . '.' . $ext;
            $upload = $request->image->move(public_path() . '/storage/photo', $newFileName);

            // $student->image = $nsewFileName;
            // $student->save();

            if ($upload) {
                $delete = File::delete(public_path() . '/storage/photo/' . $oldImage);
                $tambahan = ['image' => $newFileName];
            }
        }
        $student->update($request->except('image') + $tambahan);
        return redirect('student')->with('flash_message', 'student Updated!');
    }
    public function destroy($id)
    {
        $student = student::find($id);
        $oldImage = $student->image;
        $delete = File::delete(public_path() . '/storage/photo/' . $oldImage);
        if ($delete) {
            student::destroy($id);
        }

        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
