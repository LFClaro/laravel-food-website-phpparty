<?php
$apiKey = "4b0d1232cca66e6ab418389b2cbd1a5c";
//TODO need to split address on comas and read second split - address, city, postal code
//TODO - issues with richmond hill or cities with space in them - %20
$string =$restaurants->address; // set string we want to use
$str_arr = preg_split("/\,/", $string); // split the sting on commas
$spaces = trim($str_arr[1]); // trim off the white space
$cityId = str_replace(" ", "%20", $spaces); // gets rid of spaces between words for url
$OWMApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $cityId . "&units=metric&APPID=" . $apiKey;
//$OWMApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=Richmond%20Hill&units=metric&APPID=" . $apiKey;
// pass in our strings need to complete url

$ch = curl_init();
// Returns a cURL handle on success, false on errors.

// curl_setopt sets the URL and other appropriate options
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $OWMApiUrl);// pass in our open weather api api string
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
// grabs URL and pass it to the browser

curl_close($ch); // close the resource and frees up some space
$data = json_decode($response); // set json object for work
$currentTime = time(); // get current time, maybe will use but will have to format
// now can work with data
?>

@extends('layouts.main')

@section( 'title')
    {{ $restaurants->name }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>{{ $restaurants->name }}</h1>
        <h3>{{ $restaurants->address }}</h3>
        <br /><br />
        <h4>User Reviews</h4>
        @foreach($reviews as $review)
            @if($review->restaurant_id === $restaurants->id)
                <p>{{$review->comment}}</p>
            @endif
        @endforeach
        <br>
        <h3 class="text-warning">Current Weather in {{$str_arr[1]}}</h3>
        <p><?php echo date("l, jS F, Y",$currentTime); ?></p>
        <p>
            <?php echo ucwords($data->weather[0]->description); ?>
                <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon"
                />
        </p>
        <p class="text-warning">
             Max Temp: <?php echo $data->main->temp_max; ?>&deg;C
            <span
                class="text-danger">Min Temp: <?php echo $data->main->temp_min; ?>&deg;C
            </span>
        </p>
        <p>Humidity: <?php echo $data->main->humidity; ?> %</p>
        <p>Wind: <?php echo $data->wind->speed; ?> km/h</p>
        <br><br>
        {{--<a href="{{ url('restaurants') }}" id="btn_back" class="btn btn-success float-right">Back</a>--}}
        <div>
            <h4>Add Review </h4>
            <form action="{{ url('review') }}" method="post">
                @csrf
                <div class="form-group">
                    <!--TODO: Work on it-->
                    <input type="hidden" class="form-control" name="user_id" id="userid"
                           value="{{$id = Auth::id()}}" />
                </div>
                <div class="form-group">
                    <!--TODO: Work on it-->
                    <input type="hidden" class="form-control" name="restaurant_id" id="restaurantid"
                           value="{{$restaurants->id}}" />
                </div>
                <div class="form-group">
                    <label for="comment">Comment: </label>
                    <textarea type="text" class="form-control" name="comment" id="comment"
                              placeholder="Enter Comments"></textarea>
                </div>
                <br />
                <input type="submit" name="addReview"
                       class="btn btn-success float-right" value="Comment" />
                <a href="{{ url('review') }}" id="btn_back" class="btn btn-success float-left">Back</a>
            </form>
        </div>
    </div>

    <!--TODO testing below -->
{{--    <p>{{$str_arr[1]}}</p>--}}
{{--    <p><?php var_dump($data); ?></p>--}}
{{--    <p>{{$cityId}}</p>--}}

@endsection
