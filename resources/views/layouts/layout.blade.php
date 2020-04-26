<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="/">
                    <img src="/img/3.png" class="logo" alt="Native Delicacies Logo">
                </a>
                {{-- <a href="#" class="navbar-brand ml-3">Native Delicacies</a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/reservations" class="nav-link">Reservations</a></li>
                        <li class="nav-item"><a href="/offers" class="nav-link">Offers</a></li>
                        <li class="nav-item"><a href="/menu" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                    </ul>
                </div>
            </nav>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </header>
            <div class="container-fluid p-0">
                <div class="site-content">
                    <div class="d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <h1 class="site-title">{{$settings["general_setting"]->site_title}}</h1>
                            <div class="d-flex flex-row">
                                <a href="/reservations" class="booking">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @yield('content')
        @include('includes.map')
        @include('includes.footer')
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>