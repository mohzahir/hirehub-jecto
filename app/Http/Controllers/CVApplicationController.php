<?php

namespace App\Http\Controllers;

use App\Models\CVApplication;
use App\Models\JopApplication;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class CVApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cv-application.index', [
            'applications' => CVApplication::orderBy('id', 'DESC')->paginate(20),
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
    public function show(CVApplication $cv_application)
    {
        return view('admin.cv-application.show', [
            'application' => $cv_application
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(CVApplication $cv_application)
    {
        return view('admin.cv-application.assert-bank-payment', [
            'application' => $cv_application,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CVApplication $cv_application)
    {
        // dd($cv_application);
        $cv_application->update([
            'payment_confirmed' => 1,
            'paid_amount' => $cv_application->CVCategory->cv_price_sdg,
        ]);

        return redirect()->route('admin.cv-application.index')->with('success', 'تم تأكيد حالة الدفع بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JopApplication  $jopApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(CVApplication $jopApplication)
    {
        //
    }

    public function changeStatus(Request $request, $CVApplicationId)
    {
        $CVApplication = CVApplication::findOrFail($CVApplicationId);
        $CVApplication->update([
            'is_replied_to' => (int)$request->is_replied_to
        ]);
        return redirect()->route('admin.cv-application.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
