@extends('layouts.app')

@extends('layouts.nav')
@section('content')

    <div id="page-wrapper">
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Absensi</h1>

                <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h2 class="modal-title" id="exampleModalLabel">Hadir</h2>
                      </div>
                      <div class="modal-body">
                      <form method="post" action="{{action('AbsensiController@update', 'update')}}">
                          @method('PATCH')
                          @csrf
                              <div class="form-group">
                                <label>ID Absen</label>
                                <input type="text" name="id_absen" class="form-control" id="edit-id_absen" readonly>
                              </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
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
                                @if ($absen->status == '1')
                                <td>
                                  
                                  <button type="button" class="btn btn-primary" id="btn-edit-absen"
                             data-toggle="modal" 
                             data-target="#update"
                             data-id_absen="{{$absen->id_absen}}"
                             
                            >Hadir</button>
                                </td>
                                @else
                                <td>
                                  <button type="button" class="btn btn-danger" id="btn-edit-absen"
                             data-toggle="modal" 
                             data-target="#update"
                             data-id_absen="{{$absen->id_absen}}"
                            
                            >Tidak Hadir</button>
                                </td>
                                @endif
                                
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
  $(document).on('click','#btn-edit-absen',function(){
      let id_absen = $(this).data('id_absen');
     
        // AJAX 
      $.ajax({
        type: "get",
        url: 'absen/'+id_absen,
        dataType: 'json',
        success: function(res){
            // console.log(res);

             $('#edit-id_absen').val(res[0].id_absen);
            //  $('#edit-nama').val(res[0].nama);
            // //  $('#edit-keterangan').text(res[0].keterangan);
            // $('#edit-jenis_kelamin').val(res[0].jenis_kelamin);
            // $('#edit-no_hp').val(res[0].no_hp);
            // $('#edit-jabatan').val(res[0].jabatan);
            // $('#edit-alamat').val(res[0].alamat);
            // $('#edit-email').val(res[0].email);
      
            //  $('#edit-status option').filter(function(){
            //      return ($(this).val()== res[0].status);
            //  }).prop('selected', true);
        }
      });

      
  });
  
</script>
</body>
</html>
@endsection