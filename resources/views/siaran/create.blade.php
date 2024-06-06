@extends('layouts.main')

@section('container')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Siaran</h4>
        <p class="card-description">
          Form penambahan data siaran
        </p>
        <div>
          <form action="{{ route('siaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="kode_siaran">Kode Siaran
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="kode_siaran" name="kode_siaran" required="required" class="form-control ">
              </div>
            </div>
            <div>
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="judul">Judul
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="judul" name="judul" required="required" class="form-control ">
              </div>
            </div>
            <div>
              <label class="col-form-label col-md-3 col-sm-3 label-align">Jadwal Penyiaran
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input id="tgl_waktu" name="tgl_waktu" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                <script>
                  function timeFunctionLong(input) {
                    setTimeout(function() {
                      input.type = 'text';
                    }, 60000);
                  }
                </script>
              </div>
            </div>
            <div>
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_penyiar">Nama Penyiar
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="nama_penyiar" name="nama_penyiar" required="required" class="form-control ">
              </div>
            </div>
            <div class="mt-4">
              <div class="col-md-6 col-sm-6">
                <a class="btn btn-primary" href="{{ route("siaran.index") }}">Cancel</a>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection