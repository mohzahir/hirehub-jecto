<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPageRequest;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.index', [
            'pages' => Page::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPageRequest $request)
    {
        // dd($request->all());
        Page::create([
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'content_ar' => $request->content_ar,
            'is_navbar_page' => $request->is_navbar_page ?? 0,
            'is_footer_page' => $request->is_footer_page ?? 0,
        ]);
        return redirect()->route('admin.page.index')->with('success', 'تمت اضافة الصفحة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $Page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $Page)
    {
        return view('admin.Page.show', [
            'Page' => $Page
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $Page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.page.edit', [
            'page' => $page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $Page
     * @return \Illuminate\Http\Response
     */
    public function update(AddPageRequest $request, Page $Page)
    {
        $Page->update([
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'content_ar' => $request->content_ar,
            'is_navbar_page' => $request->is_navbar_page ?? 0,
            'is_footer_page' => $request->is_footer_page ?? 0,
        ]);
        return redirect()->route('admin.page.index')->with('success', 'تم تعديل الصفحة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $Page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.page.index')->with('success', 'تم حذف الصفحة بنجاح');
    }

    public function changeStatus(Request $request, Page $page)
    {
        $page->update([
            'status' => $request->status
        ]);
        return redirect()->route('admin.page.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
