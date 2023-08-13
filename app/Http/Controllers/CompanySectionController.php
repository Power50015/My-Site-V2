<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class CompanySectionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $CompanyTitle = Template::where('name', 'CompanyTitle')->first();
        $CompanyTitle = $CompanyTitle["value"];

        $CompanyText = Template::where('name', 'CompanyText')->first();
        $CompanyText = $CompanyText["value"];

        return view(
            'admin.companySection',
            [
                "CompanyTitle" => $CompanyTitle,
                "CompanyText" => $CompanyText,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        
        if (!empty($request->CompanyTitle)) {
            $CompanyTitle = Template::where('name', 'CompanyTitle')->first();
            $CompanyTitle['value'] = $request->CompanyTitle;
            $CompanyTitle->save();
        } else {
            $HomeTitle = Template::where('name', 'CompanyTitle')->first();
            $HomeTitle['value'] = null;
            $HomeTitle->save();
        }

        if (!empty($request->CompanyText)) {
            $CompanyText = Template::where('name', 'CompanyText')->first();
            $CompanyText['value'] = $request->CompanyText;
            $CompanyText->save();
        } else {
            $CompanyText = Template::where('name', 'CompanyText')->first();
            $CompanyText['value'] = null;
            $CompanyText->save();
        }


        return redirect()->route('dashboard.companySection')->with('success', 'Company Section updated!');
    }
}
