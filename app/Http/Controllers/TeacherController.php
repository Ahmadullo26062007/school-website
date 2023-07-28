<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\About;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $school = About::pluck('name', 'id');
        return view('admin.teachers.create', compact('school'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'category' => 'required',
            'image' => 'required',
        ], [
            'firstname.required' => 'Ismni kiriting',
            'last.required' => 'Familyani kiriting',
            'category.required' => 'Sohasini kiriting',
            'image.required' => 'Rasmini kiriting',
        ]);

        $data = $request->all();
        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('../../images'), $image_name);
        $n = 'https://bxtb.uz/images/' . $data['image'];

        if (auth()->user()->school_id == null) {
            Teacher::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'category' => $request->category,
                'image' => $n,
                'school_id' => $request->school_id,
            ]);
        } else {
            Teacher::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'category' => $request->category,
                'image' => $n,
                'school_id' => auth()->user()->school_id,
            ]);
        }
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('admin.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $school = About::pluck('name', 'id');
        return view('admin.teachers.edit', compact('teacher', 'school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'category' => 'required',
        ], [
            'firstname.required' => 'Ismni kiriting',
            'last.required' => 'Familyani kiriting',
            'category.required' => 'Sohasini kiriting',
        ]);
        if ($request->image) {
            // removing old image
//            unlink(public_path("images/$teacher->image"));
            // get image
            $data = $request->all();
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();
            $data['image'] = $image_name;
            $n = 'https://bxtb.uz/images/' . $data['image'];
            if (auth()->user()->school_id == null) {
                $teacher->update([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'category' => $request->category,
                    'image' => $n,
                    'school_id' => $request->school_id,

                ]);
            } else {
                $teacher->update([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'category' => $request->category,
                    'image' => $n,
                    'school_id' => auth()->user()->school_id,
                ]);
            }

            $file->move(public_path('../../images'), $image_name);

        } else {
            if (auth()->user()->school_id == null) {
                $teacher->update([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'category' => $request->category,
                    'school_id' => $request->school_id,


                ]);
            } else {
                $teacher->update([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'category' => $request->category,
                    'school_id' => auth()->user()->school_id,
                ]);
            }
        }

        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back();
    }
}
