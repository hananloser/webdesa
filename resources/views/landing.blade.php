@extends('layouts.landing')
@section('content')
<div class="wrapper bg-dark">
    <div id="particles-js">
        <div class="container-fluid">
            <br>
            <div class="row justify-content-center ">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <img src="{{asset('assets/img/logo.png')}}" height="150">
                    </div>
                </center>
            </div>
            <div class="row justify-content-center ">
                <blockquote class="blockquote text-center">
                    <h2 class="h3 text-white text-bold">PEMERINTAH KABUPATEN LUWU TIMUR</h2>
                    <h3 class="text-white">DESA BANGUN JAYA</h3>
                </blockquote>
            </div>
        </div>
        <div class="divider"></div>
        <br>
        <br>
        <div class="container mr-3">
            <div class="row flex-row">
                <div class="col">
                    <a href="">
                        <i class="fa fa-4x fa-user ml-4 text-white text-center"></i>
                        <h5 class="text-white">Profile Desa</h5>
                    </a>
                </div>
                <div class="col">
                    <a href="">
                        <i class="fa fa-4x fa-eye ml-3 text-danger text-center"></i>
                        <h5 class="text-white">Visi & Misi</h5>
                    </a>
                </div>
                <div class="col">
                    <i class="fa fa-4x fa-bar-chart text-warning"></i>
                    <h5 class="text-white">Profile</h5>
                </div>
                <div class="col">
                    <i class="fa fa-4x fa-bar-chart text-danger"></i>
                    <h5 class="text-white">Profile</h5>
                </div>
            </div>
        </div>
        <div class="container mr-3">
            <div class="row flex-row">
                <div class="col">
                    <i class="fa fa-4x fa-bar-chart text-white text-center"></i>
                    <h5 class="text-white">Profile</h5>
                </div>
                <div class="col">
                    <i class="fa fa-4x fa-bar-chart text-primary"></i>
                    <h5 class="text-white">Profile</h5>
                </div>
                <div class="col">
                    <i class="fa fa-4x fa-bar-chart text-warning"></i>
                    <h5 class="text-white">Profile</h5>
                </div>
                <div class="col">
                    <i class="fa fa-4x fa-bar-chart text-danger"></i>
                    <h5 class="text-white">Profile</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
