@extends('layouts.main')

@section( 'title')
    {{ $restaurantReview->id }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Restaurant Review</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('restaurant-reviews.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Comment:</strong>
                            {{ $restaurantReview->comment }}
                        </div>
                        <div class="form-group">
                            <strong>Restaurant Id:</strong>
                            {{ $restaurantReview->restaurant_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $restaurantReview->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
