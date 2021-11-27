<?php

namespace App\Http\Controllers;

use App\Models\RestaurantReview;
use Illuminate\Http\Request;

class RestaurantReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantReview = RestaurantReview::all();
        return view('restaurantReview.index', compact('restaurantReview'));
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
     * @param  \App\Models\RestaurantReview  $restaurantReview
     * @return \Illuminate\Http\Response
     */
    public function show(RestaurantReview $restaurantReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RestaurantReview  $restaurantReview
     * @return \Illuminate\Http\Response
     */
    public function edit(RestaurantReview $restaurantReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RestaurantReview  $restaurantReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestaurantReview $restaurantReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RestaurantReview  $restaurantReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestaurantReview $restaurantReview)
    {
        //
    }
}
