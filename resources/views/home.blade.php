@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                @can('isAdmin')
                <div class="card-header">Dashboard</div>
                @endcan
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Selamat Datang {{auth()->user()->role}}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
