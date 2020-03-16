<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="https://demos.creative-tim.com/paper-kit/index.html" rel="tooltip"
                title="Coded by Creative Tim" data-placement="bottom" target="_blank">
                Bangun Jaya
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a href="{{route('landing.layanan')}}" class="nav-link"><i class="nc-icon nc-layout-11"></i> Layanan </a>
                </li>
                <li class="nav-item">
                <a href="{{route('landing.pengaduan')}}" class="nav-link"><i class="nc-icon nc-book-bookmark"></i>Pengaduan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
