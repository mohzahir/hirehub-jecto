<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddJobPostRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Job;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jobPost.index', [
            'jobPosts' => JobPost::orderBy('id', 'DESC')->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobPost.create', [
            'jobs' => Job::where('status', 'active')->get(),
            'cities' => City::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddJobPostRequest $request)
    {
        // dd($request->all());
        $job = Job::findOrFail($request->job_id);
        $city = City::findOrFail($request->city_id);
        $photo = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        JobPost::create([
            'job_id' => $request->job_id,
            'category_id' => $job->category->id,
            'city_id' => $request->city_id,
            'country_id' => $city->country->id,
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'slug' => Str::slug($request->title),
            'short_descr' => $request->short_descr,
            'short_descr_ar' => $request->short_descr_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'salary_from' => $request->salary_from,
            'salary_to' => $request->salary_to,
            'currency' => $request->currency,
            'experience' => $request->experience,
            'duration' => $request->duration,
            'job_type' => $request->job_type,
            'is_featured' => $request->is_featured,
            'photo' => $photo,
        ]);
        return redirect()->route('admin.jobPost.index')->with('success', 'تمت اضافة إعلان الوظيفة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $jobPost)
    {
        return view('admin.jobPost.show', [
            'jobPost' => $jobPost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost)
    {
        return view('admin.jobPost.edit', [
            'jobPost' => $jobPost,
            'jobs' => Job::where('status', 'active')->get(),
            'cities' => City::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(AddJobPostRequest $request, JobPost $jobPost)
    {
        $job = Job::findOrFail($request->job_id);
        $city = City::findOrFail($request->city_id);
        $photo = $jobPost->photo;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        $jobPost->update([
            'job_id' => $request->job_id,
            'category_id' => $job->category->id,
            'city_id' => $request->city_id,
            'country_id' => $city->country->id,
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'short_descr' => $request->short_descr,
            'short_descr_ar' => $request->short_descr_ar,
            'descr' => $request->descr,
            'descr_ar' => $request->descr_ar,
            'salary_from' => $request->salary_from,
            'salary_to' => $request->salary_to,
            'currency' => $request->currency,
            'experience' => $request->experience,
            'duration' => $request->duration,
            'job_type' => $request->job_type,
            'is_featured' => $request->is_featured,
            'photo' => $photo,
        ]);
        return redirect()->route('admin.jobPost.index')->with('success', 'تم تعديل إعلان الوظيفة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $jobPost)
    {
        if (count($jobPost->jobApplications) > 0) {
            return redirect()->route('admin.jobPost.index')->with('warning', 'عفوا, هذا الإعلان يحتوي على تقديمات وظيفية ولا يمكن حذفه!');
        }
        $jobPost->delete();
        return redirect()->route('admin.jobPost.index')->with('success', 'تم حذف إعلان الوظيفة بنجاح');
    }

    public function changeStatus(Request $request, JobPost $jobPost)
    {
        $jobPost->update([
            'status' => $request->status
        ]);
        return redirect()->route('admin.jobPost.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
