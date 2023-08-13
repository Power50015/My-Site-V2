<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TestimonialSectionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $TestimonialTitle = Template::where('name', 'TestimonialTitle')->first();
        $TestimonialTitle = $TestimonialTitle["value"];

        $TestimonialSubTitle = Template::where('name', 'TestimonialSubTitle')->first();
        $TestimonialSubTitle = $TestimonialSubTitle["value"];

        return view(
            'admin.testimonialSection',
            [
                "TestimonialTitle" => $TestimonialTitle,
                "TestimonialSubTitle" => $TestimonialSubTitle,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        
        if (!empty($request->TestimonialTitle)) {
            $TestimonialTitle = Template::where('name', 'TestimonialTitle')->first();
            $TestimonialTitle['value'] = $request->TestimonialTitle;
            $TestimonialTitle->save();
        } else {
            $HomeTitle = Template::where('name', 'TestimonialTitle')->first();
            $HomeTitle['value'] = null;
            $HomeTitle->save();
        }

        if (!empty($request->TestimonialSubTitle)) {
            $TestimonialSubTitle = Template::where('name', 'TestimonialSubTitle')->first();
            $TestimonialSubTitle['value'] = $request->TestimonialSubTitle;
            $TestimonialSubTitle->save();
        } else {
            $TestimonialSubTitle = Template::where('name', 'TestimonialSubTitle')->first();
            $TestimonialSubTitle['value'] = null;
            $TestimonialSubTitle->save();
        }


        return redirect()->route('dashboard.testimonialSection')->with('success', 'Testimonial Section updated!');;
    }
}
