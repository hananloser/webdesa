@extends('layouts.app')
@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header">
            {{__('List Layanan')}}
            <a href="{{route('layanan.create')}}" class="btn btn-primary float-right">Tambah</a>

        </div>
        <div class="card-body">
            @if(!empty($status))
            <div class="alert alert-info alert-with-icon">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
                <span data-notify="icon" class="tim-icons icon-trophy"></span>
                <span><b> Horee 😎 !! - </b> {{$status}}</span>
            </div>
            @endif
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Layanan</th>
                    <th>Action</th>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection