@extends('layouts.landing')
@section('content')

<div class="page-carousel">
    <div class="filter"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="page-header"
                    style="background-image: url('https://images.unsplash.com/photo-1498063401574-13cbee350467?dpr=2&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1000&amp;q=80&amp;cs=tinysrgb&amp;crop=');">
                    <div class="content-center">
                        <div class="container">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($bumdes as $item)
            <div class="carousel-item">
                <div class="page-header" style="background-image: url('{{asset('storage/bumdes/'.$item->foto)}}');">
                    <div class="content-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <h1 class="title text-white">{{$item->deskripsi}}</h1>
                                    <h5 class="text-white"></h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button"
            data-slide="prev">
            <span class="fa fa-angle-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button"
            data-slide="next">
            <span class="fa fa-angle-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



<div class="container">
    <div class="card">
        <h1 class="header">Halaman Pengaduan</h1>
    </div>
</div>
@endsection
