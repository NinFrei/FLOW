<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title-block')</title>


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="img/Logo.jpg" />
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">



    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customstyles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <title>@yield('title-blok')</title>
</head>

<body>
    @include('inc.header')

    @if (Request::is('/'))
        @include('inc.text')
    @endif



    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="container mt-5">
            <div class="row">
                <div class="col-8">

                    <h1><a href="/messages">@yield('title')</a></h1>
                    @yield('content')

                    @if (Request::is('/contact'))
                        @include('inc.text')
                    @endif

                </div>
                <div class="col-4" @include('inc.aside') @include('inc.footer') <div><b>Dummy Footer:
                        {{ date('d.m.Y') }}
                    </b></div>

            </div>
        </div>
    </div>

    </div>
</body>

</html>
