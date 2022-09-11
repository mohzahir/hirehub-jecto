<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRunningWorkshopRequest;
use App\Models\City;
use App\Models\RunnigWorkshop;
use App\Models\RunningWorkshop;
use App\Models\Workshop;
use Illuminate\Http\Request;

class RunningWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.running_workshop.index', [
            'running_workshops' => RunningWorkshop::orderBy('id', 'DESC')->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.running_Workshop.create', [
            'workshops' => workshop::where('status', 'active')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRunningWorkshopRequest $request)
    {
        // dd($request->all());
        RunningWorkshop::create([
            'workshop_id' => $request->workshop_id,
            'price_sdg' => $request->price_sdg,
            'price_dollar' => $request->price_dollar,
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date,
            'lecture_hours' => $request->lecture_hours,
            'total_hours' => $request->total_hours,
            'location' => $request->location,
        ]);
        return redirect()->route('admin.running_workshop.index')->with('success', 'تمت اضافة إعلان ورشة العمل بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RunningWorkshop  $runningWorkshop
     * @return \Illuminate\Http\Response
     */
    public function show(RunningWorkshop $runningWorkshop)
    {
        return view('admin.running_Workshop.show', [
            'runningWorkshop' => $runningWorkshop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RunningWorkshop  $runningWorkshop
     * @return \Illuminate\Http\Response
     */
    public function edit(RunningWorkshop $runningWorkshop)
    {
        return view('admin.running_Workshop.edit', [
            'running_workshop' => $runningWorkshop,
            'workshops' => workshop::where('status', 'active')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RunningWorkshop  $runningWorkshop
     * @return \Illuminate\Http\Response
     */
    public function update(AddRunningWorkshopRequest $request, RunningWorkshop $runningWorkshop)
    {

        $runningWorkshop->update([
            'workshop_id' => $request->workshop_id,
            'price_sdg' => $request->price_sdg,
            'price_dollar' => $request->price_dollar,
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date,
            'lecture_hours' => $request->lecture_hours,
            'total_hours' => $request->total_hours,
            'location' => $request->location,
        ]);
        return redirect()->route('admin.running_workshop.index')->with('success', 'تم تعديل إعلان ورشة العمل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\runningWorkshop  $runningWorkshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(RunningWorkshop $runningWorkshop)
    {
        if (count($runningWorkshop->workshopApplications) > 0) {
            return redirect()->route('admin.running_workshop.index')->with('warning', 'عفوا, هذا الإعلان يحتوي على تقديمات ولا يمكن حذفه!');
        }
        $runningWorkshop->delete();
        return redirect()->route('admin.running_workshop.index')->with('success', 'تم حذف إعلان ورشة العمل بنجاح');
    }

    public function changeStatus(Request $request, RunningWorkshop $runningWorkshop)
    {
        $runningWorkshop->update([
            'shown' => $request->status
        ]);
        return redirect()->route('admin.running_workshop.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
