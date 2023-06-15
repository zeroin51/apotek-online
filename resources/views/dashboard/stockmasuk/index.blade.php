@extends('dashboard.layouts.main')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar {{$title}}</h2>
<div class="card-body text-end">
  <div class="table-responsive">
    <table class="table table-hover table-stripped table-bordered text-center dt-head-center" id="datatable">
      <thead class="table-info">
        <tr>
          <th scope="row">No.</th>
          <th scope="row">Nama Obat</th>
          <th scope="row">Nama Pegawai</th>
          <th scope="row">Mulai Tambah Stock</th>
          <th scope="row">Selesai Tambah Stock</th>
          <th scope="row">Tujuan</th>
          <th scope="row">Waktu Mulai Tambah Stock Diajukan</th>
          <th scope="row">Status Stock</th>
          <th scope="row">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($stocks as $stock)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th scope="row">
              <td><a href="/dashboard/obats/{{ $stock->obat->code }}" class="text-decoration-none">{{ $stock->obat->code }}</a></td>
            <td>{{ $stock->user->name }}</td>
            <td>{{ $stock->time_start_fill }}</td>
            <td>{{ $stock->time_end_fill }}</td>
            <td>{{ $stock->purpose }}</td>
            <td>{{ $stock->addStock_start }}</td>
            <td>{{ $stock->status }}</td>
            <td>
              <a href="/dashboard/stockmasuk/{{ $stock->id }}/acceptStocks" class="btn btn-success mb-2" style="padding: 2px 10px"><i class="bi bi-check-lg"></i></a>
              <a href="/dashboard/stockmasuk/{{ $stock->id }}/declineStocks" class="btn btn-danger mb-2" style="padding: 2px 10px"><i class="bi bi-x-lg"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
