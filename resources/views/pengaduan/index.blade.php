@extends('layouts.app')
@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header">
            {{__('List Pengaduan')}}
            <a href="{{route('pengaduan.create')}}" class="btn btn-primary float-right">Tambah</a>
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
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>No Pengaduan</th>
                        <th>Nama</th>
                        <th>Pengaduan</th>
                        <th>No Hp</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse($pengaduan as $index => $value)
                        <tr>
                            <td>{{$index + 1 }}</td>
                            <td>{{'CF-'.$value->no_pengaduan}}</td>
                            <td>{{$value->nama}}</td>
                            <td>{{$value->pengaduan}}</td>
                            <td>{{$value->nohp}}</td>
                            <td>
                                <button class="btn btn-sm btn-danger" id="hapus" data-id="{{$value->id}}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <h3>Data nya Kosong</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
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
                    url: "pengaduan/"+id,
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
                window.location.replace("{!! route('pengaduan.index') !!}");
            }
        })



    });

</script>

@endsection
