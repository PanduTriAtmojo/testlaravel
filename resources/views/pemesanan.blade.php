@extends('layouts.main')
@section('title', 'Pesan Kamar')
@section('content')

    <div class="container-fluid p-5">
        <div class="container">
            <h1 class="p-4 text-center">{{ $item->namaKamar }}</h1>
            <div class="row p-1 g-5">
                <div class="col border p-3 "><img src="{{ asset('gambar/' . $item->gambar) }}" class="img-fluid" alt="">
                    <p>{{ $item->deskripsi }}</p>
                </div>
                <div class="col p-3">
                    <div class="row">
                        <div class="col border p-3 shadow">
                            <div class="row container-fluid d-flex align-items-center">

                                <div class="row p-1">
                                    <div class="col-sm-2">
                                        <h3 class="text-uppercase">Fasilitas</h2>
                                    </div>
                                </div>
                                <div class="row p-1">
                                    <div class="col-sm-2"><i class="fa-solid fa-bed fa-2xl"></i></div>
                                    <div class="col">
                                        <p class="text-uppercase">double king bed</p>
                                    </div>
                                </div>
                                <div class="row p-1">
                                    <div class="col-sm-2"><i class="fa-solid fa-mug-hot fa-2xl"></i></div>
                                    <div class="col">
                                        <p class="text-uppercase">breakfast
                                    </div>
                                </div>
                                <div class="row p-1">
                                    <div class="col-sm-2"><i class="fa-solid fa-wifi fa-2xl"></i></div>
                                    <div class="col">
                                        <p class="text-uppercase">wi-fi
                                    </div>
                                </div>
                                <div class="row p-1">
                                    <div class="col-sm-2"><i class="fa-solid fa-wine-glass fa-2xl"></i></div>
                                    <div class="col">
                                        <p class="text-uppercase">mini bar</p>
                                    </div>
                                </div>
                                <div class="row p-1">
                                    <div class="col-sm-2"><i class="fa-solid fa-car fa-2xl"></i></div>
                                    <div class="col">
                                        <p class="text-uppercase">free parking</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 1rem;">
                        <div class="col border p-3 shadow">
                            <div class="container-fluid">
                                <h3 class="text-uppercase">hubungi kami</h3>
                                <div class="row p-3">
                                    <div class="col">
                                        <div class="row p-1">
                                            <div class="col-sm-1"><a href="https://goo.gl/maps/WU1iW2cZm97Nw3uv9"
                                                    style="text-decoration: none;"><i
                                                        class="fa-solid fa-location-dot fa-xl"></i></a></div>
                                            <div class="col">
                                                <p>Dihatimu</p>
                                            </div>
                                        </div>
                                        <div class="row p-1">
                                            <div class="col-sm-1"><a href="wa.me/085877713117"
                                                    style="text-decoration: none;"><i class="fab fa-whatsapp fa-xl"></i></a>
                                            </div>
                                            <div class="col">
                                                <p>085877713117</p>
                                            </div>
                                        </div>
                                        <div class="row p-1">
                                            <div class="col-sm-1"><a href="mailto:ptri9030@gmail.com"><i
                                                        class="fa-solid fa-envelope fa-xl"></i></a></div>
                                            <div class="col">
                                                <p>ptri9030@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container p-3 d-flex justify-content-center">
                    <form action="pembayaran" method="get">
                        <a href="{{ route('pembayaran', $item->id) }}" class="btn btn-success">Pesan Sekarang</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @endsection
