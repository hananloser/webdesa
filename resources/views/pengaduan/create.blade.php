@extends('layouts.app')
@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header bg-info">
            <span class="text-white text-bold">{{__('Pengaduan')}}</span>
        </div>
        <div class="card-body">
            <form action="{{route('pengaduan.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        name="nama" placeholder="Nama" value="{{old('nama')}}"
                        autocomplete="false">
                    @error('nama')
                    <small class="invalid-feedback">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" class="form-control @error('nohp') is-invalid @enderror"
                        name="nohp" placeholder="nohp" value="{{old('nohp')}}"
                        autocomplete=false >
                    @error('nohp')
                    <small class="invalid-feedback">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" class="form-control @error('pengaduan') is-invalid @enderror"
                        name="pengaduan" placeholder="pengaduan" value="{{old('pengaduan')}}"
                        autocomplete="false">
                    @error('pengaduan')
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
