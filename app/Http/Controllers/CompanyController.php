<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StorecompanyRequest;
use App\Http\Requests\UpdatecompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.company',
            ["companies" => Company::all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecompanyRequest $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $image = $filename;
        }
        Company::create([
            'name' => $request->name,
            'link' => $request->link,
            'image' => $image,
        ]);
        return redirect()->route('company.index')->with('success', 'Company added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view(
            'admin.company',
            [
                "companies" => Company::all(),
                "MyCompany" => $company
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecompanyRequest $request, Company $company)
    {
        $company["name"] = $request->name;
        $company["link"] = $request->link;
        
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $company["image"] = $filename;
        }
        $company->save();
        return redirect()->route('company.index')->with('success', 'Company edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($company)
    {
        if (Company::where('id', $company)->get()) {
            Company::destroy($company);
            return redirect()->route('company.index')->with('success', 'Company Deleted!');
        } else {
            return redirect()->route('company.index');
        }
    }
}
