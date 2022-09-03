<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index', [
            'blogs' => Blog::orderBy('id', 'DESC')->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create', [
            'categories' => Category::where('status', 'active')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddBlogRequest $request)
    {
        // dd($request->all());
        $photo = $request->file('photo')->store('files', 'public_folder');
        Blog::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('admin.blog.index')->with('success', 'تمت اضافة الوظيفة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', [
            'blog' => $blog,
            'categories' => Category::where('status', 'active')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(AddBlogRequest $request, Blog $blog)
    {
        $photo = $blog->photo;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        $blog->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('admin.blog.index')->with('success', 'تم تعديل الوظيفة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if (count($blog->BlogPosts) > 0) {
            return redirect()->route('admin.blog.index')->with('warning', 'هذا الوظيفة لديها إعلانات وظائف متاحة تابعة لها ولا يمكن حذفها');
        }
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'تم حذف الوظيفة بنجاح');
    }

    public function changeStatus(Request $request, Blog $blog)
    {
        $blog->update([
            'status' => $request->status
        ]);
        return redirect()->route('admin.blog.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
