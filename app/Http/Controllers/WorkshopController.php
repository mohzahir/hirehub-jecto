<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddWorkshopRequest;
use App\Models\Category;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.workshop.index', [
            'workshops' => Workshop::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workshop.create', [
            'categories' => Category::where('status', 'active')->where('type', 'workshop')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddWorkshopRequest $request)
    {
        // dd($request->all());
        $img = $request->file('img')->store('files', 'public_folder');
        workshop::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'img' => $img,
            'trainer_name' => $request->trainer_name,
            'trainer_name_ar' => $request->trainer_name_ar,
            'trainer_job_title' => $request->trainer_job_title,
            'trainer_job_title_ar' => $request->trainer_job_title_ar,
            'trainer_descr_ar' => $request->trainer_descr_ar,
            'trainer_descr' => $request->trainer_descr,
        ]);
        return redirect()->route('admin.workshop.index')->with('success', 'تمت اضافة ورشة العمل بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        return view('admin.workshop.show', [
            'workshop' => $workshop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        return view('admin.workshop.edit', [
            'workshop' => $workshop,
            'categories' => Category::where('status', 'active')->where('type', 'workshop')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(AddWorkshopRequest $request, Workshop $workshop)
    {
        $img = $workshop->img;
        if ($request->hasFile('img')) {
            $img = $request->file('img')->store('files', 'public_folder');
        }
        $workshop->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'img' => $img,
            'trainer_name' => $request->trainer_name,
            'trainer_name_ar' => $request->trainer_name_ar,
            'trainer_job_title' => $request->trainer_job_title,
            'trainer_job_title_ar' => $request->trainer_job_title_ar,
            'trainer_descr_ar' => $request->trainer_descr_ar,
            'trainer_descr' => $request->trainer_descr,
        ]);
        return redirect()->route('admin.workshop.index')->with('success', 'تم تعديل ورشة العمل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
        if (count($workshop->runningWorkshops) > 0) {
            return redirect()->route('admin.workshop.index')->with('warning', 'هذه الورشة لديها إعلانات ورش عمل متاحة تابعة لها ولا يمكن حذفها');
        }
        $workshop->delete();
        return redirect()->route('admin.workshop.index')->with('success', 'تم حذف ورشة العمل بنجاح');
    }

    public function changeStatus(Request $request, Workshop $workshop)
    {
        $workshop->update([
            'status' => $request->status
        ]);
        return redirect()->route('admin.workshop.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
