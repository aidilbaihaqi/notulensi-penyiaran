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
            <h4 class="card-title">Notulensi Penyiaran</h4>
            <p class="card-description">
              Berikut adalah notulensi-notulensi penyiaran
            </p>
          </div>
          <div>
            <a class="btn btn-sm btn-info" href="{{ route('notulensi.create') }}">Tambah Data</a>
          </div>
        </div>
        <div>
          
        </div>
        <div class="table-responsive table-hover">
          <table id="dataTable" class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>ID</th>
                <th>Kode Siaran</th>
                <th>Notulen</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
                <tr>
                  <td>
                    <a class="btn btn-sm btn-danger" href="{{ route('notulensi.destroy', $d->id) }}"><i class="fa-solid fa-trash"></i></a>
                    <a class="btn btn-sm btn-success" href="{{ route('notulensi.edit', $d->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                  </td>
                  <td>{{ $loop->iteration }}</td>
                  <td><a href="{{ route('siaran.index') }}"><span class="font-weight-bold text-primary">{{ $d->kode_siaran }}</span></a></td>
                  <td>{{ $d->notulen }}</td>
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