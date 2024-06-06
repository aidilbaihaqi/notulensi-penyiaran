@extends('layouts.main')

@section('container')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Arsip Penyiaran</h4>
        <p class="card-description">
          Form penambahan arsip penyiaran
        </p>
        <div>
          <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="kode_siaran">Pilih Siaran
              </label>
              <div class="col-md-5 col-sm-5 ">
                <select class="form-select" name="kode_siaran">
                  <option selected disabled>Pilih Judul Siaran</option>
                  @foreach ($data as $d)
                    <option value="{{ $d->kode_siaran }}">{{ $d->judul }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div>
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="file_rekaman">File Rekaman <span class="text-secondary">(ekstensi file yang didukung: mp3)</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="file_rekaman" name="file_rekaman" required="required" class="form-control ">
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