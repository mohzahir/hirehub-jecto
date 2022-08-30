<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddJobRequest;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.job.index', [
            'jobs' => Job::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.create', [
            'categories' => Category::where('status', 'active')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddJobRequest $request)
    {
        // dd($request->all());
        $photo = $request->file('photo')->store('files', 'public_folder');
        Job::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('admin.job.index')->with('success', 'تمت اضافة الوظيفة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('admin.job.show', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('admin.job.edit', [
            'job' => $job,
            'categories' => Category::where('status', 'active')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(AddJobRequest $request, Job $job)
    {
        $photo = $job->photo;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        $job->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'is_featured' => $request->is_featured ?? 0,
            'photo' => $photo,
        ]);
        return redirect()->route('admin.job.index')->with('success', 'تم تعديل الوظيفة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        if (count($job->jobPosts) > 0) {
            return redirect()->route('admin.job.index')->with('warning', 'هذا الوظيفة لديها إعلانات وظائف متاحة تابعة لها ولا يمكن حذفها');
        }
        $job->delete();
        return redirect()->route('admin.job.index')->with('success', 'تم حذف الوظيفة بنجاح');
    }

    public function changeStatus(Request $request, Job $job)
    {
        $job->update([
            'status' => $request->status
        ]);
        return redirect()->route('admin.job.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
