<header>

    {{-- Navbar top --}}
    <nav class="navtop fluid-container">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#"><img src="{{ asset('img/DC_desktop_blue.svg') }}" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{ asset('img/DCUI_desktop.svg') }}" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{asset('img/DC_SHOP_desktop.svg')}}" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{asset('img/DC_community.svg')}}" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{asset('img/DC_on_HBOMAX_desktop.svg')}}" alt=""></a>
            </li>
        </ul>
    </nav>

    {{-- Navbar bottom --}}
    <nav class="navbottom">
        <div class="container d-flex align-items-center justify-content-around">
            <div class="log">
                <a class="nav-link active" href="#"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>
            <ul class="nav align-items-center justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">characters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics') }}">comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">tv</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">news</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">shop <i class="fas fa-caret-down"></i></a>
                </li>
            </ul>
            <div class="search">
                <form action="search" method="get">
                    <input type="search" name="search">
                    <span>search <i class="fas fa-search"></i></span>
                </form>
            </div>
        </div>
    </nav>
</header>
