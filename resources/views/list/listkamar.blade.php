@extends('layouts.main')
@section('title','kamar')
@section('content')
<div class="container justify-content-center align-items-center">
    <h1 class="text-center m-1" style="padding-top: 3rem;">List Kamar</h1>
        <div class="row d-flex justify-content-center">
            @foreach ($kamar as $item)
            <div class="col">
            <div class="card m-3" style="width: 30rem;">
                <img src="{{ asset('gambar/'. $item->gambar) }}" class="card-img-top p-1 rounded" alt="{{ $item->namaKamar }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->namaKamar }}</h5>
                  <p class="card-text">{{ $item->harga }}</p>
                  <a href="{{ route('detail', $item->id) }}" class="btn btn-primary">Pesan Sekarang</a>
                </div>
              </div>
            </div>
            @endforeach
    </div>
</div>
@endsection