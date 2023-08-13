<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class AwardSectionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $AwardTitle = Template::where('name', 'AwardTitle')->first();
        $AwardTitle = $AwardTitle["value"];

        $AwardSubTitle = Template::where('name', 'AwardSubTitle')->first();
        $AwardSubTitle = $AwardSubTitle["value"];

        return view(
            'admin.awardSection',
            [
                "AwardTitle" => $AwardTitle,
                "AwardSubTitle" => $AwardSubTitle,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        
        if (!empty($request->AwardTitle)) {
            $AwardTitle = Template::where('name', 'AwardTitle')->first();
            $AwardTitle['value'] = $request->AwardTitle;
            $AwardTitle->save();
        } else {
            $HomeTitle = Template::where('name', 'AwardTitle')->first();
            $HomeTitle['value'] = null;
            $HomeTitle->save();
        }

        if (!empty($request->AwardSubTitle)) {
            $AwardSubTitle = Template::where('name', 'AwardSubTitle')->first();
            $AwardSubTitle['value'] = $request->AwardSubTitle;
            $AwardSubTitle->save();
        } else {
            $AwardSubTitle = Template::where('name', 'AwardSubTitle')->first();
            $AwardSubTitle['value'] = null;
            $AwardSubTitle->save();
        }


        return redirect()->route('dashboard.awardSection')->with('success', 'Award Section updated!');;
    }
}
