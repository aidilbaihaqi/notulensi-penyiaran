@extends('layouts.main')

@section('container')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  {{ $message }}
</div>
@endif

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
            <h4 class="card-title">Data Siaran</h4>
            <p class="card-description">
              Berikut adalah data-data siaran 
            </p>
          </div>
          <div>
            <a class="btn btn-sm btn-info" href="{{ route('siaran.create') }}">Tambah Data</a>
          </div>
        </div>
        <div>
          
        </div>
        <div class="table-responsive table-hover">
          <table id="dataTable" class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Kode Siaran</th>
                <th>Judul</th>
                <th>Jadwal Penyiaran</th>
                <th>Nama Penyiar</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
                <tr>
                  <td>
                    <a class="btn btn-sm btn-danger" href="{{ route('siaran.destroy', $d->kode_siaran) }}"><i class="fa-solid fa-trash"></i></a>
                    <a class="btn btn-sm btn-success" href="{{ route('siaran.edit', $d->kode_siaran) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                  </td>
                  <td><span class="font-weight-bold text-primary">{{ $d->kode_siaran }}</span></td>
                  <td>{{ $d->judul }}</td>
                  <td>{{ $d->tgl_waktu }}</td>
                  <td>{{ $d->nama_penyiar }}</td>
                  <td>
                    @if ($d->status == 'terjadwal')
                      <button class="btn btn-sm btn-info" disabled="disabled">Terjadwal</button>
                    @elseif($d->status == 'selesai')
                      <button class="btn btn-sm btn-success" disabled="disabled">Selesai</button>
                    @elseif($d->status == 'dibatalkan')
                      <button class="btn btn-sm btn-danger" disabled="disabled">Dibatalkan</button>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection