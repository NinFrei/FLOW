@extends('layouts.app')



@section('title-blok')
    {{ $data->subject }}
@endsection

@section('content')
    <h2>{{ $data->subject }}</h2>
    <div class="alert alert-info">
        <p>{{ $data->name }}</p>
        <p>{{ $data->message }}</p>
        <p>{{ $data->email }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Verändern</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Löschen</button></a>
    </div>
@endsection
