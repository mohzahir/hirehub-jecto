<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCVSampleRequest;
use App\Models\Category;
use App\Models\CVSample;
use Illuminate\Http\Request;

class CVSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cv-sample.index', [
            'cv_samples' => CVSample::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cv-sample.create', [
            'categories' => Category::where('status', 'active')->where('type', 'cv')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCVSampleRequest $request)
    {
        $photo = '';
        $pdf = '';
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf')->store('files', 'public_folder');
        }
        $data = $request->all();
        $data['photo'] = $photo;
        $data['pdf'] = $pdf;

        CVSample::create($data);

        return redirect()->route('admin.cv-sample.index')->with('success', 'تمت اضافة السيرة الزاتية بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CVSample  $cVSample
     * @return \Illuminate\Http\Response
     */
    public function show(CVSample $cVSample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CVSample  $cVSample
     * @return \Illuminate\Http\Response
     */
    public function edit(CVSample $cVSample)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CVSample  $cVSample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CVSample $cVSample)
    {
        $photo = $cVSample->photo;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        $pdf = $cVSample->pdf;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf')->store('files', 'public_folder');
        }
        $data = $request->all();
        $data['photo'] = $photo;
        $data['pdf'] = $pdf;

        $cVSample->update($data);

        return redirect()->route('admin.cv-sample.index')->with('success', 'تمت تعديل السيرة الزاتية بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CVSample  $cVSample
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cVSample = CVSample::findOrFail($id);
        $cVSample->delete();
        return redirect()->route('admin.cv-sample.index')->with('success', 'تم حذف السيرة الزاتية بنجاح');
    }
}
