@extends('layouts.app')

@extends('layouts.nav')
@section('content')

    <div id="page-wrapper">
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Absensi</h1>
                {{-- @if (session('added_success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{session('added_success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
            
                  @if (session('updated_success'))
                  <div class="alert alert-success " role="alert">
                      {{session('updated_success')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                    @if (session('deleted_success'))
                  <div class="alert alert-danger " role="alert">
                      {{session('deleted_success')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif --}}
                <button class="btn btn-primary" data-toggle="modal" data-target="#insertModal">Tambah Data</button>
                <br>
                <br>
                <table class="table table-bordered">
                    <thead  class="text-center">
                        <tr>
                            <td>No</td>
                            <td>ID Absensi</td>
                            <td>Nama Pegawai</td>
                            <td>Jabatan</td>
                            <td>Tanggal</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @php
                            $no = 1;   
                        @endphp
            
                        @foreach ($absens as $absen)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $absen->id_absen}}</td>
                                <td>{{ $absen->pegawai->nama}}</td>
                                <td>{{ $absen->pegawai->jabatan}}</td>
                                <td>{{ $absen->tanggal}}</td>
                                {{-- <td>{{ $absen->status}}</td> --}}
                                <td><div class="btn-group" role="group" aria-label="Basic example">
                                  
                                    <button type="button" class="btn btn-danger" id="btn-delete-pegawai"
            
                                    {{-- data-toggle="modal" 
                                    data-target="#delete"
                                    data-id_pegawai="{{$pegawai->id_pegawai}}" --}}
                                    
                                    >Hadir</button>
                                  </div></td>
                            </tr>
                        @endforeach
                      
                    </tbody>
                </table>
<!-- jQuery -->
<script src="admin/vendor/jquery/jquery.min.js"></script>

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
                <script>
                    $(document).on('click','#btn-edit-pegawai',function(){
                        let id_pegawai = $(this).data('id_pegawai');
                        // let nama = $(this).data('nama');
                        // let keterangan = $(this).data('keterangan');
                        // let status = $(this).data('status');
            
                        // $('#edit-nidn').val(nidn);
                        // $('#edit-nama').val(nama);
                        // $('#edit-keterangan').text(keterangan);
                        
                        // $('#edit-status option').filter(function(){
                        //     return ($(this).val()== status);
                        // }).prop('selected', true);
            
                          // AJAX 
                        $.ajax({
                          type: "get",
                          url: 'pegawai/'+id_pegawai,
                          dataType: 'json',
                          success: function(res){
                              // console.log(res);
            
                               $('#edit-id_pegawai').val(res[0].id_pegawai);
                               $('#edit-nama').val(res[0].nama);
                              //  $('#edit-keterangan').text(res[0].keterangan);
                              $('#edit-jenis_kelamin').val(res[0].jenis_kelamin);
                              $('#edit-no_hp').val(res[0].no_hp);
                              $('#edit-jabatan').val(res[0].jabatan);
                              $('#edit-alamat').val(res[0].alamat);
                              $('#edit-email').val(res[0].email);
                        
                              //  $('#edit-status option').filter(function(){
                              //      return ($(this).val()== res[0].status);
                              //  }).prop('selected', true);
                          }
                        });
            
                        
                    });
            
                    $(document).on('click','#btn-delete-pegawai',function(){
                        let id_pegawai = $(this).data('id_pegawai');
                        $('#delete-id_pegawai').val(id_pegawai);
            
                      }); 
            
                      $(document).on('click','#btn-restore-pegawai',function(){
                        let id_pegawai = $(this).data('id_pegawai');
                        $('#restore-id_pegawai').val(id_pegawai);
            
                      });
            
                      $(document).on('click','#btn-force-delete-pegawai',function(){
                        let id_pegawai = $(this).data('id_pegawai');
                        $('#force-delete-id_pegawai').val(id_pegawai);
            
                      });

                      
                </script>
</body>
</html>
@endsection