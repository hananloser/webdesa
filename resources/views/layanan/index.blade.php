@extends('layouts.app')
@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header">
            {{__('List Layanan')}}
            <a href="{{route('layanan.create')}}" class="btn btn-primary float-right">Tambah</a>

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
                    <th>Action</th>
                </thead>
                <tbody>

                    @foreach($layanans as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->layanan}}</td>
                        <td>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="jumlah syrat di dalam layanan"
                                class="btn btn-sm btn-warning  floating float-left">
                                {{ count($item->syrats) }}
                            </a>
                            <a href="{{route('layanan.edit' , $item->id)}}" data-toggle="tooltip" data-placement="top"
                                title="Edit layanan " class="btn btn-sm btn-primary floating float-left">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('layanan.show' , $item->id)}}" data-toggle="tooltip" data-placement="top"
                                title="Tampilkan syarat " class="btn btn-sm btn-info floating float-left">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form action="{{route('layanan.delete' , $item->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger floating" data-toggle="tooltip"
                                    data-placement="top" title="Hapus ">

                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $layanans->links()}}
        </div>
    </div>
</div>
@endsection
