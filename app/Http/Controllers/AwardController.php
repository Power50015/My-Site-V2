<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Http\Requests\StoreAwardRequest;
use App\Http\Requests\UpdateAwardRequest;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.Award',
            ["awards" => Award::all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAwardRequest $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $image = $filename;
        }

        $award = Award::create([
            "title" => $request->title,
            "sub_title" => $request->sub_title,
            "date" => $request->date,
            "image" => $image,
        ]);


        return redirect()->route('award.index')->with('success', 'Award added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Award $award)
    {
        return view(
            'admin.Award',
            [
                "awards" => Award::all(),
                "MyAward" => $award,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAwardRequest $request, Award $award)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $award["image"] = $filename;
        }

        $award["title"] = $request->title;
        $award["sub_title"] = $request->sub_title;
        $award["date"] = $request->date;

        $award->save();

        return redirect()->route('award.index')->with('success', 'Award edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($award)
    {
        if (Award::where('id', $award)->get()) {
            Award::destroy($award);
            return redirect()->route('award.index')->with('success', 'Award Deleted!');
        } else {
            return redirect()->route('award.index');
        }
    }
}
