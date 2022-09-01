<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JopApplication;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jobApplication.index', [
            'jobApplications' => JobApplication::orderBy('id', 'DESC')->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function show(JobApplication $jopApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplication $jopApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplication $jopApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplication $jopApplication)
    {
        //
    }

    public function changeStatus(Request $request, JobApplication $jobApplication)
    {
        // dd($jobApplication);
        $jobApplication->update([
            'is_replied_to' => (int)$request->is_replied_to
        ]);
        return redirect()->route('admin.jobApplication.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
