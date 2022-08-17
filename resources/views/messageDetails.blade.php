@extends('layouts.app')

@section('title-blok')
    Details
@endsection

@section('content')
    <h1>Details</h1>
    <h3>{{ $message->title }}</h3>
    <p>{{ $message->content }}</p>

    <form action="/message/{{ $message->id }}" method="post">

        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
@endsection
