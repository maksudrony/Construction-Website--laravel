<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="{{url('/')}}" class="p-0">
        <img src="images/logo.png" height="60px" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-1 p-lg-0">
            <a href="" class="nav-item nav-link active">Home</a>
            <a href="#about-section" class="nav-item nav-link">About Us</a>
            <a href="" class="nav-item nav-link">Our Services</a>
            <a href="" class="nav-item nav-link">Ongoing Projects</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                    <a href="" class="dropdown-item">Features</a>
                    <a href="" class="dropdown-item">Features</a>
                    <a href="" class="dropdown-item">Features</a>
                </div>
            </div>
            <a href="#contact" class="nav-item nav-link">Contact Us</a>

            <div class="authentication">
                <style>
                    .authentication .a {
                        display: none;
                    }
                </style>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-0 text-right">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> --}}
                        <x-app-layout>
    
                        </x-app-layout>
                    @else
                        <a href="{{ route('login') }}" class="mt-3 btn btn-success text-white">Log in</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mt-3 btn btn-warning text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>

        </div>
        
    </div>
</nav>