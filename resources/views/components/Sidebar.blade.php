<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
            <img src="{{asset('assets/img/logo.png')}}" class="navbar-brand-img" alt="...">
            <span class="nav-link-text">Web Bangun Jaya</span>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('admin/home')) ? 'active' : ''  }}" href="{{url('/admin/home')}}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    @can('isAdmin')
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('admin/layanan')) ? 'active' : ''}}" href="{{url('admin/layanan')}}">
                            <i class="ni ni-planet text-orange"></i>
                            <span class="nav-link-text">{{__('Layanan')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('bumdes.index')}}">
                            <i class="ni ni-pin-3 text-primary"></i>
                            <span class="nav-link-text">{{__('Bumdes')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{(request()->is('admin/pengaduan')) ? 'active' : ''}}" href="{{route('pengaduan.index')}}">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">{{__('Pengaduan')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('kelembagaan.index')}}">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">{{__('Kelembagaan')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">
                            <i class="fa fa-chart-area text-pink"></i>
                            <span class="nav-link-text">{{__('statistik')}}</span>
                        </a>
                    </li>
                    @endcan
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
            </div>
        </div>
    </div>
</nav>
