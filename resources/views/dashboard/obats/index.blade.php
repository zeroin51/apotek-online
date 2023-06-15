@extends('dashboard.layouts.main')

@section('container')
<div class="col-md-10 p-0">
    <h2 class="content-title text-center">Daftar {{$title}}</h2>
<div class="card-body text-end">
  @if(session()->has('obatSuccess'))
    <div class="col-md-16 mx-auto alert alert-success text-center  alert-success alert-dismissible fade show" style="margin-top: 50px" role="alert">
        {{session('obatSuccess')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session()->has('deleteObat'))
    <div class="col-md-16 mx-auto alert alert-success text-center  alert-dismissible fade show" style="margin-top: 50px" role="alert">
        {{session('deleteObat')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (auth()->user()->role_id <= 4)    
  <button type="button" class="mb-3 btn button btn-primary" data-bs-toggle="modal" data-bs-target="#tambahStock">
    Tambah Stock
  </button>
  @endif
    @if (auth()->user()->role_id <= 2)
    <button type="button" class="mb-3 btn button btn-primary" data-bs-toggle="modal" data-bs-target="#addobat">
      Tambah Obat
    </button>
    @endif
  <div class="table-responsive">
    <table class="table table-hover table-stripped table-bordered text-center dt-head-center">
      <thead class="table-info">
        <tr>
          <th class="text-center" scope="row">No.</th>
          <th class="text-center" scope="row">Nama Obat</th>
          <th class="text-center" scope="row">Kode Obat</th>
          @if(auth()->user()->role_id <= 2)
          <th class="text-center" scope="row">Action</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @foreach ($obats as $obat)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td><a href="/dashboard/obats/{{ $obat->code }}" class="text-decoration-none" role="button">{{ $obat->name }}</a></td>
            <td>{{ $obat->code }}</td>
            @if (auth()->user()->role_id <= 2)    
            <td style="font-size: 22px;">
              <a href="/dashboard/obats/{{ $obat->code }}/edit" class="bi bi-pencil-square text-warning border-0 editobat" id="editobat" data-id="{{ $obat->id }}" data-code="{{ $obat->code }}" data-bs-toggle="modal" data-bs-target="#editObat"></a>
              &nbsp;
              <form action="/dashboard/obats/{{ $obat->code }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="bi bi-trash-fill text-danger border-0" onclick="return confirm('Hapus data obat?')"></button>
              </form>
            </td>
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="d-flex justify-content-end">
 
  </div>
</div>
</div>
@extends('dashboard.partials.stockModal')
@extends('dashboard.partials.addobatModal')
@extends('dashboard.partials.editobatModal')
@endsection
