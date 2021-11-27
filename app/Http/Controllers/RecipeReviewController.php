<?php

namespace App\Http\Controllers;

use App\Models\RecipeReview;
use Illuminate\Http\Request;

class RecipeReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipereview = RecipeReview::all();
        return view('recipereview.index', compact('recipereview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecipeReview  $recipeReview
     * @return \Illuminate\Http\Response
     */
    public function show(RecipeReview $recipeReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecipeReview  $recipeReview
     * @return \Illuminate\Http\Response
     */
    public function edit(RecipeReview $recipeReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecipeReview  $recipeReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecipeReview $recipeReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecipeReview  $recipeReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecipeReview $recipeReview)
    {
        //
    }
}
