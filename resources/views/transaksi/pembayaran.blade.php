@extends('layouts.main')
@section('title','Pembayaran')
@section('content')
<div class="container-fluid">
    <div class="card p-3 m-3 shadow">
        <div class="card-title"><h3 class="text-center">Form Pembayaran</h3></div>
        <div class="card-title"><h4 class="text-center">{{ $item->namaKamar }}</h4></div>
    <form action="{{ route('bayar') }}" method="post" class="row g-3">
        @csrf
        <div class="mb-3">
            <input type="text" name="namaKamar" value="{{ $item->namaKamar }}" class="form-control" hidden>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Atas Nama</label>
            <input type="text" name="namaPembeli" id="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="no" class="form-label">No.Hp</label>
            <input type="number" name="noHP" id="no" class="form-control" maxlength="20">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Atas Nama</label>
            <input type="text" name="alamat" id="alamat" class="form-control" maxlength="255">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Orang</label>
            <input type="number" name="jumlah" id="jumlah" min="1" max="4" class="form-control" onkeyup="jumlahHarga()">
        </div>
        {{-- arasea --}}
        <div class="mb-3">
            <label for="cekin" class="form-label">Check-in</label>
            <input type="date" name="CekIn" id="cekin" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jumlahHari" class="form-label">Jumlah Hari</label>
            <input type="number" name="jumlahHari" id="hari" class="form-control" onkeyup="jumlahHarga()">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga (Rp)</label>
            <p><input type="text" id="harga" value="{{ $item->harga }}" readonly class="form-control" onkeyup="jumlahHarga()">
        </div>
        <div class="mb-3">
            <label for="totalHarga" class="form-label">Total Harga (Rp)</label>
            <input type="text" name="totalHarga" id="totalHarga" class="form-control">
        </div>
            <div class="col-auto">
              <label for="id" class="visually-hidden">ID Pembayaran</label>
              <input type="text" readonly class="form-control-plaintext" id="id" value="ID Pembayaran">
            </div>
            <div class="col-auto">
              <label for="idPembayaran" class="visually-hidden">Id Pembayaran</label>
              <input type="text" class="form-control" id="idPembayaran" readonlyb name="idPembayaran" readonly>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-primary mb-3" onclick="Generate()"> Generate Code</button>
            </div>
        <div class="col-auto">
            <input type="submit" value="Bayar" class="btn btn-outline-success">
        </div>
    </form>
</div>
</div>

<script>
    function jumlahHarga(){
        var jumlah = document.getElementById('jumlah').value;
        var jumlahHari = document.getElementById('hari').value;
        var harga = document.getElementById('harga').value;
        var totalHarga = parseInt(jumlah) * parseInt(jumlahHari) * parseInt(harga);
        var totalHarga2 = 0.9 * parseInt(jumlah) * parseInt(jumlahHari) * parseInt(harga);
        var totalHarga3 = 0.8 * parseInt(jumlah) * parseInt(jumlahHari) * parseInt(harga);
        var totalHarga4 = 0.7 * parseInt(jumlah) * parseInt(jumlahHari) * parseInt(harga);
        
        if(jumlah == 1){
            document.getElementById('totalHarga').value=totalHarga;
        }else if(jumlah == 2){
            document.getElementById('totalHarga').value=totalHarga2;
        }else if(jumlah == 3){
            document.getElementById('totalHarga').value=totalHarga3;
        }else if(jumlah == 4){
            document.getElementById('totalHarga').value=totalHarga4;
        }
    }

    function GenerateRandom(length){
        var char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
        var random = '';

        for (var i = 0; i < length; i++) {
            var randomIndex = Math.floor(Math.random() * char.length);
            random += char.charAt(randomIndex);
        }
        return random;
    }
    function Generate(){
        var random = GenerateRandom(12);
        document.getElementById('idPembayaran').value=random;
    }
</script>
@endsection