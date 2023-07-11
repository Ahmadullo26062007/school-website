<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use App\Models\Student;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates=Certificate::with('students')->get();
        return view('admin.certificate.index',compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students=Student::pluck('fullname','id');
        return view('admin.certificate.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id'=>'required',
            'ball'=>'required',
            'type'=>'required',
            'degree'=>'required',
        ],[
            'student_id.required'=>"O'quvchi tanlanmadi",
            'ball.required'=>"O'quvchi toplagan bali yozilmadi",
            'type.required'=>"O'quvchini olgan sertifikati yozilmadi",
            'degree.required'=>"O'quvchini darajasi yozilmadi",
        ]);
        Certificate::create($request->all());
        return redirect()->route('certificate.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        return view('admin.certificate.show',compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
             
        return view('admin.certificate.edit',compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        $request->validate([
            'student_id'=>'required',
            'ball'=>'required',
            'type'=>'required',
            'degree'=>'required',
        ],[
            'student_id.required'=>"O'quvchi tanlanmadi",
            'ball.required'=>"O'quvchi toplagan bali yozilmadi",
            'type.required'=>"O'quvchini olgan sertifikati yozilmadi",
            'degree.required'=>"O'quvchini darajasi yozilmadi",
        ]);
        $certificate->update($request->all());
        return redirect()->route('certificate.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
        return back();
    }
}
