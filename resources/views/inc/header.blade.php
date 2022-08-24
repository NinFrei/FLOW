@section('header')
    <div class="header1 container-fluid">
        <div class="col-md-4">
            <a href="/" target="_blank" rel="noopener noreferrer">
                <img class="logo1" src="/img/Logo.jpg" class="headerlogo" alt="Logo">
            </a>
        </div>

        <div class="col-md-8">
            <span class="headertext1">FLOW</span>
        </div>

    </div>


    <div class="my-0 mr-md-auto font-weight-normal"></a>

        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('home') }}">Home</a>
            <a class="p-2 text-dark" href="{{ route('modetrends') }}">Modetrends</a>
            <a class="p-2 text-dark" href="{{ route('beauty') }}">Beauty</a>
            <a class="p-2 text-dark" href="{{ route('empowerment') }}">Female empowerment</a>
            <a class="p-2 text-dark" href="{{ route('lifestyle') }}">Lifestyle</a>
            <a class="p-2 text-dark" href="{{ route('shop') }}">Shop</a>
            <a class="p-2 text-dark" href="{{ route('aboutme') }}">About me</a>
            <a class="p-2 text-dark" href="{{ route('contact') }}">Contact</a>
            <a class="p-2 text-dark" href="{{ route('contact-data') }}">Nachricht</a>
        </nav>

    </div>
