@extends('layouts.app')
@extends('layouts.nav')
@section('content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  /> --}}
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <div id="page-wrapper">
      <meta name="_token" content="{{ csrf_token() }}">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Absensi</h1>
                <a href="generatePDF" class="btn btn-primary" target="_blank">CETAK PDF</a>
              <br>
              <br>
                <table class="table table-bordered">
                    <thead  class="text-center">
                        <tr>
                            <td>No</td>
                            <td>ID Pegawai</td>
                            <td>Nama Pegawai</td>
                            <td>Jabatan</td>
                            <td>Tanggal</td>
                            <td>Kehadiran</td>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @php
                            $no = 1;   
                        @endphp
            
                        @foreach ($absens as $absen)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $absen->pegawai->id_pegawai}}</td>
                                <td>{{ $absen->pegawai->nama}}</td>
                                <td>{{ $absen->pegawai->jabatan}}</td>
                                <td>{{ $absen->updated_at}}</td>
                                <td>
                                  <input data-id="{{$absen->id}}" class="toggle-class" type="checkbox"
                                   data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                   data-on="Hadir" data-off="Tidak Hadir" {{ $absen->status ? 'checked' : '' }}>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>

<!-- Bootstrap Core JavaScript -->
<script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="admin/vendor/raphael/raphael.min.js"></script>
<script src="admin/vendor/morrisjs/morris.min.js"></script>
<script src="admin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="admin/dist/js/sb-admin-2.js"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
{{-- <script src="admin/vendor/jquery/jquery.min.js"></script> --}}
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var id = $(this).data('id'); 
        // var hadirr = 0;
        // var tidakk = 0;
     
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'id': id},
            success: function(data){
              console.log(data.success)
              
            
            }
        });

    })
  })
</script>
</body>
</html>
@endsection