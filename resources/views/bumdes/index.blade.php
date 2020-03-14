@extends('layouts.app')
@section('content')
<div class="col-xl-12 col-md-8">
    <div class="card">
        <div class="card-header">
            {{__('Kelembagaan')}}
            <a href="{{route('bumdes.create')}}" class="btn btn-primary float-right">Tambah</a>
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
                        <th>deskripsi</th>
                        <th>foto</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse($bumdes as $key => $item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td>
                                <img src="{{asset('storage/bumdes/500/'.$item->foto)}}" alt="" height="100" width="100">
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger" id="hapus" data-id="{{$item->id}}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr></tr>
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
    $(document).on('click', '#hapus', function(e) {
        let id = $(this).data('id')
        let token = $("meta[name='csrf-token']").attr("content");
        Swal.fire({
            title: 'Are you sure?'
            , text: "You won't be able to revert this!"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonColor: '#3085d6'
            , cancelButtonColor: '#d33'
            , confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: 'bumdes/' + id
                    , type: 'DELETE'
                    , data: {
                        "id": id
                        , "_token": token
                    , }
                    , success: function() {
                        Swal.fire(
                            'Deleted!'
                            , 'Your file has been deleted.'
                            , 'success'
                        )
                        window.location.replace("{!! route('bumdes.index') !!}");
                    }
                });
            }
        })
    });

</script>
@endsection
