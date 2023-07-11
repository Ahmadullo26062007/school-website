<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\week;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('weeks')->orderByDesc('id')->get();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = Teacher::pluck('firstname', 'id');
        $weeks = week::pluck('name', 'id');
        return view('admin.courses.create', compact('teacher', 'weeks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'teacher_id' => 'required',
            'weeks' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
        $data = $request->all();

        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('images'), $image_name);
        $c = Course::create([
            'school_id'=>auth()->user()->school_id,
            'name'=>$data['name'],
            'start_time'=>$data['start_time'],
            'end_time'=>$data['end_time'],
            'teacher_id'=>$data['teacher_id'],
            'description'=>$data['description'],
            'price'=>$data['price'],
            'image'=>$data['image']
            ]);
        $c->weeks()->sync($request->weeks);
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $teacher = Teacher::pluck('firstname', 'id');
        $weeks = week::pluck('name', 'id');
        return view('admin.courses.edit', compact('course', 'teacher', 'weeks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'teacher_id' => 'required',
            'weeks' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
            $data = $request->all();

        if($request->image) {
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();
            $data['image'] = $image_name;
            $file->move(public_path('images'), $image_name);
            $course->update([
                'school_id'=>auth()->user()->school_id,
                'name'=>$data['name'],
                'start_time'=>$data['start_time'],
                'end_time'=>$data['end_time'],
                'teacher_id'=>$data['teacher_id'],
                'description'=>$data['description'],
                'price'=>$data['price'],
                'image'=>$data['image']
            ]);
        }else{
            $course->update([
                'school_id'=>auth()->user()->school_id,
                'name'=>$data['name'],
                'start_time'=>$data['start_time'],
                'end_time'=>$data['end_time'],
                'teacher_id'=>$data['teacher_id'],
                'description'=>$data['description'],
                'price'=>$data['price'],
                'image'=>$data['image']
            ]);
        }
        $course->weeks()->sync($request->weeks);
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->weeks()->sync([]);
        $course->delete();
        return back();
    }
}
