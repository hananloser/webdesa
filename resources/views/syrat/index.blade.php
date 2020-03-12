@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header">
            {{__('List Syarat')}}
        </div>
        <div class="card-body">
            {{$status ?? ''}}
            @if($status = Session::get('status'))
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
                    <th>Syrat Syrat</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($syrats as $key => $value)
                    <tr>
                        <td>{{$key + 1 }}</td>
                        <td>{{$value->layanan}}<br></td>
                        <td>
                            <ul>
                                @foreach($value->syrats as $key => $item)
                                <li>{{$item->syrat}}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="justify-content-center">

            </div>
        </div>
    </div>
</div>
@endsection
