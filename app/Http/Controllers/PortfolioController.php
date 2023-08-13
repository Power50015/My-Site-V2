<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $PortfolioTitle = Template::where('name', 'PortfolioTitle')->first();
        $PortfolioTitle = $PortfolioTitle["value"];

        $PortfolioDescription = Template::where('name', 'PortfolioDescription')->first();
        $PortfolioDescription = $PortfolioDescription["value"];

        $PortfolioSubTitle = Template::where('name', 'PortfolioSubTitle')->first();
        $PortfolioSubTitle = $PortfolioSubTitle["value"];
        return view(
            'admin.portfolio',
            [
                "PortfolioTitle" => $PortfolioTitle,
                "PortfolioDescription" => $PortfolioDescription,
                "PortfolioSubTitle" => $PortfolioSubTitle
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        
        if (!empty($request->PortfolioTitle)) {
            $PortfolioTitle = Template::where('name', 'PortfolioTitle')->first();
            $PortfolioTitle['value'] = $request->PortfolioTitle;
            $PortfolioTitle->save();
        } else {
            $PortfolioTitle = Template::where('name', 'PortfolioTitle')->first();
            $PortfolioTitle['value'] = null;
            $PortfolioTitle->save();
        }

        if (!empty($request->PortfolioDescription)) {
            $PortfolioDescription = Template::where('name', 'PortfolioDescription')->first();
            $PortfolioDescription['value'] = $request->PortfolioDescription;
            $PortfolioDescription->save();
        } else {
            $PortfolioDescription = Template::where('name', 'PortfolioDescription')->first();
            $PortfolioDescription['value'] = null;
            $PortfolioDescription->save();
        }

        if (!empty($request->PortfolioSubTitle)) {
            $PortfolioSubTitle = Template::where('name', 'PortfolioSubTitle')->first();
            $PortfolioSubTitle['value'] = $request->PortfolioSubTitle;
            $PortfolioSubTitle->save();
        } else {
            $PortfolioSubTitle = Template::where('name', 'PortfolioSubTitle')->first();
            $PortfolioSubTitle['value'] = null;
            $PortfolioSubTitle->save();
        }


        return redirect()->route('dashboard.portfolio')->with('success', 'Portfolio updated!');;
    }
}
