@extends('layouts.main')

@section( 'title')
    Question
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <h1>This is the faq show page</h1>
        @foreach($faqs as $f)
            <tr>
                <td>{{$f->question}}</td>
                <td>{{$f->answer}}</td>
                <td>
                    <form method="get" action="{{ url('faqs/' . $f->id . '/edit')}}">
                        @csrf
                        <input type="submit" class="btn btn-primary text-light" value="Answer"/>
                    </form>
                </td>
                <td>
                    <form method="post" action="{{ url('faqs/' . $r->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger text-light" value="Delete" />
                    </form>
                </td>

            </tr>
        @endforeach
    </div>
@endsection
