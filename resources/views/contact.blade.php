@extends('layouts.app')



@section('content')
    <h1>Contact</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <br>
        <div class="form-group">
            <label for="name">Name einfügen</label>
            <input type="text" name="name" placeholder="Name einfügen" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Email einfügen" id="email" class="form-control">
        </div>

        <br>
        <div class="form-group">
            <label for="name">Thema</label>
            <input type="text" name="subject" placeholder="Thema" id="subject" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="messege">Nachricht</label>
            <textarea name="messege" id="messege" class="form-control" placeholder="Füge deine Nachricht"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Schicken</button>
    </form>
@endsection

@section('aside')
    @parent
    <p>etwas Text</p>
@endsection

@section('title-blok')
    Contact
@endsection
