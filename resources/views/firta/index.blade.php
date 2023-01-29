@extends('app')

@section('content')
<a href="/" class="btn btn-dark">&laquo; Kembali</a>
<section class="mt-3 p-5 border">
  <h2 class="text-center">Data Siswa</h2>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-responsive table-striped" id="dt">
        <thead>
          <tr>
            <th>No</th>
            <th>Nisn</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($siswas as $s)
          <tr>
            <td></td>
            <td>{{ $s->nisn }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->kelas->kelas }}</td>
            <td>{{ $s->jurusan->jurusan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection

@section('script')
<script>
  $(document).ready(function() {
    let t = $('#dt').DataTable({
      columnDefs: [{
        targets: 0
        , orderable: false
        , searchable: false
      }]
    });

    t.on('order.dt search.dt', function() {
      t.column(0, {
        search: 'applied'
        , order: 'applied'
      }).nodes().each(function(cell, i) {
        cell.innerHTML = i + 1;
      });
    }).draw();
  });

</script>
@endsection
