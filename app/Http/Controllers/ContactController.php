<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO show only contact message from current user - or all for admin
        //$contacts = Contact::with('user')->get();
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
       //return view('contact.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO: for users
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //Contact::create($request->all());
        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);


        Contact::create($validated);
        // below is for sencing email
        Mail::to($request->email)->send(new WelcomeMail()); //
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
        return view('contact.show', ['contacts' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
        return view('contact.edit', ['contacts' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        //$contact->update($request->all());
        $contact->update($validated);
        return redirect('contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();
        return redirect('recipes');
    }
}
