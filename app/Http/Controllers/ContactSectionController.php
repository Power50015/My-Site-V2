<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class ContactSectionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $ContactTitle = Template::where('name', 'ContactTitle')->first();
        $ContactTitle = $ContactTitle["value"];

        $ContactSubTitle = Template::where('name', 'ContactSubTitle')->first();
        $ContactSubTitle = $ContactSubTitle["value"];

        $ContactVideo = Template::where('name', 'ContactVideo')->first();
        $ContactVideo = $ContactVideo["value"];

        $ContactAddress = Template::where('name', 'ContactAddress')->first();
        $ContactAddress = $ContactAddress["value"];

        $ContactText = Template::where('name', 'ContactText')->first();
        $ContactText = $ContactText["value"];

        $ContactBackground = Template::where('name', 'ContactBackground')->first();
        $ContactBackground = $ContactBackground["value"];

        return view(
            'admin.contactSection',
            [
                "ContactTitle" => $ContactTitle,
                "ContactSubTitle" => $ContactSubTitle,
                "ContactVideo" => $ContactVideo,
                "ContactAddress" => $ContactAddress,
                "ContactText" => $ContactText,
                "ContactBackground" => $ContactBackground,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        //ContactBackground
        if (!empty($request->removebg)) {
            $ContactBackground = Template::where('name', 'ContactBackground')->first();
            $ContactBackground['value'] = null;
            $ContactBackground->save();
        } else if ($request->file('ContactBackground')) {
            $ContactBackground = Template::where('name', 'ContactBackground')->first();
            $file = $request->file('ContactBackground');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $ContactBackground['value'] = $filename;
            $ContactBackground->save();
        }

        if (!empty($request->ContactAddress)) {
            $ContactAddress = Template::where('name', 'ContactAddress')->first();
            $ContactAddress['value'] = $request->ContactAddress;
            $ContactAddress->save();
        } else {
            $ContactAddress = Template::where('name', 'ContactAddress')->first();
            $ContactAddress['value'] = null;
            $ContactAddress->save();
        }

        if (!empty($request->ContactVideo)) {
            $ContactVideo = Template::where('name', 'ContactVideo')->first();
            $ContactVideo['value'] = $request->ContactVideo;
            $ContactVideo->save();
        } else {
            $ContactVideo = Template::where('name', 'ContactVideo')->first();
            $ContactVideo['value'] = null;
            $ContactVideo->save();
        }

        if (!empty($request->ContactTitle)) {
            $ContactTitle = Template::where('name', 'ContactTitle')->first();
            $ContactTitle['value'] = $request->ContactTitle;
            $ContactTitle->save();
        } else {
            $ContactTitle = Template::where('name', 'ContactTitle')->first();
            $ContactTitle['value'] = null;
            $ContactTitle->save();
        }

        if (!empty($request->ContactText)) {
            $ContactText = Template::where('name', 'ContactText')->first();
            $ContactText['value'] = $request->ContactText;
            $ContactText->save();
        } else {
            $ContactText = Template::where('name', 'ContactText')->first();
            $ContactText['value'] = null;
            $ContactText->save();
        }

        if (!empty($request->ContactSubTitle)) {
            $ContactSubTitle = Template::where('name', 'ContactSubTitle')->first();
            $ContactSubTitle['value'] = $request->ContactSubTitle;
            $ContactSubTitle->save();
        } else {
            $ContactSubTitle = Template::where('name', 'ContactSubTitle')->first();
            $ContactSubTitle['value'] = null;
            $ContactSubTitle->save();
        }
        return redirect()->route('dashboard.contactSection')->with('success', 'Contact section updated!');;
    }
}
