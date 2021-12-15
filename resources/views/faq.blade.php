@extends('layouts.main')

@section( 'title')
    Main
@endsection

@section(('header'))
    @parent
@endsection
@section('content')
    <!-- TODO use above -->
    <div class="container align-items-center justify-content-center">
    <h1 class="text-center text-warning">FAQ</h1>
    <p class="lead text-light text-center">SEE OUR FAQS below</p>
    <li class="text-center">
        <ul class="text-center">Place question here</ul>
    </li>

    <!--show the existing questions and answer here-->
    @foreach($faqs as $f)
        <h4>{{ $f->question }}</h4>
        &emsp;<p>{{ $r->answer }}</p><br/>
    @endforeach


    <form method="post" action ="{{url('faqs')}}" >
        <div>
            <div class="form-group">
                <input type="text" class="form-control" name="question" id="question" placeholder="Your Question" required>
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <input type="hidden" name="answer" id="answer" value="Our phone number is 6475432876">
        <div class="row">
            <div class="col-12">
                <input type="submit" value="Send Question" class="btn-primary rounded py-2 px-4">
                <span class="submitting"></span>
            </div>
        </div>
    </form>
    </div>
@endsection
@section('footer')
    @parent
@endsection
