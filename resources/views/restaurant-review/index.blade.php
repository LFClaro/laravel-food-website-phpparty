@extends('layouts.main')

@section( 'title')
    Restaurants
@endsection

@section(('header'))
    @parent
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('restaurant-reviews.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Create New
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Comment</th>
										<th>Restaurant Id</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($restaurantReviews as $review)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $review->comment }}</td>
											<td>{{ $review->restaurant_id }}</td>
											<td>{{ $review->user_id }}</td>

{{--                                            <td>--}}
{{--                                                <form action="{{ route('restaurant-reviews.destroy',$review->id) }}" method="POST">--}}
{{--                                                    <a class="btn btn-sm btn-primary " href="{{ route('restaurant-reviews.show',$review->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>--}}
{{--                                                    <a class="btn btn-sm btn-success" href="{{ route('restaurant-reviews.edit',$review->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
{{--                {!! $restaurantReviews->links() !!}--}}
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @parent
@endsection
