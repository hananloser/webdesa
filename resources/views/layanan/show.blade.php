@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <span class="text-bold"> {{ ucwords($layanan->layanan) }}</span>
            <button class="btn btn-success float-right" id="btnform">Tambah Syrat</button>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                @forelse($layanan->syrats as $key => $value)
                <li class="list-group-item">{{$value->syrat}}</li>
            </ul>
            @empty
            <h1>Data Nya Kosong</h1>

            @endforelse
            <form action="{{route('syrat.store' , $layanan->id)}}" method="post">
                @csrf
                <div class="tampilform">

                </div>
                <div class="mt-3" id="kirimData">

                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let formHtml = `<div class="container">
                    <button class="btn btn-sm btn-primary float-right" id="btnid" onclick=addform() >+</button>

                        <input type="text" class="form-control mt-3" placeholder="Masukan Syarat" name="syrat[]">

                </div>`


    let newform = `<div class="container">
                    <button class="btn btn-sm btn-primary float-right" id="btnid" onclick=addform() >+</button>
                        <input type="text" class="form-control" placeholder="Masukan Syarat" name="syrat[]">
                </div>`
        let btn_submit = `
        <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plane"></i>
                </button>`
        let toggle = false

        let btn_form = document.querySelector('#btnform');

        btn_form.addEventListener('click' , () => {
            toggle = !toggle
            if(toggle){
                document.querySelector('.tampilform').innerHTML = formHtml
            }else {
                document.querySelector('.tampilform').innerHTML = ''
            }
        });

     function addform() {
        document.querySelector('.tampilform').innerHTML = formHtml += newform
        document.querySelector('#kirimData').innerHTML = btn_submit

    }






</script>

@endsection
