<?php

namespace App\Http\Controllers;

use App\Models\WorkshopApplication;
use Illuminate\Http\Request;

class WorkshopApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.workshop-application.index', [
            'applications' => WorkshopApplication::orderBy('id', 'DESC')->paginate(20),
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
    public function show($workshop_application_id)
    {
        // dd($workshop_application);
        $workshop_application = WorkshopApplication::findOrFail($workshop_application_id);
        return view('admin.workshop-application.show', [
            'application' => $workshop_application
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function edit($workshop_application_id)
    {
        $workshop_application = WorkshopApplication::findOrFail($workshop_application_id);
        return view('admin.workshop-application.assert-bank-payment', [
            'application' => $workshop_application,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $workshop_application_id)
    {
        // dd($workshop_application);
        $workshop_application = WorkshopApplication::findOrFail($workshop_application_id);
        $workshop_application->update([
            'payment_confirmed' => 1,
            'paid_amount' => $workshop_application->runningWorkshop->price_sdg,
        ]);

        return redirect()->route('admin.workshopApplication.index')->with('success', 'تم تأكيد حالة الدفع بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkshopApplication $jopApplication)
    {
        //
    }

    public function changeStatus(Request $request, $workshopApplicationId)
    {
        $workshopApplication = WorkshopApplication::findOrFail($workshopApplicationId);
        $workshopApplication->update([
            'is_replied_to' => (int)$request->is_replied_to
        ]);
        return redirect()->route('admin.workshopApplication.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
