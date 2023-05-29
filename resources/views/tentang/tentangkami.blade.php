@extends('layouts.main')
@section('title','Tentang Kami')
@section('content')

<div class="container">
  <div class="row" style="padding-top: 2rem;">
    <div class="text">
      <div><h1 class="text-center">Tentang Hotel Furry</h1></div>
      <p class="fs-5">Selamat datang di Hotel Furry, destinasi pantai yang menyenangkan dan unik untuk Anda dan teman-teman! Di sini, kami mengundang Anda untuk mengalami liburan yang penuh kesenangan dan penuh gaya di tepi pantai yang indah.</p>
    </div>
  </div>
  <div class="row">
    <div class="text">
      <div><h2 class="text">Lokasi Kami</h2></div>
      <p class="fs-5">Hotel Furry terletak di sekitar pantai yang menakjubkan, menawarkan pemandangan spektakuler dan akses langsung ke pasir putih yang lembut. Terletak di tepi laut yang menakjubkan, hotel kami memberikan kesempatan untuk menikmati panorama laut yang luar biasa dan sinar matahari yang hangat. Suara ombak yang menenangkan dan udara segar dari laut akan menyambut Anda begitu Anda melangkah ke dalam hotel kami.</p>
    </div>
  </div>
  <div class="row">
    <div class="text">
      <div><h2 class="text">Akomodasi</h2></div>
      <p class="fs-5">Kami menawarkan berbagai jenis akomodasi yang dirancang khusus untuk kenyamanan para tamu berbulu. Kamar-kamar kami didekorasi dengan sentuhan tropis yang ceria dan menyediakan semua kenyamanan modern yang Anda harapkan. Setiap kamar dilengkapi dengan tempat tidur yang nyaman, area duduk yang luas, dan akses Wi-Fi gratis. Kami juga menyediakan fasilitas kamar mandi pribadi yang dilengkapi dengan perlengkapan mandi lengkap.</p>
    </div>
  </div>
  <div class="row">
    <div class="text">
      <div><h2 class="text">Fasilitas dan Layanan</h2></div>
      <p class="fs-5">Hotel Furry menawarkan berbagai fasilitas dan layanan untuk memastikan Anda memiliki pengalaman liburan yang tak terlupakan. Anda dapat bersantai di kolam renang yang terletak di tepi pantai, menikmati sinar matahari atau berendam dalam kelezatan air segar. Untuk kebugaran dan relaksasi, kami menyediakan pusat kebugaran dan spa yang menawarkan berbagai perawatan pijat dan perawatan tubuh.</p>
    </div>
  </div>
  <div class="row">
    <div class="text">
      <div><h2 class="text">Restoran dan Cafe</h2></div>
      <p class="fs-5">Nikmati makanan lezat dan minuman segar di restoran dan kafe kami yang menghadap langsung ke pantai. Dengan pemandangan laut yang menakjubkan, Anda dapat menikmati hidangan lokal dan internasional yang lezat, yang disiapkan dengan bahan-bahan segar dan cita rasa yang otentik.</p>
    </div>
  </div>
  <div class="row">
    <div class="text">
      <div><h2 class="text">Aktifitas Pantai</h2></div>
      <p class="fs-5">Di sekitar Hotel Furry, terdapat berbagai aktivitas pantai yang bisa Anda nikmati. Anda dapat berselancar di ombak yang menyenangkan, berjalan-jalan di tepi pantai yang indah, atau sekadar berjemur dan menikmati cuaca yang hangat. Untuk mereka yang mencari petualangan, kami menyediakan kegiatan olahraga air seperti ski air, snorkeling, atau pelayaran dengan perahu.</p>
    </div>
  </div>
  <div class="row">
    <div class="text">
      <div><h2 class="text">Komitmen terhadap Kelestarian Lingkungan</h2></div>
      <p class="fs-5">Kami di Hotel Furry sangat memperhatikan kelestarian lingkungan. Kami berupaya untuk mengurangi dampak negatif kami terhadap lingkungan dan menjaga keindahan alam sekitar tetap utuh. Kami menggunakan praktik ramah lingkungan, seperti pengelolaan limbah yang efisien dan penggunaan energi terbarukan. Kami juga mendukung inisiatif pelestarian alam setempat dan berusaha untuk melestarikan lingkungan setempat.</p>
    </div>
  </div>
</div>

<div class="container p-3">
  <h1 class="text-center">Anggota Kami</h1>
  @foreach ($item as $item)
    <div class="card p-3 mb-3 border-0" style="max-width: 1000px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('gambar/'. $item->Gambar) }}" style="max-height: 200rem;" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $item->Nama }}</h5>
              <p class="card-text"><b>Kelas : </b>{{ $item->Kelas }} <br>
               <b>Jurusan : </b>{{ $item->Jurusan }} <br>
               <b>No.Absen : </b>{{ $item->NoAbsen }}</p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
</div>

@endsection