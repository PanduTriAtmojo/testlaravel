@extends('layouts.main')
@section('title', 'tambah')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col p-5">
            <form action="tmbhtentang" method="post" enctype="multipart/form-data" class="border p-3 rounded shadow">
                @csrf
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama</label>
                    <input type="text" name="Nama" id="Nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select name="Kelas" id="kelas" class="form-control">
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Jurusan" class="form-label">Jurusan</label>
                    <input type="text" name="Jurusan" id="Jurusan" class="form-control"
                        value="Rekayasa Perangkat Lunak" readonly>
                </div>
                <div class="mb-3">
                    <label for="absen" class="form-label">No Absen</label>
                    <input type="text" name="NoAbsen" id="absen" class="form-control" min="1" max="35">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="Gambar" id="gambar" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Tambah" class="btn btn-outline-success">
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
