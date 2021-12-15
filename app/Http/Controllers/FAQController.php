<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{

    //from main page , after the user clicked the FAQS in the footer
    public function index()
    {
        $faqs = FAQ::all();
        return view('faqs.index',compact('faqs'));
    }

    public function create()
    {
        $faqs = FAQ::all();
        return view("faqs",compact('faqs'));
    }

    //once the user ask a question in faqs page
    public function store(Request $request)
    {
        FAQ::create($request->all());
        $faqs = FAQ::all();
        return view('faqs.index',compact('faqs'));
    }

    //TODO: dont know where to put the access point
    public function show(FAQ $fAQ)
    {
        $faqs = FAQ::all();
        return view('faqs',compact('faqs'));
    }

    public function edit(FAQ $fAQ)
    {
        return view('faqs.edit' );
    }

    public function update(Request $request, FAQ $fAQ)
    {
        $fAQ->update($request->all());
        return redirect('faqs');
    }

    public function destroy(FAQ $fAQ)
    {
        $fAQ->delete();
        return redirect('faqs/show');
    }
}
