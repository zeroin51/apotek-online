@extends('dashboard.layouts.main')

@section('container')
<!-- Main Content -->
{{-- @dd(request()->segment(count(request()->segments()))) --}}
{{-- @dd(count(request()->segments())) --}}
<div class="col-md-10 p-0">
    <h2 class="content-title text-center mb-3">{{$obat->name}}</h2>
    <article class='explore-detail d-flex flex-wrap' style="margin-left: 20px;" tabindex='0'>
        <div class='img-container'>
          <img
            class='explore-item__thumbnail'
            src='{{ asset('storage/' . $obat->img) }}'
            alt='{{ $obat->name . '.jpg' }}'
            tabindex='0'
            style="width: 18rem;"
          />
        </div>
        
        <ul class='detail-explore__info'>
            <table class="table table-borderless table-sm">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Nama Obat</th>
                        <td>: {{$obat->name}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Kode Obat</th>
                        <td>: {{$obat->code}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Deskripsi</th>
                        <td>: {{$obat->description}}</td>
                    </tr>
                </tbody>
            </table>
        </ul>
    </article>
    <h2 class="content-title text-center" style="margin-top: 20px;">Daftar Stock </h2>
    <!-- tambahkan content disini! -->
    <div class="card-body text-end me-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="input-group mb-3 filter-tgl-wrap">
                <label for="tgl-pinjam-detail"><strong>Tanggal: </strong></label>
                <div class="filter-detail ms-2 text-start" style="width: 30%; float:left;">
                    <input type="date" class="form-control" name="bday" id="datePicker" style="width: 50%; display: inline-block;">
                    <input type="button" class="btn button text-white" value="Filter" id="datebtn">
                    <input type="button" class="btn button text-white" value="Reset" id="datereset">
                    <!-- <input type="date" class="form-control" id="tgl-pinjam-detail" style="width: 50%; display: inline-block;">
                    <button class="input-group-text btn btn-primary" id="submit-detail-filter">Filter</button> -->
            </div>
            </div>
            @if (auth()->user()->role_id <= 4)
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#pinjamRuangan">Tambah</button>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-stripped table-bordered text-center dt-head-center" id="datatable">
                <thead class="table-info">
                  <tr>
                    <th scope="row">No.</th>
                    <th scope="row">Nama Pegawai</th>
                    <th scope="row">Mulai Tambah Stock</th>
                    <th scope="row">Selesai Tambah Stock</th>
                    <th scope="row">Tujuan</th>
                    <th scope="row">Waktu Tambah Stock Diajukan</th>
                    <th scope="row">Status Stock</th>
                  </tr>
                </thead>
                <tbody class="stock-details">
                    @foreach ($stock as $stock)
                    <tr class="stock-detail">
                      <th scope="row">{{ $loop->iteration }}</th scope="row">
                      <td>{{ $stock->user->name }}</td>
                      <td class="detail-stock-obat_start-time">{{ $stock->time_start_fill }}</td>
                      <td>{{ $stock->time_end_fill }}</td>
                      <td>{{ $stock->purpose }}</td>
                      <td>{{ $stock->addStock_start }}</td>
                      <td>{{ $stock->status }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
<!-- Main Content -->
</div>
@extends('dashboard.partials.stockModal')
@endsection