@extends('layouts.app')



@section('title-blok')
    Alle Nachrichten
@endsection

@section('content')
    <h2>Neue Nachrichten: </h2>

    @foreach ($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Submit</button></a>
        </div>
    @endforeach
@endsection
