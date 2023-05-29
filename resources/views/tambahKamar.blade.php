@extends('layouts.main')
@section('title','tambah data')
@section('content')

<form action="{{ route('public.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container shadow justify-content-center align-items-center p-3">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kamar</label>
            <input type="text" name="namaKamar" id="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control">
        </div>
        <div class="mb-6">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
        </div>
        <div class="mb-6">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-6">
            <input type="submit" value="Simpan" class="btn btn-outline-success m-3">
        </div>
    </div>
</form>

@endsection