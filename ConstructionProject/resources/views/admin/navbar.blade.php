<nav class="sb-topnav navbar navbar-expand navbar-expand-sm navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="">FARID ENTERPRISE</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    {{-- <a href="{{ url ('/')}}" class="btn btn-success fw-bold text-white d-flex">Go To Website</a> --}}
    <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <style>
                .navbar-nav {
                    display: none;
                }
            </style>
            <div class="">
                @if (Route::has('login'))
                <div class=" fixed top-0 right-0 justify-content-center">
                    @auth
                    <x-app-layout>
        
                    </x-app-layout>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success text-white">Log in</a>
        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-warning text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </ul>
</nav>