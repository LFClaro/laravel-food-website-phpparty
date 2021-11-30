<?php

namespace App\Http\Controllers;

use App\Models\RestaurantReview;
use Illuminate\Http\Request;

/**
 * Class RestaurantReviewController
 * @package App\Http\Controllers
 */
class RestaurantReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantReviews = RestaurantReview::all();

        return view('restaurant-review.index', compact('restaurantReviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurantReview = new RestaurantReview();
        return view('restaurant-review.create', compact('restaurantReview'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RestaurantReview::$rules);

        $restaurantReview = RestaurantReview::create($request->all());

        return redirect()->route('restaurant-reviews.index')
            ->with('success', 'RestaurantReview created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurantReview = RestaurantReview::find($id);

        return view('restaurant-review.show', compact('restaurantReview'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurantReview = RestaurantReview::find($id);

        return view('restaurant-review.edit', compact('restaurantReview'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RestaurantReview $restaurantReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestaurantReview $restaurantReview)
    {
        request()->validate(RestaurantReview::$rules);

        $restaurantReview->update($request->all());

        return redirect()->route('restaurant-reviews.index')
            ->with('success', 'RestaurantReview updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $restaurantReview = RestaurantReview::find($id)->delete();

        return redirect()->route('restaurant-reviews.index')
            ->with('success', 'RestaurantReview deleted successfully');
    }
}
