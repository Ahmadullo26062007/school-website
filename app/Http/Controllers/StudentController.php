<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\About;
use App\Models\Classes;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('about')->get();
        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $school = About::pluck('name', 'id');
        $classes = Classes::pluck('class', 'id');
        return view('admin.students.create', compact('school', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'fullname' => 'required',
            'class_id' => 'required',
        ], [
            'fullname.required' => 'Ismni kiriting',
            'class_id.required' => 'Sinf kiriting',
        ]);
        $data = $request->all();
        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('../../images'), $image_name);
        $n='https://bxtb.uz/images/'.$data['image'];

        if (auth()->user()->school_id == null) {
            Student::create([
                'fullname' => $request->fullname,
                'class_id' => $request->class_id,
                'image' => $n,
                'school_id' => $request->school_id,
                'great_student'=>$request->great_student
            ]);
        } else {
            Student::create([
                'fullname' => $request->fullname,
                'class_id' => $request->class_id,
                'image' => $n,
                'school_id' => auth()->user()->school_id,
                'great_student'=>$request->great_student
            ]);
        }

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {

        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $school = About::pluck('name', 'id');
        $classes = Classes::pluck('class', 'id');
        return view('admin.students.edit', compact('school', 'classes', 'student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'fullname' => 'required',
            'class_id' => 'required',
        ], [
            'fullname.required' => 'Ismni kiriting',
            'class_id.required' => 'Sinf kiriting',
        ]);
        if ($request->image) {
            // removing old image
//            unlink(public_path("../../images/$student->image"));
            // get image
            $data = $request->all();
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();
            $data['image'] = $image_name;
            $n='https://bxtb.uz/images/'.$data['image'];
            if (auth()->user()->school_id == null) {
                $student->update([
                    'fullname' => $request->fullname,
                    'class_id' => $request->class_id,
                    'image' => $n,
                    'school_id' => $request->school_id,
                    'great_student'=>$request->great_student
                ]);
            } else {
                $student->update([
                    'fullname' => $request->fullname,
                    'class_id' => $request->class_id,
                    'image' => $image_name,
                    'school_id' => auth()->user()->school_id,
                    'great_student'=>$request->great_student
                ]);
            }

            $file->move(public_path('../../images'), $image_name);

        } else {
            if (auth()->user()->school_id == null) {
                $student->update([
                    'fullname' => $request->fullname,
                    'class_id' => $request->class_id,
                    'school_id' => $request->school_id,
                    'great_student'=>$request->great_student
                ]);
            } else {
                $student->update([
                    'fullname' => $request->fullname,
                    'class_id' => $request->class_id,
                    'school_id' => auth()->user()->school_id,
                    'great_student'=>$request->great_student
                ]);
            }
        }

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back();
    }
}
