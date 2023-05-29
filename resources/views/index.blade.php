@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/pexels-asad-photo-maldives-1591361.jpg') }}" class="d-block w-100" alt="..."
                    height="500rem">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/pexels-colon-freld-2373201.jpg') }}" class="d-block w-100" alt="..."
                    height="500rem">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/pexels-rachel-claire-6127330.jpg') }}" class="d-block w-100" alt="..."
                    height="500rem">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container p-3">
        <h1 class="text-center text-uppercase">welcome to <strong style="color: aqua;">furry</strong></h1>
        <hr class="border border-secondary border-1 opacity-75" style="margin-left: 23rem; margin-right: 23rem;">
        <hr class="border border-secondary border-1 opacity-75" style="margin-left: 20rem; margin-right: 20rem;">
        <hr class="border border-secondary border-1 opacity-75" style="margin-left: 25rem; margin-right: 25rem;">
    </div>
    <div class="container p-3">
        <div class="row g-0 ">
            <div class="col-5" style="padding-top: 2rem;"><img src="{{ asset('image/pexels-manuel-barros-2403017.jpg') }}"
                    alt="" width="500rem"></div>
            <div class="col-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-uppercase">Tentang Kami</h3>
                            <a class=" icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;">
                                <hr class="border-4 opacity-100" style="margin-right: 23rem;">
                            </a>
                        </div>
                        <div class="card-content p-4" style="max-width: 38rem">
                            Selamat datang di hotel Furry, surga tropis yang menawarkan liburan tak terlupakan di tepi pantai yang indah. Kami adalah hotel yang berkomitmen untuk memberikan pengalaman liburan terbaik bagi tamu kami, dengan nuansa santai, kenyamanan yang tak tertandingi, dan keramahan hangat. <br>
                            Hotel Furry terletak dilokasi yang sempurna, langsung menghadap ke pasir putih dan air biru laut. Dikelilingi oleh pemandangan alam menakjubkan dan keindahan pantai, hotel kami menciptakan suasana yang menyenangkan dan menyegarkan bagi para tamu. Dengan akses mudah ke pantai, Anda dapat menikmati kegiatan-kegiatan seperti berjemur di bawah sinar matahari, bermain pasir, atau berenang di air yang jernih
                        </div>
                        <a href="{{ url('tentangkami') }}" class="btn btn-outline-primary">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container p-3">
            <h1 class="text-center text-uppercase">daftar <strong style="color: aqua;">kamar</strong></h1>
            <hr class="border border-secondary border-1 opacity-75" style="margin-left: 23rem; margin-right: 23rem;">
            <hr class="border border-secondary border-1 opacity-75" style="margin-left: 20rem; margin-right: 20rem;">
            <hr class="border border-secondary border-1 opacity-75" style="margin-left: 25rem; margin-right: 25rem;">
        </div>
        <div class="container justify-content-center align-items-center">
            <div class="border shadow rounded m-3">
                <div class="row d-flex justify-content-center">
                    @foreach ($kamar as $item)
                        <div class="card text-bg-dark m-3 p-0" style="width: 30rem;">
                            <img src="{{ asset('gambar/' . $item->gambar) }}" class="card-img" alt="..."
                                style="width: 100%; height:100%;">
                            <div class="card-img-overlay">
                                <a class="icon-link text-white text-decoration-none"
                                    href="{{ route('detail', $item->id) }}">
                                    <h5 class="card-title">{{ $item->namaKamar }}</h5>
                                </a>
                                <p class="card-text">Rp.{{ $item->harga }}/Malam</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row border shadow m-3">
            @include('layouts.partials.alamat')
        </div>
    </div>
@endsection
