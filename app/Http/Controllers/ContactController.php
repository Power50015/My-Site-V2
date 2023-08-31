<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Mail\ConfirmMail;
use App\Models\Template;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.contact',
            ["contacts" => Contact::all()]
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
    public function store(StoreContactRequest $request)
    {
        $data = Contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "subject" => $request->subject,
            "message" => $request->message,
        ]);

        $mailData = [
            "name" => $data->name,
            "email" => $data->email,
            "phone" => $data->phone,
            "subject" => $data->subject,
            "messagex" => $data->message,
        ];
        
        Mail::to("ma@mohamed-ashamallah.com")->send(new ConfirmMail($mailData));

        return redirect()->route('thankYou');
    }

    /**
     * Display the specified resource.
     */
    public function show($contact)
    {
        return view(
            'admin.singleContact',
            ["contact" => Contact::find($contact)]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
