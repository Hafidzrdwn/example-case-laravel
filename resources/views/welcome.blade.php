@extends('app')

@section('content')
<section class="mt-5 py-5 border border-dark rounded">
  <h1 class="text-center">Studi Kasus Laravel</h1>
  <h5 class="text-center">Tekan tombol dibawah buat pindah halaman cuy!</h5>
  <div class="row justify-content-center align-items-center mt-4">
    <div class="col-md-5 text-end">
      <a href="{{ route('aghna') }}" class="btn btn-danger">Studi kasus aghna nopal</a>
    </div>
    <div class="col-md-5">
      <a href="{{ route('siswa') }}" class="btn btn-primary">Studi kasus firta arie</a>
    </div>
  </div>
</section>
@endsection
