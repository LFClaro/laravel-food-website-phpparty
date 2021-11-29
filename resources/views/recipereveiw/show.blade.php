@extends('layouts.main')

@section( 'title')
    Details of Comment
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h3 class="text-black-50">Comment</h3>
        <br>
        <p>{{ $recipereview->comment}}</p>
        <br /><br />
        <a href="{{ url('recipereview') }}" id="btn_back" class="btn btn-success float-right">Back</a>
    </div>
@endsection
