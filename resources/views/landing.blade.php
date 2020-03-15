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
                <div class="page-header"
            style="background-image: url('{{asset('storage/bumdes/'.$item->foto)}}');">
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


<div class="blog-5">
    <div class="container">
      <h2 class="title text-center">Berita Seputar Desa</h2>
      @foreach($bumdes as $item)
      <div class="row">
        <div class="col-md-3">
          <div class="card" data-background="image" style="background-image: url('./assets/img/sections/pavel-kosov.jpg')">
            <div class="card-body">
              <h6 class="card-category">
                <i class="fa fa-newspaper-o"></i>Design</h6>
              <a href="#pablo">
                <h3 class="card-title">“Good Design”</h3>
              </a>
              <p class="card-description">
                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Jay-z...
              </p>
              <div class="card-footer">
                <div class="author">
                  <a href="#pablo" class="btn btn-primary">
                    <span>BACA</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card" data-background="image" style="background-image: url('./assets/img/sections/ilya-yakover.jpg')">
            <div class="card-body">
              <h6 class="card-category">
                <i class="fa fa-newspaper-o"></i> Development</h6>
              <a href="#pablo">
                <h3 class="card-title">In need of a good development</h3>
              </a>
              <p class="card-description">
                Speed up your development time or get inspired with the large number of example pages. You can jump start your development with our pre-built example pages.
              </p>
              <div class="card-footer">
                <div class="author">
                  <a href="#pablo" class="btn btn-primary">
                    <span>Baca</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" data-background="image" style="background-image: url('./assets/img/sections/vincent-versluis.jpg')">
            <div class="card-body">
              <h6 class="card-category">
                <i class="fa fa-newspaper-o"></i> Technology</h6>
              <a href="#pablo">
                <h3 class="card-title">A Little Adrift</h3>
              </a>
              <p class="card-description">
                But from the perspective of founders, there’s bound to be some confusion. In an ideal world we will see a meeting of the minds
              </p>
              <div class="card-footer">
                <div class="author">
                  <a href="#pablo" class="btn btn-success">

                    <span>Baca</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection
