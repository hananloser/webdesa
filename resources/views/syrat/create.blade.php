@extends('layouts.app')
@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header bg-info">
            <span class="text-white text-bold">{{__('Add Syrat')}}</span>
        </div>
        <div class="card-body">
            <form action="{{route('syrat.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('syarat') is-invalid @enderror" name="syarat" placeholder="Tambah syarat" value="{{old('syarat')}}" autocomplete="false">
                    @error('syarat')
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
