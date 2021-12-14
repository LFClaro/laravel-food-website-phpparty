<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Recipe;
use App\Models\RecipeReview;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::with('country')->get();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('recipes.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
         * $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        //$contact->update($request->all());
        $contact->update($validated);
         */
        $validated = $request->validate([
            'name' => 'required|min:2',
            'description' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
            'website' => 'required|url',
            'comments' => 'required',
            'calories' => 'required',
            'serving' => 'required',
            'rating' => 'required',
            'country_id' => 'required',
        ]);

        //Recipe::create($request->all());
        Recipe::create($validated);
        return redirect('recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $reviews = RecipeReview::all();
        return view('recipes.show', ['recipes' => $recipe], compact('reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        $countries = Country::all();
        return view('recipes.edit', ['recipes' => $recipe], compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'description' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
            'website' => 'required|url',
            'comments' => 'required',
            'calories' => 'required',
            'serving' => 'required',
            'rating' => 'required',
            'country_id' => 'required',
        ]);

        //$recipe->update($request->all());
        $recipe->update($validated);
        return redirect('recipes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect('recipes');
    }
}
