<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitJobApplicationRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home');
    }
    public function jobs(Request $request)
    {
        return view('website.jobs', [
            'locale' => app()->getLocale(),
            'jobs' => JobPost::query()
                ->when($request->search_text, function ($q) use ($request) {
                    $q->where('title', 'like', '%' . $request->search_text . '%')->orWhere('title_ar', 'like', '%' . $request->search_text . '%');
                })
                ->when(count($request->category_id ?? []) > 0, function ($q) use ($request) {
                    $q->whereIn('category_id', $request->category_id);
                })
                ->when(count($request->country_id ?? []) > 0, function ($q) use ($request) {
                    $q->whereIn('country_id', $request->country_id);
                })
                ->when(count($request->job_type ?? []) > 0, function ($q) use ($request) {
                    $q->whereIn('job_type', $request->job_type);
                })
                ->orderBy('id', 'Desc')->paginate(20),
            'categories' => Category::orderBy('id', 'Desc')->get(),
            'countries' => Country::orderBy('id', 'Desc')->get(),
        ]);
    }
    public function jobDetails(JobPost $job_post)
    {
        // dd($job_post);
        return view('website.job-details', [
            'job_post' => $job_post,
            'locale' => app()->getLocale(),
        ]);
    }

    public function submitJobApplication(JobPost $job_post, SubmitJobApplicationRequest $request)
    {
        // dd($request->all(), $job_post);

        $job_post_id = $job_post->id;
        $candidate_id = null;
        $name = null;
        $phone = null;
        $email = null;
        $cv = null;
        $cover_latter = $request->cover_latter;

        if ($request->hasFile('cv')) {
            $cv = $request->file('cv')->store('files', 'public_folder');
        }

        if (Auth::guard('candidate')->check()) {
            //user is logged in
            $candidate = Auth::guard('candidate')->user();
            $candidate_id = $candidate->id;
            $name = $candidate->name;
            $phone = $candidate->phone;
            $email = $candidate->email;
        } else {
            //user is not logged in
            $name = $request->name;
            $phone = $request->phone;
            $email = $request->email;
        }

        JobApplication::create([
            'job_post_id' => $job_post_id,
            'candidate_id' => $candidate_id,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'cv' => $cv,
            'cover_latter' => $cover_latter,
        ]);

        return redirect()->back()->with('success', 'Job Application has been done successfully!');
    }
}
