<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{

    public function index()
    {
        $faqs = FAQ::all();
        return view('FAQs.index',compact('faqs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(FAQ $fAQ)
    {
        //
    }

    public function edit(FAQ $fAQ)
    {
        //
    }

    public function update(Request $request, FAQ $fAQ)
    {
        //
    }

    public function destroy(FAQ $fAQ)
    {
        //
    }
}
