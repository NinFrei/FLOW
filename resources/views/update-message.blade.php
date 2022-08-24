@extends('layouts.app')

@section('title-blok')
    Aktualisierung eines Eintrags
@endsection

@section('content')
    <h1>Aktualisierung eines Eintrags</h1>


    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf

        <br>
        <div class="form-group">
            <label for="name">Name einfügen</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Name einfügen" id="name"
                class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Email einfügen" id="email"
                class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="name">Thema</label>
            <input type="text" name="subject" value="{{ $data->subject }}"placeholder="Thema" id="subject"
                class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="message">Nachricht</label>
            <textarea name="message" id="message" class="form-control" placeholder="Füge deine Nachricht">{{ $data->message }}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Aktualisieren</button>
    </form>
@endsection
