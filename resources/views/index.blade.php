@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero">
      <div class="hero__inner container">
        <div class="hero-description">
            <h2>Ayo Hidup Sehat!</h2>
            <p>Sistem Informasi APOTEK</p>
        </div>
      </div>
    </div>
    <!-- End Hero -->
    <!-- Start Daftar Obat -->
    <div class="daftar-ruangan my-5 container">
        <h3 class="title-daftar-ruangan text-center">
            Daftar Obat
        </h3>
        <div class="list-ruangan d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Paracetamol.png" style="height: 250px" class="card-img-top" alt="Paracetamol">
                <div class="card-body">
                  <h5 class="card-title text-center">Paracetamol</h5>
                  <p class="card-text">Paracetamol adalah obat untuk meredakan demam dan nyeri ringan hingga sedang, misalnya sakit kepala, nyeri haid, atau pegal-pegal.</p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <img src="img/Amoxicillin.png" style="height: 250px" class="card-img-top" alt="Amoxicillin">
                <div class="card-body">
                  <h5 class="card-title text-center">Amoxicillin</h5>
                  <p class="card-text">Amoxicillin adalah obat antibiotik yang digunakan untuk mengatasi berbagai penyakit akibat infeksi bakteri.</p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <img src="img/Cetirizine.png" style="height: 250px" class="card-img-top" alt="Cetirizine">
                <div class="card-body">
                  <h5 class="card-title text-center">Cetirizine</h5>
                  <p class="card-text">Cetirizine adalah obat untuk meredakan gejala akibat reaksi alergi, seperti mata berair, bersin-bersin, hidung meler, atau gatal di kulit.</p>
                </div>
              </div>
        </div>
    </div>
    <!-- End Daftar obat -->
    
@endsection