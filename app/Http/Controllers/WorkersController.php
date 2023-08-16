<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Role;
use App\Models\Workers;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menegers = Workers::with('role')->get();
        return view('admin.menegers.index', compact('menegers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('title', 'id');
        $schools = About::pluck('name', 'id');
        return view('admin.menegers.create', compact('roles', 'schools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->school_id == null) {
            $request->validate([
                'fullname' => 'required',
                'role_id' => 'required',
                'school_id' => 'required',
                'image' => 'required'
            ], [
                'fullname.required' => 'Ism familya kiritilmadi',
                'role_id.required' => 'Ro\'le tanlanmadi',
                'school_id.required' => 'Maktab tanlanmadi',
                'image.required' => 'Rasm Kiritilmadi',
            ]);
        } else {
            $request->validate([
                'fullname' => 'required',
                'role_id' => 'required',
                'image' => 'required'
            ], [
                'fullname.required' => 'Ism familya kiritilmadi',
                'role_id.required' => 'Ro\'le tanlanmadi',
                'image.required' => 'Rasm Kiritilmadi',
            ]);
        }
        $data = $request->all();
        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('../../images'), $image_name);
        $n = 'https://bxtb.uz/images/' . $data['image'];

        if (auth()->user()->school_id == null) {
            Workers::create([
                'fullname' => $request->fullname,
                'role_id' => $request->role_id,
                'school_id' => $request->school_id,
                'image' => $n,
            ]);
        } else {
            Workers::create([
                'fullname' => $request->fullname,
                'role_id' => $request->role_id,
                'school_id' => auth()->user()->school_id,
                'image' => $n
            ]);
        }
        return redirect()->route('menegers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $meneger=Workers::find($id);
        return view('admin.menegers.show',compact('meneger'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $meneger=Workers::find($id);
        $roles = Role::pluck('title', 'id');
        $schools = About::pluck('name', 'id');
        return view('admin.menegers.edit', compact('roles', 'schools','meneger'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $meneger=Workers::find($id);
        if (auth()->user()->school_id == null) {
            $request->validate([
                'fullname' => 'required',
                'role_id' => 'required',
                'school_id' => 'required',
            ], [
                'fullname.required' => 'Ism familya kiritilmadi',
                'role_id.required' => 'Ro\'le tanlanmadi',
                'school_id.required' => 'Maktab tanlanmadi',
            ]);
        } else {
            $request->validate([
                'fullname' => 'required',
                'role_id' => 'required',
            ], [
                'fullname.required' => 'Ism familya kiritilmadi',
                'role_id.required' => 'Ro\'le tanlanmadi',
            ]);
        }
        if ($request->image) {
            // removing old image
//            unlink(public_path("images/$meneger->image"));
            // get image
            $data = $request->all();
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();
            $data['image'] = $image_name;
            $file->move(public_path('../../images'), $image_name);
            $n = 'https://bxtb.uz/images/' . $data['image'];

            if (auth()->user()->school_id == null) {
                $meneger->update([
                    'fullname' => $request->fullname,
                    'role_id' => $request->role_id,
                    'school_id' => $request->school_id,
                    'image' => $n,
                ]);
            } else {
                $meneger->update([
                    'fullname' => $request->fullname,
                    'role_id' => $request->role_id,
                    'school_id' => auth()->user()->school_id,
                    'image' => $n,
                ]);
            }


        } else {
            if (auth()->user()->school_id == null) {
                $meneger->update([
                    'fullname' => $request->fullname,
                    'role_id' => $request->role_id,
                    'school_id' => $request->school_id,
                ]);
            } else {
                $meneger->update([
                    'fullname' => $request->fullname,
                    'role_id' => $request->role_id,
                    'school_id' =>  auth()->user()->school_id
                ]);
            }
        }

        return redirect()->route('menegers.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menejer=Workers::find($id);
        $menejer->delete();
        return back();
    }
}
