<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Hello!</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Menus
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/users')}}"><i class="fas fa-user"></i>&nbsp Users</a>
                        <a class="nav-link" href="{{ url('/imagesGalleries')}}"><i class="fas fa-image"></i>&nbsp Photo Gallery</a>
                        <a class="nav-link" href="{{ url('/viewcontactUs')}}"><i class="fas fa-message"></i>&nbsp Messages</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    LogIn Option
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <div class="authentication">
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
                    </nav>
                </div>
               
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>