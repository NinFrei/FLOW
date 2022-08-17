<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><a href="/messages">Flow</a></h1>
</body>

</html>-->
@extends('layouts.app')



@section('title-blok')
@endsection

@section('content')
    <h2>Create new message: </h2>

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        <!-- this blade directive is necessary for all form posts somewhere in between
                        the form tags -->
        @csrf
        <button type="submit">Submit</button>

    </form>

    <h2>Recent messages:</h2>
    <ul>
        @foreach ($messages as $message)
            <li>
                <b><a href="/message/{{ $message->id }}">{{ $message->title }}:</a></b><br>
                {{ $message->content }}<br>
                {{ $message->created_at->diffForHumans() }}
            </li>
        @endforeach
    </ul>
@endsection
