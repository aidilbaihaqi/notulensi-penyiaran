@extends('layouts.main')

@section('style')
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }
</style>
@endsection

@section('container')
<div class="row">
  <div class="col-12">
    <div class="p-3 mb-4 bg-white rounded-5">
      <div class="container-fluid py-5">
        <h2 class="fw-bold text-info">Radio Republik Indonesia (RRI) - <span class="
          text-danger">Menyiarkan untuk Indonesia</span></h2>
        <p class="fs-4">Radio Republik Indonesia (RRI) adalah lembaga penyiaran publik yang berperan sebagai penyebar informasi, edukasi, dan hiburan bagi seluruh masyarakat Indonesia. Sejak didirikan pada tahun 1945, RRI telah menjadi suara kebangsaan yang menyatukan dan menginspirasi bangsa melalui program-program berkualitas yang mencakup berbagai aspek kehidupan. Dengan jaringan siaran yang luas, RRI hadir di seluruh pelosok negeri, menghadirkan berita terbaru, wawasan budaya, musik, dan program-program interaktif yang mencerminkan kekayaan dan keragaman Indonesia.</p>
      </div>
    </div>
  </div> 
</div>
<div class="row container-fluid">
  <div class="col-md-4 me-4 mb-4 stretch-card bg-white transparent">
    <div class="h-100 p-5 text-bg-dark rounded-3">
      <h3>Data Siaran</h3>
      <p>Berikut adalah kumpulan data siaran yang bisa dilihat di halaman berikut ini: </p>
      <a class="btn btn-outline-primary" href="{{ route('siaran.index') }}">Kunjungi</a>
    </div>
  </div>
  <div class="col-md-4 me-4 mb-4 stretch-card bg-white transparent">
    <div class="h-100 p-5 text-bg-dark rounded-3">
      <h3>Arsip Siaran</h3>
      <p>Berikut adalah kumpulan arsip siaran yang bisa dilihat di halaman berikut ini: </p>
      <a class="btn btn-outline-primary" href="{{ route('arsip.index') }}">Kunjungi</a>
    </div>
  </div>
  <div class="col-md-4 mb-4 stretch-card bg-white transparent">
    <div class="h-100 p-5 text-bg-dark rounded-3">
      <h3>Notulensi Siaran</h3>
      <p>Berikut adalah kumpulan notulensi siaran yang bisa dilihat di halaman berikut ini: </p>
      <a class="btn btn-outline-primary" href="{{ route('notulensi.index') }}">Kunjungi</a>
    </div>
  </div>
</div>

@endsection