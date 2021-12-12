<?php

namespace App\Http\Controllers;

use App\Models\RestaurantReview;
use Illuminate\Http\Request;

class RestaurantReviewController extends Controller
{
    public function index()
    {
        $restaurantReviews = RestaurantReview::all();
        return view('restaurantreview.index', compact('restaurantReviews'));
    }

    public function create()
    {
        $restaurantReview = new RestaurantReview();
        return view('restaurantreview.create', compact('restaurantReview'));
    }

    public function store(Request $request)
    {
//        request()->validate(RestaurantReview::$rules);

        $restaurantReview = RestaurantReview::create($request->all());

        return redirect('restaurantreview.index');
    }

    public function show($id)
    {
        $restaurantReview = RestaurantReview::find($id);

        return view('restaurantreview.show', compact('restaurantReview'));
    }

    public function edit($id)
    {
        $restaurantReview = RestaurantReview::find($id);

        return view('restaurantreview.edit', compact('restaurantReview'));
    }

    public function update(Request $request, RestaurantReview $restaurantReview)
    {
//        request()->validate(RestaurantReview::$rules);

        $restaurantReview->update($request->all());

        return redirect('/review');
    }

    public function destroy($id)
    {
        $restaurantReview = RestaurantReview::find($id)->delete();

        return redirect()->route('restaurantreviews.index')
            ->with('success', 'RestaurantReview deleted successfully');
    }
}
