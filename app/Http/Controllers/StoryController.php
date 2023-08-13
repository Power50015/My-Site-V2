<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Http\Requests\StoreStoryRequest;
use App\Http\Requests\UpdateStoryRequest;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.story',
            ["stories" => Story::all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.storyForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStoryRequest $request)
    {
        if ($request->file('client_image')) {
            $file = $request->file('client_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $client_image = $filename;
        }
        if ($request->file('client_logo')) {
            $file = $request->file('client_logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $client_logo = $filename;
        }
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $image = $filename;
        }

        $story = Story::create([
            "name" => $request->name,
            "title" => $request->title,
            "description" => $request->description,
            "client_name" => $request->client_name,
            "client_job" => $request->client_job,
            "client_image" => $client_image,
            "client_logo" => $client_logo,
            "statisticTitle1" => $request->statisticTitle1,
            "statisticNumber1" => $request->statisticNumber1,
            "statisticTitle2" => $request->statisticTitle2,
            "statisticNumber2" => $request->statisticNumber2,
            "link" => $request->link,
            "image" => $image,
            "videoLink" => $request->videoLink,
            "linkText" => $request->linkText
        ]);

        return redirect()->route('story.index')->with('success', 'Story added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        return view('admin.storyForm', ["story" => $story]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStoryRequest $request, Story $story)
    {
        if ($request->file('client_image')) {
            $file = $request->file('client_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $story["client_image"] = $filename;
        }
        if ($request->file('client_logo')) {
            $file = $request->file('client_logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $story["client_logo"] = $filename;
        }
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $story["image"] = $filename;
        }

        $story["name"] = $request->name;
        $story["title"] = $request->title;
        $story["description"] = $request->description;
        $story["client_name"] = $request->client_name;
        $story["client_job"] = $request->client_job;
        $story["statisticTitle1"] = $request->statisticTitle1;
        $story["statisticNumber1"] = $request->statisticNumber1;
        $story["statisticTitle2"] = $request->statisticTitle2;
        $story["statisticNumber2"] = $request->statisticNumber2;
        $story["link"] = $request->link;
        $story["videoLink"] = $request->videoLink;
        $story["linkText"] = $request->linkText;
        

        $story->save();

        return redirect()->route('story.index')->with('success', 'Story edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($story)
    {
        if (Story::where('id', $story)->get()) {
            Story::destroy($story);
            return redirect()->route('story.index')->with('success', 'Story Deleted!');
        } else {
            return redirect()->route('story.index');
        }
    }
}
