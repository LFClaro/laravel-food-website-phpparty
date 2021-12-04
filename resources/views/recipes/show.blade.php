@extends('layouts.main')

@section( 'title')
    {{ $recipes->name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>{{ $recipes->name }}</h1>
        <br>
        <h4>Description</h4>
        <p>{{ $recipes->description}}</p>
        <h4>Steps</h4>
        <p>{{ $recipes->steps}}</p>
        <h4>Comments</h4>
        <p>{{ $recipes->comments}}</p>


        <h4>User Reviews</h4>
        @foreach($reviews as $review)
            @if($review->recipe_id === $recipes->id)
                <p>{{$review->comment}}</p>
            @endif
        @endforeach
        <br /><br />

        <!--TODO: need to link with user id to add comments -->
{{--    </div>--}}
{{--    <div class="container align-items-center justify-content-center">--}}
{{--        <h1>Add Review </h1>--}}
{{--        <form action="{{ url('recipereview') }}" method="post">--}}
{{--            @csrf--}}
{{--            <div class="form-group">                --}}
{{--                <input type="hidden" class="form-control" name="userid" id="userid"--}}
{{--                       value="{{}}" />--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <input type="hidden" class="form-control" name="recipeid" id="recipeid"--}}
{{--                       placeholder="Enter description"  value="{{$recipes->id}}"/>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="comment">Comment: </label>--}}
{{--                <textarea type="text" class="form-control" name="comment" id="comment"--}}
{{--                          placeholder="Enter comments"></textarea>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <input type="submit" name="addRecipeReview"--}}
{{--                   class="btn btn-success float-right" id="btn-submit" value="Comment" />--}}


{{--            <a href="{{ url('recipes') }}" id="btn_back" class="btn btn-success float-right">Back</a>--}}
{{--        </form>--}}
{{--    </div>--}}
@endsection
