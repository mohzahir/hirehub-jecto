<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.index', [
            'setting' => Setting::findOrFail(1),
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
    public function store(AddSettingRequest $request)
    {
        // dd($request->all());
        $setting = Setting::find(1);
        $logo1 = $setting->logo1;
        $logo2 = $setting->logo2;
        if ($request->hasFile('logo1')) {
            $logo1 = $request->logo1->store('files', 'public_folder');
        }
        if ($request->hasFile('logo2')) {
            $logo2 = $request->logo2->store('files', 'public_folder');
        }
        $setting->update([
            'phone1'  => $request->phone1,
            'email1'  => $request->email1,
            'address1'  => $request->address1,
            'address1_ar'  => $request->address1_ar,
            'phone2'  => $request->phone2,
            'email2'  => $request->email2,
            'address2'  => $request->address2,
            'address2_ar'  => $request->address2_ar,
            'phone3'  => $request->phone3,
            'email3'  => $request->email3,
            'address3'  => $request->address3,
            'address3_ar'  => $request->address3_ar,
            'opining_week_day'  => $request->opining_week_day,
            'closing_week_day'  => $request->closing_week_day,
            'opining_hour'  => $request->opining_hour,
            'closing_hour'  => $request->closing_hour,
            'feature1_title'  => $request->feature1_title,
            'feature1_descr'  => $request->feature1_descr,
            'feature2_title'  => $request->feature2_title,
            'feature2_descr'  => $request->feature2_descr,
            'feature3_title'  => $request->feature3_title,
            'feature3_descr'  => $request->feature3_descr,
            'feature4_title'  => $request->feature4_title,
            'feature4_descr'  => $request->feature4_descr,
            'feature5_title'  => $request->feature5_title,
            'feature5_descr'  => $request->feature5_descr,
            'feature6_title'  => $request->feature6_title,
            'feature6_descr'  => $request->feature6_descr,
            'feature1_title_ar'  => $request->feature1_title_ar,
            'feature1_descr_ar'  => $request->feature1_descr_ar,
            'feature2_title_ar'  => $request->feature2_title_ar,
            'feature2_descr_ar'  => $request->feature2_descr_ar,
            'feature3_title_ar'  => $request->feature3_title_ar,
            'feature3_descr_ar'  => $request->feature3_descr_ar,
            'feature4_title_ar'  => $request->feature4_title_ar,
            'feature4_descr_ar'  => $request->feature4_descr_ar,
            'feature5_title_ar'  => $request->feature5_title_ar,
            'feature5_descr_ar'  => $request->feature5_descr_ar,
            'feature6_title_ar'  => $request->feature6_title_ar,
            'feature6_descr'  => $request->feature6_descr,
            'logo1' => $logo1,
            'logo2' => $logo2,
            'facebook_link' => $request->facebook_link,
            'linkedin_link' => $request->linkedin_link,
            'twitter_link' => $request->twitter_link,
            'youtube_link' => $request->youtube_link,
            'instagram_link' => $request->instagram_link,
            'google_map_link' => $request->google_map_link,
            'ceo_video_link' => $request->ceo_video_link,
            'account_number' => $request->account_number,
        ]);
        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(About $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
