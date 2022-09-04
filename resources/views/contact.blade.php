@extends('layouts.app')

<!--@section('title-blok')
    Kontakt
@endsection-->

@section('contact')
<div class="container-fluid mt-3">

    <h1>Kontakt</h1>

   <div> @if (Request::is('/')) @include('inc.text') @endif</div>
    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <br>
        <div class="cadr">
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
            <label for="message">Nachricht</label>
            <textarea name="message" id="message" class="form-control" placeholder="Füge deine Nachricht"></textarea>
        </div>
</div>   
        <br>
        <button type="submit" class="btn btn-success">Schicken</button>
    </form>
</div>
@endsection



@section('title-blok')
    Contact
@endsection
