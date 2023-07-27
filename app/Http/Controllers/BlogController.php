<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::with('category')->orderByDesc('id')->get();
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::pluck('name','id');
        return view('admin.blog.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);
        $data = $request->all();

        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('images'), $image_name);
        Blog::create([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'category_id'=>$data['category_id'],
            'image'=>$data['image'],
            'school_id'=>env('SCHOOL_ID')
        ]);
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories=Category::pluck('name','id');
        return view('admin.blog.edit',compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);
        $data = $request->all();
        if ($request->image){
        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('images'), $image_name);
       $blog->update([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'category_id'=>$data['category_id'],
            'image'=>$data['image'],
           'school_id'=>env('SCHOOL_ID')

        ]);
        }else{
           $blog->update([
                'title'=>$data['title'],
                'description'=>$data['description'],
                'category_id'=>$data['category_id'],
               'school_id'=>env('SCHOOL_ID')

            ]);
        }
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }
}
