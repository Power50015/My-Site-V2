<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.testimonial', ["testimonials" => Testimonial::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonialForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $image = $filename;
        }

        $testimonial = Testimonial::create([
            "client" => $request->client,
            "client_job" => $request->client_job,
            "text" => $request->text,
            "client_image" => $image,
        ]);


        return redirect()->route('testimonial.index')->with('success', 'Testimonial added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonialForm', ["testimonial" => $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $testimonial["client_image"] = $filename;
        }

        $testimonial["client"] = $request->client;
        $testimonial["client_job"] = $request->client_job;
        $testimonial["text"] = $request->text;

        $testimonial->save();
        return redirect()->route('testimonial.index')->with('success', 'Testimonial edied!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($testimonial)
    {
        if (Testimonial::where('id', $testimonial)->get()) {
            Testimonial::destroy($testimonial);
            return redirect()->route('testimonial.index')->with('success', 'Testimonial Deleted!');
        } else {
            return redirect()->route('testimonial.index');
        }
    }
}
