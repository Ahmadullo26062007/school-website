<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $degree=Degree::with('teacher')->get();
        return view('admin.degrees.index',compact('degree'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers=Teacher::pluck('firstname','id');
        $t=Teacher::all();
        return view('admin.degrees.create',compact('teachers','t'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher_id'=>'required',
            'type_id'=>'required',
            'year'=>'required',
        ],[
            'teacher_id.required'=>"O'qtuvchi tanlanmadi",
            'type_id.required'=>"O'qtuvchini darahasi tanlanmadi",
            'year.required'=>"O'qtuvchini tajriba yili kiritilmadi",
        ]);
        Degree::create($request->all());
        return redirect()->route('degree.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Degree $degree)
    {
        return view('admin.degrees.show',compact('degree'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Degree $degree)
    {
        $teachers=Teacher::pluck('firstname','id');
        return view('admin.degrees.edit',compact('degree','teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Degree $degree)
    {
        $request->validate([
            'teacher_id'=>'required',
            'type_id'=>'required',
            'year'=>'required',
        ],[
            'teacher_id.required'=>"O'qtuvchi tanlanmadi",
            'type_id.required'=>"O'qtuvchini darahasi tanlanmadi",
            'year.required'=>"O'qtuvchini tajriba yili kiritilmadi",
        ]);
        $degree->update($request->all());
        return redirect()->route('degree.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Degree $degree)
    {
        $degree->delete();
        return back();
    }
}
