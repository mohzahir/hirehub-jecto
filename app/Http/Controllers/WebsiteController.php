<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitJobApplicationRequest;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Candidate;
use App\Models\Category;
use App\Models\Company;
use App\Models\Country;
use App\Models\CVApplication;
use App\Models\CVCategory;
use App\Models\CVSample;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\JobPost;
use App\Models\Page;
use App\Models\RunnigWorkshop;
use App\Models\RunningWorkshop;
use App\Models\Setting;
use App\Models\Workshop;
use App\Models\WorkshopApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use TelrGateway\TelrManager;
use TelrGateway\Transaction;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home', [
            'locale' => app()->getLocale(),
            'featured_job_posts' => JobPost::where('status', 'active')->where('is_featured', 1)->get(),
            'workshops' => RunningWorkshop::where('shown', 1)->take(5)->get(),
            'categories' => Category::where('status', 'active')->orderBy('id', 'Desc')->get(),
            'countries' => Country::orderBy('id', 'Desc')->get(),
            'countries_has_jobs' => Country::has('jobPosts')->take(4)->get(),
            'companies' => Company::where('status', 'active')->get(),
            'blogs' => Blog::where('status', 'active')->where('is_featured', '1')->take(3)->get(),
            'cv_categories' => CVCategory::where('status', 'active')->get(),
            'cv_samples' => CVSample::all(),
            'setting' => Setting::find(1),
        ]);
    }

    public function page($slug)
    {
        // dd($slug);
        $page = Page::where('slug', $slug)->first();
        return view('website.page', [
            'page' => $page,
            'locale' => app()->getLocale(),
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
            'categories' => Category::where('status', 'active')->where('type', 'job')->orderBy('id', 'Desc')->get(),
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
        // dd(WorkshopApplication::where('candidate_id', auth()->guard('candidate')->user()->id)->first()->runningWorkshop);
        return view('website.candidate.dashboard', [
            'candidate' => auth()->guard('candidate')->user(),
            'applied_jobs' => JobApplication::where('candidate_id', auth()->guard('candidate')->user()->id)->get(),
            'applied_workshops' => WorkshopApplication::where('candidate_id', auth()->guard('candidate')->user()->id)->get(),
            // 'applied_CVs' => CVApplication::where('candidate_id', auth()->guard('candidate')->user()->id)->get(),
            'locale' => app()->getLocale(),
        ]);
    }

    public function submitCandidateInfo(Request $request)
    {
        // dd($request);
        $candidate = Candidate::findOrFail(auth()->guard('candidate')->user()->id);

        $photo = null;
        $cv = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('files', 'public_folder');
        }
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv')->store('files', 'public_folder');
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
            'cv' => $cv,
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


    public function workshops(Request $request)
    {
        return view('website.workshops', [
            'running_workshops' => RunningWorkshop::join('workshops', 'running_workshops.workshop_id', 'workshops.id')
                ->when($request->title, function ($q) use ($request) {
                    // dd($q);
                    $q->where('workshops.title', $request->title);
                })
                ->when($request->category_id, function ($q) use ($request) {
                    // dd($q);
                    $q->where('workshops.category_id', $request->category_id);
                })
                ->when($request->start_date, function ($q) use ($request) {
                    $q->where('start_date', ">", $request->start_date);
                })
                ->where('shown', 1)->paginate(12),
            'locale' => app()->getLocale(),
            'categories' => Category::where('status', 'active')->where('type', 'workshop')->get(),
        ]);
    }
    public function workshopDetails(RunningWorkshop $running_workshop)
    {
        // dd($running_workshop);
        return view('website.workshop-details', [
            'locale' => app()->getLocale(),
            'running_workshop' => $running_workshop,
        ]);
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

    public function blog(Request $request)
    {
        return view('website.blog', [
            'blogs' => Blog::query()
                ->when($request->category_id, function ($q) use ($request) {
                    $q->where('category_id', $request->category_id);
                })
                ->where('status', 'active')->orderBy('id', 'desc')->paginate(20),
            'locale' => app()->getLocale(),
        ]);
    }

    public function blogDetails(Blog $blog)
    {
        return view('website.blog-details', [
            'blog' => $blog,
            // 'next_blog' => Blog::where(),
            'recent_blogs' => Blog::orderBy('id', 'desc')->take(3)->get(),
            'categories' => Category::where('status', 'active')->where('type', 'blog')->get(),
            'locale' => app()->getLocale(),
        ]);
    }

    public function blogComment(Request $request, Blog $blog)
    {
        // dd($validatedData);
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|string|min:3',
        ]);
        $validatedData['blog_id'] = $blog->id;
        BlogComment::create($validatedData);
        return redirect()->back()->with('success', 'Comment Added Successfully!');
    }

    public function cvWriting()
    {
        return view('website.cv-writing', [
            'locale' => app()->getLocale(),
            'setting' => Setting::find(1),
            'cv_samples' => CVSample::all(),
            'cv_categories' => CVCategory::where('status', 'active')->get(),
        ]);
    }
    public function cvWritingApplication(CVCategory $category)
    {
        return view('website.cv-writing-application', [
            'category' => $category,
            'locale' => app()->getLocale(),
            'setting' => Setting::find(1),
            // 'cv_samples' => CVSample::all(),
            // 'categories' => CVCategory::where('status', 'active')->get(),
        ]);
    }

    public function cvWritingApplicationSubmit(Request $request, CVCategory $category)
    {
        // dd($request->all(), $category);
        $payment_photo = null;
        $cv = null;
        $validatedData = $request->validate([
            'name' => 'required|min:3|string',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'paid_currency' => 'required|in:sdg,dollar',
            'cv' => 'nullable|mimes:pdf',
            'payment_photo' => 'required_if:paid_currency,sdg',
            'notes' => 'nullable',
        ]);
        if (auth()->guard('candidate')->check()) {
            // is logged in
            $validatedData['candidate_id'] = auth()->guard('candidate')->user()->id;
        }
        if ($request->hasFile('payment_photo')) {
            $payment_photo = $request->file('payment_photo')->store('files', 'public_folder');
        }
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv')->store('files', 'public_folder');
        }
        if ($validatedData['paid_currency'] == 'sdg') {
            //bank
            $validatedData['cv_category_id'] = $category->id;
            $validatedData['payment_time'] = date('Y-m-d H:m:s');
            $validatedData['payment_method'] = 'bank';
            $validatedData['payment_confirmed'] = 0;
            $validatedData['paid_amount'] = 0;
            $validatedData['is_replied_to'] = 0;
            $validatedData['payment_photo'] = $payment_photo;
            $validatedData['cv'] = $cv;
            CVApplication::create($validatedData);

            return redirect()->back()->with('success', 'Your order has been placed successfully please wait our feedback');
        } else {
            //telr

            $validatedData['cv_category_id'] = $category->id;
            // $validatedData['payment_time'] = date('Y-m-d H:m:s');
            $validatedData['payment_method'] = 'telr';
            $validatedData['payment_confirmed'] = 0;
            $validatedData['paid_amount'] = 0;
            $validatedData['is_replied_to'] = 0;
            // $validatedData['payment_photo'] = $payment_photo;
            $validatedData['cv'] = $cv;
            $application = CVApplication::create($validatedData);

            $telrManager = new TelrManager();

            $billingParams = [
                'first_name' => $validatedData['name'],
                'sur_name' => 'Bafi',
                'address_1' => 'Gnaklis',
                'address_2' => 'Gnaklis 2',
                'city' => 'Alexandria',
                'region' => 'San Stefano',
                'zip' => '11231',
                'country' => 'EG',
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
            ];

            $request->session()->put('service', 'cv_writing');

            return $telrManager->pay($application->id, $application->CVCategory->cv_price_dollar, 'DESCRIPTION ...', $billingParams)->redirect();
        }
    }
    public function runningWorkshopApplication(RunningWorkshop $running_workshop)
    {
        return view('website.running-workshop-application', [
            'running_workshop' => $running_workshop,
            'locale' => app()->getLocale(),
            'setting' => Setting::find(1),
            // 'cv_samples' => CVSample::all(),
            // 'categories' => CVCategory::where('status', 'active')->get(),
        ]);
    }

    public function runningWorkshopApplicationSubmit(Request $request, RunningWorkshop $running_workshop)
    {
        // dd($request->all(), $running_workshop);
        $payment_photo = null;
        $validatedData = $request->validate([
            'name' => 'required|min:3|string',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'paid_currency' => 'required|in:sdg,dollar',
            'payment_photo' => 'required_if:paid_currency,sdg',
            'notes' => 'nullable',
        ]);
        if (auth()->guard('candidate')->check()) {
            // is logged in
            $validatedData['candidate_id'] = auth()->guard('candidate')->user()->id;
        }
        if ($request->hasFile('payment_photo')) {
            $payment_photo = $request->file('payment_photo')->store('files', 'public_folder');
        }
        if ($validatedData['paid_currency'] == 'sdg') {
            //bank
            $validatedData['running_workshop_id'] = $running_workshop->id;
            $validatedData['payment_time'] = date('Y-m-d H:m:s');
            $validatedData['payment_method'] = 'bank';
            $validatedData['payment_confirmed'] = 0;
            $validatedData['paid_amount'] = 0;
            $validatedData['is_replied_to'] = 0;
            $validatedData['payment_photo'] = $payment_photo;
            WorkshopApplication::create($validatedData);

            return redirect()->back()->with('success', 'You have been registered successfully please wait our feedback');
        } else {
            //telr
            $validatedData['running_workshop_id'] = $running_workshop->id;
            // $validatedData['payment_time'] = date('Y-m-d H:m:s');
            $validatedData['payment_method'] = 'telr';
            $validatedData['payment_confirmed'] = 0;
            $validatedData['paid_amount'] = 0;
            $validatedData['is_replied_to'] = 0;
            // $validatedData['payment_photo'] = $payment_photo;
            $application = WorkshopApplication::create($validatedData);

            $telrManager = new TelrManager();

            $billingParams = [
                'first_name' => $validatedData['name'],
                'sur_name' => 'Bafi',
                'address_1' => 'Gnaklis',
                'address_2' => 'Gnaklis 2',
                'city' => 'Alexandria',
                'region' => 'San Stefano',
                'zip' => '11231',
                'country' => 'EG',
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
            ];

            $request->session()->put('service', 'workshop');

            return $telrManager->pay($application->id, $application->runningWorkshop->price_dollar, 'DESCRIPTION ...', $billingParams)->redirect();
        }
    }

    public function success(Request $request)
    {
        // dd($request->session()->get('service'));
        $transaction = Transaction::where('cart_id', $request->cart_id)->first();
        if ($request->session()->get('service') == 'cv_writing') {
            $cv_application = CVApplication::find($transaction->order_id);
            $cv_application->update([
                'payment_method' => 'telr',
                'payment_time' => date('Y-m-d H:i:s'),
                'paid_amount' => $transaction->amount,
                'paid_currency' => 'dollar',
                'payment_confirmed' => 1,
            ]);
            return redirect()->route('cv.writing.application', ['category' => $cv_application->CVCategory->id])->with('success', 'You have been registered successfully please wait our feedback');
        } elseif ($request->session()->get('service') == 'workshop') {
            $workshop_application = WorkshopApplication::find($transaction->order_id);
            $workshop_application->update([
                'payment_method' => 'telr',
                'payment_time' => date('Y-m-d H:i:s'),
                'paid_amount' => $transaction->amount,
                'paid_currency' => 'dollar',
                'payment_confirmed' => 1,
            ]);
            return redirect()->route('running.workshop.application', ['running_workshop' => $workshop_application->runningWorkshop->id])->with('success', 'You have been registered successfully please wait our feedback');
        }
    }

    public function cancel()
    {
        return redirect('/');
    }
    public function decline()
    {
        $telrManager = new \TelrGateway\TelrManager();
        $telrManager->handleTransactionResponse($request);
    }
}
