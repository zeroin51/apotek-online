@extends('dashboard.layouts.main')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar {{$title}}</h2>
<div class="card-body text-end">
  @if(session()->has('stockSuccess'))
    <div class="col-md-16 mx-auto alert alert-success text-center  alert-success alert-dismissible fade show" style="margin-top: 50px" role="alert">
        {{session('stockSuccess')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session()->has('deleteStock'))
    <div class="col-md-16 mx-auto alert alert-success text-center  alert-dismissible fade show" style="margin-top: 50px" role="alert">
        {{session('deleteStock')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (auth()->user()->role_id <= 4)    
  <button type="button" class="mb-3 btn button btn-primary" data-bs-toggle="modal" data-bs-target="#tambahStock">
    Tambah Stock
  </button>
  @endif
  <div class="table-responsive">
    <table class="table table-hover table-stripped table-bordered text-center dt-head-center" id="datatable">
      <thead class="table-info">
        <tr>
          <th scope="row">No.</th>
          <th scope="row">Kode Obat</th>
          @if (auth()->user()->role_id <= 2)
            <th scope="row">Nama Pegawai</th>              
          @endif
          <th scope="row">Mulai Tambah Stock</th>
          <th scope="row">Selesai Tambah Stock</th>
          <th scope="row">Tujuan</th>
          <th scope="row">Waktu Tambah Stock Diajukan</th>
          <th scope="row">Waktu Tambah Stock Dikabulkan</th>
          <th scope="row">Status Stock</th>
          @if (auth()->user()->role_id <= 2)
            <th scope="row">Action</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @if (auth()->user()->role_id <= 2)
          @foreach ($adminStocks as $stock)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th scope="row">
            <td><a href="/dashboard/obats/{{ $stock->obat->code }}" class="text-decoration-none" role="button">{{ $stock->obat->code }}</a></td>
            <td>{{ $stock->user->name }}</td>
            <td>{{ $stock->time_start_fill }}</td>
            <td>{{ $stock->time_end_fill }}</td>
            <td>{{ $stock->purpose }}</td>
            <td>{{ $stock->addStock_start }}</td>
            @if ($stock->status == "ditambah")
            <td><a href="/dashboard/stocks/{{ $stock->id }}/endAddStock" class="btn btn-success" type="submit" style="padding: 2px 10px"><i class="bi bi-check fs-5"></i></a></td>
            @else
              @if(!is_null($stock->addStock_end))
                <td>{{ $stock->addStock_end }}</td>   
              @else
              <td>-</td>   
              @endif 
            @endif
            <td>{{ $stock->status }}</td>
            <td><form action="/dashboard/stocks/{{ $stock->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="bi bi-trash-fill text-danger border-0" onclick="return confirm('Hapus data stock?')"></button>
            </form></td>
          </tr>
        @endforeach
        @else
          @foreach ($userStocks as $stock)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th scope="row">
            <td><a href="/dashboard/obats/{{ $stock->obat->code }}" class="text-decoration-none" role="button">{{ $stock->obat->code }}</a></td>
            @if (auth()->user()->role_id <= 2)
              <td>{{ $stock->user->name }}</td>
            @endif
            <td>{{ $stock->time_start_fill }}</td>
            <td>{{ $stock->time_end_fill }}</td>
            <td>{{ $stock->purpose }}</td>
            <td>{{ $stock->addStock_start }}</td>
            @if ($stock->status == "ditambah")
            <td><a href="/dashboard/stocks/{{ $stock->id }}/endAddStock" class="btn btn-success" type="submit" style="padding: 2px 10px"><i class="bi bi-check fs-5"></i></a></td>
            @else
              @if(!is_null($stock->addStock_end))
                <td>{{ $stock->addStock_end }}</td>   
              @else
              <td>-</td>   
              @endif 
            @endif
            <td>{{ $stock->status }}</td>
          </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>
</div>
@extends('dashboard.partials.stockModal')
@endsection
