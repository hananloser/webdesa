@extends('layouts.app')
@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header bg-info">
            <span class="text-white text-bold">{{__('Pengaduan')}}</span>
        </div>
        <div class="card-body">
            <form action="{{route('bumdes.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                        name="deskripsi" placeholder="deskripsi" value="{{old('deskripsi')}}"
                        autocomplete="false">
                    @error('deskripsi')
                    <small class="invalid-feedback">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                        name="foto" placeholder="foto" value="{{old('foto')}}"
                        autocomplete="false">
                    @error('foto')
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
