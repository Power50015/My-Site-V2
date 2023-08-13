<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // Item 1
        $StatisticItem1Title = Template::where('name', 'StatisticItem1Title')->first();
        $StatisticItem1Title = $StatisticItem1Title["value"];
        $StatisticItem1Number = Template::where('name', 'StatisticItem1Number')->first();
        $StatisticItem1Number = $StatisticItem1Number["value"];

        // Item 2
        $StatisticItem2Title = Template::where('name', 'StatisticItem2Title')->first();
        $StatisticItem2Title = $StatisticItem2Title["value"];
        $StatisticItem2Number = Template::where('name', 'StatisticItem2Number')->first();
        $StatisticItem2Number = $StatisticItem2Number["value"];

        // Item 3
        $StatisticItem3Title = Template::where('name', 'StatisticItem3Title')->first();
        $StatisticItem3Title = $StatisticItem3Title["value"];
        $StatisticItem3Number = Template::where('name', 'StatisticItem3Number')->first();
        $StatisticItem3Number = $StatisticItem3Number["value"];

         // Item 4
         $StatisticItem4Title = Template::where('name', 'StatisticItem4Title')->first();
         $StatisticItem4Title = $StatisticItem4Title["value"];
         $StatisticItem4Number = Template::where('name', 'StatisticItem4Number')->first();
         $StatisticItem4Number = $StatisticItem4Number["value"];


        return view(
            'admin.statistic',
            [
                "StatisticItem1Number" => $StatisticItem1Number,
                "StatisticItem1Title" => $StatisticItem1Title,
                "StatisticItem2Number" => $StatisticItem2Number,
                "StatisticItem2Title" => $StatisticItem2Title,
                "StatisticItem3Number" => $StatisticItem3Number,
                "StatisticItem3Title" => $StatisticItem3Title,
                "StatisticItem4Number" => $StatisticItem4Number,
                "StatisticItem4Title" => $StatisticItem4Title,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //Item 1
        if (!empty($request->StatisticItem1Number)) {
            $StatisticItem1Number = Template::where('name', 'StatisticItem1Number')->first();
            $StatisticItem1Number['value'] = $request->StatisticItem1Number;
            $StatisticItem1Number->save();
        }else{
            $StatisticItem1Number = Template::where('name', 'StatisticItem1Number')->first();
            $StatisticItem1Number['value'] = null;
            $StatisticItem1Number->save();
        }

        if (!empty($request->StatisticItem1Title)) {
            $StatisticItem1Title = Template::where('name', 'StatisticItem1Title')->first();
            $StatisticItem1Title['value'] = $request->StatisticItem1Title;
            $StatisticItem1Title->save();
        }else{
            $StatisticItem1Title = Template::where('name', 'StatisticItem1Title')->first();
            $StatisticItem1Title['value'] = null;
            $StatisticItem1Title->save();
        }

        //Item 2
        if (!empty($request->StatisticItem2Number)) {
            $StatisticItem2Number = Template::where('name', 'StatisticItem2Number')->first();
            $StatisticItem2Number['value'] = $request->StatisticItem2Number;
            $StatisticItem2Number->save();
        }else{
            $StatisticItem2Number = Template::where('name', 'StatisticItem2Number')->first();
            $StatisticItem2Number['value'] = null;
            $StatisticItem2Number->save();
        }

        if (!empty($request->StatisticItem2Title)) {
            $StatisticItem2Title = Template::where('name', 'StatisticItem2Title')->first();
            $StatisticItem2Title['value'] = $request->StatisticItem2Title;
            $StatisticItem2Title->save();
        }else{
            $StatisticItem2Title = Template::where('name', 'StatisticItem2Title')->first();
            $StatisticItem2Title['value'] = null;
            $StatisticItem2Title->save();
        }

        //Item 3
        if (!empty($request->StatisticItem3Number)) {
            $StatisticItem3Number = Template::where('name', 'StatisticItem3Number')->first();
            $StatisticItem3Number['value'] = $request->StatisticItem3Number;
            $StatisticItem3Number->save();
        }else{
            $StatisticItem3Number = Template::where('name', 'StatisticItem3Number')->first();
            $StatisticItem3Number['value'] = null;
            $StatisticItem3Number->save();
        }

        if (!empty($request->StatisticItem3Title)) {
            $StatisticItem3Title = Template::where('name', 'StatisticItem3Title')->first();
            $StatisticItem3Title['value'] = $request->StatisticItem3Title;
            $StatisticItem3Title->save();
        }else{
            $StatisticItem3Title = Template::where('name', 'StatisticItem3Title')->first();
            $StatisticItem3Title['value'] = null;
            $StatisticItem3Title->save();
        }

        //Item 3
        if (!empty($request->StatisticItem4Number)) {
            $StatisticItem4Number = Template::where('name', 'StatisticItem4Number')->first();
            $StatisticItem4Number['value'] = $request->StatisticItem4Number;
            $StatisticItem4Number->save();
        }else{
            $StatisticItem4Number = Template::where('name', 'StatisticItem4Number')->first();
            $StatisticItem4Number['value'] = null;
            $StatisticItem4Number->save();
        }

        if (!empty($request->StatisticItem4Title)) {
            $StatisticItem4Title = Template::where('name', 'StatisticItem4Title')->first();
            $StatisticItem4Title['value'] = $request->StatisticItem4Title;
            $StatisticItem4Title->save();
        }else{
            $StatisticItem4Title = Template::where('name', 'StatisticItem4Title')->first();
            $StatisticItem4Title['value'] = null;
            $StatisticItem4Title->save();
        }

        return redirect()->route('dashboard.statistic')->with('success', 'Statistic updated!');;
    }
}
