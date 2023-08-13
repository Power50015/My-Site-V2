<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($id)
    {
        
        $HomeBackground = Template::where('name', 'HomeBackground')->first();
        $ServiceTitle = Template::where('name', 'ServiceItem' . $id . 'Title')->first();
        $ServiceShortDescription = Template::where('name', 'ServiceItem' . $id . 'ShortDescription')->first();
        $ServiceDescription = Template::where('name', 'ServiceItem' . $id . 'Description')->first();
        $ServiceImage = Template::where('name', 'ServiceItem' . $id . 'Image')->first();
        $ServiceBtn = Template::where('name', 'ServiceItem' . $id . 'Btn')->first();

        return view(
            'site.service',
            [
                "id" => $id,
                "ServiceTitle" => $ServiceTitle["value"],
                "ServiceShortDescription" => $ServiceShortDescription["value"],
                "ServiceDescription" => $ServiceDescription["value"],
                "ServiceImage" => $ServiceImage["value"],
                "ServiceBtn" => $ServiceBtn["value"],
                "HomeBackground" => $HomeBackground["value"],
            ]
        );
    }

    public function edit($id)
    {
        $ServiceTitle = Template::where('name', 'ServiceItem' . $id . 'Title')->first();
        $ServiceTitle = $ServiceTitle["value"];

        $ServiceShortDescription = Template::where('name', 'ServiceItem' . $id . 'ShortDescription')->first();
        $ServiceShortDescription = $ServiceShortDescription["value"];

        $ServiceDescription = Template::where('name', 'ServiceItem' . $id . 'Description')->first();
        $ServiceDescription = $ServiceDescription["value"];

        $ServiceImage = Template::where('name', 'ServiceItem' . $id . 'Image')->first();
        $ServiceImage = $ServiceImage["value"];

        $ServiceBtn = Template::where('name', 'ServiceItem' . $id . 'Btn')->first();
        $ServiceBtn = $ServiceBtn["value"];

        return view(
            'admin.service',
            [
                "id" => $id,
                "ServiceTitle" => $ServiceTitle,
                "ServiceShortDescription" => $ServiceShortDescription,
                "ServiceDescription" => $ServiceDescription,
                "ServiceImage" => $ServiceImage,
                "ServiceBtn" => $ServiceBtn,
            ]
        );
    }

    public function update($id, Request $request)
    {

        if (!empty($request->remove)) {
            $ServiceImage = Template::where('name', 'ServiceItem' . $id . 'Image')->first();
            $ServiceImage['value'] = null;
            $ServiceImage->save();
        } else if ($request->file('image')) {
            $ServiceImage = Template::where('name', 'ServiceItem' . $id . 'Image')->first();
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $ServiceImage['value'] = $filename;
            $ServiceImage->save();
        }

        if (!empty($request->ServiceTitle)) {
            $ServiceTitle = Template::where('name', 'ServiceItem' . $id . 'Title')->first();
            $ServiceTitle['value'] = $request->ServiceTitle;
            $ServiceTitle->save();
        } else {
            $ServiceTitle = Template::where('name', 'ServiceItem' . $id . 'Title')->first();
            $ServiceTitle['value'] = null;
            $ServiceTitle->save();
        }

        if (!empty($request->ServiceShortDescription)) {
            $ServiceShortDescription = Template::where('name', 'ServiceItem' . $id . 'ShortDescription')->first();
            $ServiceShortDescription['value'] = $request->ServiceShortDescription;
            $ServiceShortDescription->save();
        } else {
            $ServiceShortDescription = Template::where('name', 'ServiceItem' . $id . 'ShortDescription')->first();
            $ServiceShortDescription['value'] = null;
            $ServiceShortDescription->save();
        }

        if (!empty($request->ServiceDescription)) {
            $ServiceDescription = Template::where('name', 'ServiceItem' . $id . 'Description')->first();
            $ServiceDescription['value'] = $request->ServiceDescription;
            $ServiceDescription->save();
        } else {
            $ServiceDescription = Template::where('name', 'ServiceItem' . $id . 'Description')->first();
            $ServiceDescription['value'] = null;
            $ServiceDescription->save();
        }

        if (!empty($request->ServiceBtn)) {
            $ServiceBtn = Template::where('name', 'ServiceItem' . $id . 'Btn')->first();
            $ServiceBtn['value'] = $request->ServiceBtn;
            $ServiceBtn->save();
        } else {
            $ServiceBtn = Template::where('name', 'ServiceItem' . $id . 'Btn')->first();
            $ServiceBtn['value'] = null;
            $ServiceBtn->save();
        }

        return redirect()->route('dashboard.service', $id)->with('success', 'Service updated!');;
    }
}
