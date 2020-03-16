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
                        <td>{{$key + 1 }}</td>
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
                            <button class="btn btn-sm btn-danger" id="hapus" data-id="{{$item->id}}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $layanans->links() }}
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
    $(document).on('click' , '#hapus' , function(e){
        let id = $(this).data('id')
        let token = $("meta[name='csrf-token']").attr("content");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "layanan/"+id,
                    type: 'DELETE',
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function (){
                        console.log("it Works");
                    }
                });
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                window.location.replace("{!! route('layanan') !!}")
            }
        })
    });
</script>
@endsection
