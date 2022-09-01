<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitJobApplicationRequest;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\Candidate;
use App\Models\Category;
use App\Models\Country;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\JobPost;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home', [
            'locale' => app()->getLocale(),
            'featured_job_posts' => JobPost::where('status', 'active')->where('is_featured', 1)->get(),
            'categories' => Category::where('status', 'active')->orderBy('id', 'Desc')->get(),
            'countries' => Country::orderBy('id', 'Desc')->get(),
            'countries_has_jobs' => Country::has('jobPosts')->take(4)->get(),
        ]);
    }
    public function jobs(Request $request)
    {
        // dd($request->all());
        return view('website.jobs', [
            'locale' => app()->getLocale(),
            'jobs' => JobPost::query()
                ->when($request->search_text, function ($q) use ($request) {
                    $q->where('title', 'like', '%' . $request->search_text . '%')->orWhere('title_ar', 'like', '%' . $request->search_text . '%');
                })
                ->when($request->category_id[0] ?? null, function ($q) use ($request) {
                    $q->whereIn('category_id', $request->category_id);
                })
                ->when($request->country_id[0] ?? null, function ($q) use ($request) {
                    $q->whereIn('country_id', $request->country_id);
                })
                ->when($request->job_type[0] ?? null, function ($q) use ($request) {
                    $q->whereIn('job_type', $request->job_type);
                })
                ->orderBy('id', 'Desc')->paginate(20),
            'categories' => Category::where('status', 'active')->orderBy('id', 'Desc')->get(),
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
            'cover_latter' => $request->cover_letter,
        ]);

        return redirect()->back()->with('success', 'Job Application has been done successfully!');
    }

    public function showCandidateDashboard()
    {
        return view('website.candidate.dashboard', [
            'candidate' => auth()->guard('candidate')->user(),
            'applied_jobs' => JobApplication::where('candidate_id', auth()->guard('candidate')->user()->id)->get(),
            'locale' => app()->getLocale(),
        ]);
    }

    public function submitCandidateInfo(Request $request)
    {
        // dd($request);
        $candidate = Candidate::findOrFail(auth()->guard('candidate')->user()->id);

        $photo = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }

        $candidate->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_of_birth' => $request->date_of_birth,
            'job_title' => $request->job_title,
            'position' => $request->position,
            'salary' => $request->salary,
            'photo' => $photo,
            'education_field' => $request->education_field,
            'education_degree' => $request->education_degree,
            'education_institute' => $request->education_institute,
            'education_year' => $request->education_year,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
        ]);

        return redirect()->back()->with(['success' => 'Data Saved Successfully!']);
    }


    public function workshops()
    {
        return view('website.workshops');
    }

    public function about()
    {
        return view('website.about', [
            'locale' => app()->getLocale(),
            'setting' => Setting::find(1),
            'candidates_count' => Candidate::count(),
            'jobPosts_count' => JobPost::count(),
            'companies_count' => 4,
            'jobApplications_count' => JobApplication::count(),
        ]);
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function SubmitContact(Request $request)
    {
        // dd($request->all());
        Mail::to(Setting::find(1)->email1)->send(new ContactMail($request->name, $request->email, $request->message));

        if (Mail::failures()) {
            return response()->Fail('عفوا, لم يتم ارسال رسالتك الرجاء المحاولة لاحقا');
        } else {
            return response()->success('تم إرسال الرسالة بنجاح');
        }
    }

    public function blog()
    {
        return view('website.blog', [
            'blogs' => Blog::where('status', 'active')->orderBy('id', 'desc')->paginate(20),
            'locale' => app()->getLocale(),
        ]);
    }
}
