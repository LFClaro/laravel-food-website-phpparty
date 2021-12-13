@extends('layouts.main')

@section( 'title')
    {{ __('question edit') }}
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>Edit Question - {{ $faq->question }}</h1>
        <form action="{{ url('faqs', $faq->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="make">Question: </label>
                <input type="text" class="form-control" name="question" id="question" value="{{ $faq->question }}"
                    placeholder="Enter Question">
            </div>
            <div class="form-group">
                <label for="model">Answer: </label>
                <input type="text" class="form-control" name="answer" id="answer"
                          placeholder="Enter Answer" value="{{ $faq->answer }}">
            </div>

            {{--TODO:need to go somewhere if the admin click back--}}
            <div class="row">
                <div class="col">
                    <a href="{{ url('') }}" id="btn_back" class="btn btn-danger text-light float-start">Back</a>
                </div>
                <div class="col">
                    <button type="submit" name="editQuestion"
                            class="btn btn-success text-light float-end" id="btn-submit">
                        Update Question
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
