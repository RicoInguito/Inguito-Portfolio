<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blog =  Blog::get();
        return view("Blog.index", compact("blog"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return view("Blog.create");  
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Blog $blog)
    {
        //
        $data = $request->validate([
            'blog_image' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        if($request->hasFile('blog_image')){
            $image = $request->file('blog_image');
            $imagePath = $image->store('images', 'public');
            $data['blog_image'] = $imagePath;
        }

        Blog::create($data);
        return redirect()->route('blogs.index')->with('success','sadf');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
        $blogs = Blog::find($blog->id);
        return view('Blog.show', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        $blogs = Blog::find($blog->id);
        return view("Blog.edit", compact("blogs"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
        $blog->update($request->all());
        return redirect()->route("blogs.index")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
