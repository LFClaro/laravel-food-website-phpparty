<?php

public function index()
{
    $recipes = Recipe::with('country')->get();
    return view('recipes.index', compact('recipes'));
}

public function show(Recipe $recipe)
{
    $reviews = RecipeReview::all();
    return view('recipes.show', ['recipes' => $recipe], compact('reviews'));
}
