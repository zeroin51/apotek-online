@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero hero-bantuan">
        <div class="hero__inner container">
          <div class="hero-description m-auto p-5">
              <h2>PETUNJUK PENGGUNAAN APOTEK</h2>
          </div>
        </div>
      </div>
      <!-- End Hero -->
      <!-- Start How To Use Apotek -->
      <div class="how-use-simanuk my-4 container">
          <h2>TAHAPAN PENAMBAHAN STOCK OBAT</h2>
          <div class="list-tahapan p-5">
              <ul>
                  <li>Untuk melakukan penambahan stock obat, Anda diharuskan melakukan login terlebih dahulu sesuai dengan username yang telah disediakan oleh admin pada saat sosialisasi Apotek.</li>
                  <li>Jika ingin mengetahui Obat yang tersedia, silakan menuju ke menu Daftar obat. Secara default, tampilan akan langsung ke menu Daftar Obat.</li>
                  <li>Jika ingin menambahkan stock Obat, silakan menuju ke menu Daftar Obat. Cek Stock Obat dan daftar Pegawai pada sub-menu Daftar Obat dan Daftar Pegawai. Jika Obat tersedia, silakan klik tombol Tambah Obat dan isi form Tambah Stock. </li>
                  <li>Pastikan data yang Anda masukkan sudah sesuai. Jika sudah sesuai, klik Kirim.</li>
                  <li>Proses pengajuan Penambahan stock obat sedang diproses, silakan tunggu pemberitahuan lebih lanjut.</li>
                  <li>Untuk mengecek status penambahan stock obat apakah diterima atau ditolak, silakan menuju sub-menu Daftar Tambah Stock.</li>
              </ul>
          </div>
      </div>
      <!-- End How to use -->
@endsection