<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.company.index', [
            'companies' => Company::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        return view('admin.company.create', [
            'company' => $company,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCompanyRequest $request)
    {
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('files', 'public_folder');
        }
        Company::create([
            'name_ar' => $request->name_ar,
            'name' => $request->name,
            'logo' => $logo,
        ]);
        return redirect()->route('admin.company.index')->with('success', 'تمت اضافة الشركة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('admin.company.index')->with('success', 'تم حذف الشركة بنجاح');
    }

    public function changeStatus(Request $request, Company $company)
    {
        $company->update([
            'status' => $request->status
        ]);
        return redirect()->route('admin.company.index')->with('success', 'تم تغيير الحالة بنجاح');
    }
}
