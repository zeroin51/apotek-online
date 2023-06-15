@extends('layouts.main')

@section('container')

<div class="hero hero-about">
    <div class="hero__inner container">
      <div class="hero-description text-center">
          <h2>TENTANG APOTEK</h2>
          <p>
            Aplikasi <span><b>Sistem Informasi Apotek</b></span> merupakan aplikasi real-time berbasis website. 
            Aplikasi ini menampilkan ketersediaan Stock serta informasi mendetail lainnya mengenai Obat yang sedang dan akan ditambah dalam suatu Apotek. 
            Aplikasi ini ditujukan bagi Admin dan Pegawai Apotek.
          </p>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- Start Description About -->
  <div class="description-about container">
      <div class="upper-content d-flex flex-wrap my-4">
          <div class="section section-1 mx-3" style="width: 30vw;">
              <h1 class="title-section text-center">LATAR BELAKANG</h1>
              <div class="section-description">
              Kemajuan dalam teknologi komputer dan perangkat lunak telah memungkinkan 
              apotek untuk mengelola data dengan lebih efisien dan akurat. Dulu, apotek menggunakan 
              sistem manual atau berbasis kertas untuk mengelola inventaris obat, resep medis, dan 
              catatan pasien. Namun, dengan kemajuan teknologi, sistem informasi apotek (SIA) dapat 
              mengotomatisasi banyak proses ini, mengurangi kesalahan manusia, dan meningkatkan efisiensi operasional.
              </div>
          </div>
          <div class="section mx-3" style="width: 40vw;">
              <h1 class="title-section text-center">TUJUAN</h1>
              <div class="section-description">
                Aplikasi sistem Apotek ini bertujuan untuk mengetahui stock obat apa saja yang sedang dan akan ditambah pada apotek yang dilakukan pada hari tersebut. 
                Selain itu, aplikasi ini juga membantu para pegawai baru apotek yang kurang bahkan tidak mengetahui macam macam dari suatu obat dalam Apotek. 
                Informasi seperti penanggung jawab penambah stock obat, stock obat yang sedang ditambah, tujuan penambahan stock obat, jadwal asli penambahan stock obat, dan waktu stock obat ditambah juga dapat dilihat melalui aplikasi. 
                Tentu hal ini mempermudah para pengakses gedung agar tidak perlu mengecek stock obat satu persatu.
              </div>
          </div>
      </div>
  </div>
  <!-- End Description About -->
  <!-- Start Our Team -->
  <div class="bg-light">
    <h1 class="text-center p-4">TIM KITA</h1>
    <div class="row px-5 pb-5">
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/jek.jpg" alt="David">
            <h5 class="text-center mt-2">David Setiawan</h5>
            <p class="text-center">H1D021065</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/rahma.jpeg" alt="Irsyad">
            <h5 class="text-center mt-2">M. Irsyad Wahyuhadi Wibowo</h5>
            <p class="text-center">H1D021074</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/azar.jpg" alt="Satrio">
            <h5 class="text-center mt-2">Satrio Aryo Wicaksono</h5>
            <p class="text-center">H1D021078</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/sekar.jpg" alt="Nabiel">
            <h5 class="text-center mt-2">M Irfan Nabiel M Mucoffa</h5>
            <p class="text-center">H1D021095</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Our Team -->
    
@endsection