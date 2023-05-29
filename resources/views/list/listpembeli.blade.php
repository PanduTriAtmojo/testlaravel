@extends('layouts.main')
@section('title', 'List Pembeli')
@section('content')
    <div class="container d-flex justify-content-center align-items-center p-5">
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jumlah</th>
                    <th>Tanggal CekIn</th>
                    <th>Jumlah Hari</th>
                    <th>Total Harga</th>
                    <th>Pesan Pada</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembeli as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->namaPembeli }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->CekIn }}</td>
                        <td>{{ $item->jumlahHari }}</td>
                        <td>{{ $item->totalHarga }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
