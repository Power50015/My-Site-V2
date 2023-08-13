<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $HomeJob = Template::where('name', 'HomeJob')->first();
        $HomeJob = $HomeJob["value"];

        $HomeTitle = Template::where('name', 'HomeTitle')->first();
        $HomeTitle = $HomeTitle["value"];

        $HomeImage = Template::where('name', 'HomeImage')->first();
        $HomeImage = $HomeImage["value"];

        $HomeBackground = Template::where('name', 'HomeBackground')->first();
        $HomeBackground = $HomeBackground["value"];

        return view(
            'admin.home',
            [
                "HomeJob" => $HomeJob,
                "HomeTitle" => $HomeTitle,
                "HomeImage" => $HomeImage,
                "HomeBackground" => $HomeBackground,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        if (!empty($request->remove)) {
            $HomeImage = Template::where('name', 'HomeImage')->first();
            $HomeImage['value'] = null;
            $HomeImage->save();
        } else if ($request->file('image')) {
            $HomeImage = Template::where('name', 'HomeImage')->first();
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $HomeImage['value'] = $filename;
            $HomeImage->save();
        }
        //HomeBackground
        if (!empty($request->removebg)) {
            $HomeBackground = Template::where('name', 'HomeBackground')->first();
            $HomeBackground['value'] = null;
            $HomeBackground->save();
        } else if ($request->file('HomeBackground')) {
            $HomeBackground = Template::where('name', 'HomeBackground')->first();
            $file = $request->file('HomeBackground');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $HomeBackground['value'] = $filename;
            $HomeBackground->save();
        }

        if (!empty($request->title)) {
            $HomeTitle = Template::where('name', 'HomeTitle')->first();
            $HomeTitle['value'] = $request->title;
            $HomeTitle->save();
        } else {
            $HomeTitle = Template::where('name', 'HomeTitle')->first();
            $HomeTitle['value'] = null;
            $HomeTitle->save();
        }

        if (!empty($request->job)) {
            $HomeJob = Template::where('name', 'HomeJob')->first();
            $HomeJob['value'] = $request->job;
            $HomeJob->save();
        } else {
            $HomeJob = Template::where('name', 'HomeJob')->first();
            $HomeJob['value'] = null;
            $HomeJob->save();
        }


        return redirect()->route('dashboard.home')->with('success', 'Home updated!');;
    }
}
