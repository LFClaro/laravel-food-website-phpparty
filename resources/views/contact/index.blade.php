@extends('layouts.main')

@section( 'title')
    All Your messages
@endsection

@section(('header'))
    @parent
@endsection
@section('content')
    <div class="container align-items-center justify-content-center">
        <h1 class="text-center">Messages</h1>
        <p class="text-center"><a href="{{ url("contact/create") }}" class="btn btn-success text-light">Send us a message</a></p>
        <table class="table table-striped table-light text-dark table-hover">
            <thead class="text-center text-black text-capitalize">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th colspan="2">Options</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $c)
                <tr onclick="window.location='{{ url('contact', $c->id) }}';">
                    <td><a href="{{ url('contact', $c->id) }}" class="link-info text-decoration-none">{{ $c->name }}</a></td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->subject }}</td>
                    <td>{{ $c->message }}</td>
                    <td>
                        <form method="get" action="{{ url('contact/' . $c->id . '/edit')}}">
                            @csrf
                            <input type="submit" class="btn btn-primary me-2" value="Update" />
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ url('contact/' . $c->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger me-2" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br />
    </div>
@endsection
@section('footer')
    @parent
@endsection
