<nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-logo nav-item">
            <a href="#" class="nav-link">
                <span class="link-text">Web Desa</span>
                <i class="link-icon fas fa-fw fa-angle-double-right"></i>
            </a>
        </li>
        <li class="nav-item {{(request()->is('/') ? 'active' : '')}}">
            <a href="{{url('/')}}" class="nav-link">
                <i class="link-icon fas fa-fw fa-star"></i>
                <span class="link-text">Home</span>
            </a>
        </li>
        <li class="nav-item {{(request()->is('landing/aparat') ? 'active' : '')}}">
            <a href="{{route('landing.aparat')}}" class="nav-link">
                <i class="link-icon fas fa-fw fa-person-booth"></i>
                <span class="link-text">Aparat Desa</span>
                {{-- <span class="link-badge">10</span> --}}
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="link-icon fas fa-fw fa-play-circle"></i>
                <span class="link-text">Media</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="link-icon fas fa-fw fa-cog"></i>
                <span class="link-text">Setting</span>
            </a>
        </li>
        @if(Route::has('login'))
        @auth
        <li class="nav-item">
            <a href="{{url('admin/home')}}" class="nav-link">
                <i class="link-icon fas fa-fw fa-home"></i>
                <span class="link-text">Home</span>
            </a>
        </li>
        @else
        <li class="nav-item">
            <a href="{{route('login')}}" class="nav-link">
                <i class="link-icon fas fa-fw fa-power-off"></i>
                <span class="link-text">Login</span>
            </a>
        </li>

        @endauth
        @endif
        <li class="nav-item nav-bottom">
            <button id="btnTheme" class="nav-link">
                <i class="link-icon fas fa-fw fa-paint-roller"></i>
                <span class="link-text">Change Theme</span>
            </button>
        </li>
    </ul>
</nav>
