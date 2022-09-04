<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCVCategoryRequest;
use App\Models\Category;
use App\Models\CVCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CVCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cv-category.index', [
            'categories' => CVCategory::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cv-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCVCategoryRequest $request)
    {
        // dd($request->all());
        CVCategory::create([
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'cv_price_sdg' => $request->cv_price_sdg,
            'cv_price_dollar' => $request->cv_price_dollar,
            'slug' => Str::slug($request->title),
            'features' => $request->features,
            'features_ar' => $request->features_ar,
            'type' => $request->type,
            'is_featured' => $request->is_featured ?? 0,
        ]);
        return redirect()->route('admin.cv-category.index')->with('success', 'تمت اضافة الفئة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cv_category = CVCategory::findOrFail($id);
        return view('admin.cv-category.edit', [
            'category' => $cv_category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddCVCategoryRequest $request, Category $category)
    {
        $category->update([
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'cv_price_sdg' => $request->cv_price_sdg,
            'cv_price_dollar' => $request->cv_price_dollar,
            'slug' => Str::slug($request->title),
            'features' => $request->features,
            'features_ar' => $request->features_ar,
            'type' => $request->type,
            'is_featured' => $request->is_featured ?? 0,
        ]);
        return redirect()->route('admin.cv-category.index')->with('success', 'تم تعديل القسم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CVCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.cv-category.index')->with('success', 'تم حذف القسم بنجاح');
    }

    public function changeStatus(Request $request, Category $category)
    {
        $category->update([
            'status' => $request->status
        ]);
        return redirect()->route('admin.cv-category.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
