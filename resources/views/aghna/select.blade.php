@extends('app')

@section('content')
<a href="/" class="btn btn-dark">&laquo; Kembali</a>
<section class="mt-4 border border-dark p-5">
  <h3 class="text-center mb-5">Silahkan Cari Data Siswa</h3>
  <div class="row justify-content-center align-items-center">
    <div class="col-md-4">
      <select name="kelas" class="form-control form-select" id="kelas" autocomplete="off">
        <option value="" selected disabled>Pilih kelas siswa</option>
        @foreach ($kelas as $k)
        <option value="{{ $k->id }}">{{ $k->kelas }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-4">
      <select name="jurusan" class="form-control form-select" id="jurusan" disabled autocomplete="off">
        <option value="" id="j_placeholder" disabled selected>Pilih kelas terlebih dahulu</option>
        @foreach ($jurusans as $j)
        <option value="{{ $j->id }}">{{ $j->jurusan }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-4">
      <select name="nama" class="form-control form-select" id="nama" disabled autocomplete="off">
        <option value="" disabled selected>Pilih jurusan terlebih dahulu</option>
      </select>
    </div>
  </div>
</section>
@endsection

@section('script')
<script>
  $(document).ready(function() {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


    $('#kelas').on('change', function() {

      $('#jurusan').prop('disabled', false)
      $('#jurusan').val("")
      $('#j_placeholder').text('Pilih jurusan siswa')

      $('#nama').empty()
      $('#nama').append('<option value="" disabled selected>Pilih jurusan terlebih dahulu</option>')
      $('#nama').prop('disabled', true)
    })

    $('#jurusan').on('change', function() {

      $('#nama').prop('disabled', false)

      const kelas = $('#kelas').val()
      const jurusan = $(this).val()

      $.ajax({
        url: '/aghna/search'
        , type: 'POST'
        , data: {
          kelas: kelas
          , jurusan: jurusan
        }
        , success: function(data) {
          $('#nama').empty()
          if (data.length > 0) {
            $('#nama').append('<option value="" disabled selected>Pilih nama siswa</option>')
            $.each(data, function(key, value) {
              $('#nama').append(`<option value="${value.id}">${value.nama} - ${value.kelas.kelas} ${value.jurusan.jurusan}</option>`)
            })
          } else {
            $('#nama').prop('disabled', true)
            $('#nama').append('<option value="" disabled selected>- Data siswa tidak ada -</option>')
          }
          $('#nama').val("")
        }
      })

    })

  })

</script>
@endsection
