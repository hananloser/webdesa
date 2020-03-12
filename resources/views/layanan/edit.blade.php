@extends('layouts.app')
@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header bg-info">
            <span class="text-white text-bold">{{__('Layanan')}}</span>
        </div>
        <div class="card-body">

            <form action="{{route('layanan.update' , $layanan->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" class="form-control @error('layanan') is-invalid @enderror" name="layanan"  value="{{$layanan->layanan}}" autocomplete="false">
                    @error('layanan')
                    <small class="invalid-feedback">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    update
                </button>
            </form>
        </div>
    </div>
</div>
@endsection