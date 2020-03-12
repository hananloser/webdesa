@extends('layouts.app')
@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header bg-info">
            <span class="text-white text-bold">{{__('Layanan')}}</span>
        </div>
        <div class="card-body">

            <form action="{{route('layanan')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('layanan') is-invalid @enderror" name="layanan" placeholder="Tambah Layanan" value="{{old('layanan')}}" autocomplete="false">
                    @error('layanan')
                    <small class="invalid-feedback">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection