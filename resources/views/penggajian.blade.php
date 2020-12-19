@extends('layouts.app')

@extends('layouts.nav')
@section('content')

    <div id="page-wrapper">
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Penggajian</h1>
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
                              
                                {{-- <label>ID</label> --}}
                                <input type="hidden" name="id" class="form-control" id="edit-id" readonly>
                                <div class="form-group">
                                <label>ID Pegawai</label>
                                <input type="text" name="id_pegawai" class="form-control" id="edit-id_pegawai" readonly>
                                </div>
                                <div class="form-group">
                                <label>Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" class="form-control" id="edit-nama_pegawai" readonly>
                                </div>
                                <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="edit-jabatan" readonly>
                                </div>
                                <div class="form-group">
                                <label>Gaji Pokok</label>
                                <input type="text" name="gaji_pokok" class="form-control" id="edit-gaji_pokok" readonly>
                                </div>
                                <div class="form-group">
                                <label>Jumlah Tidak Hadir</label>
                                <input type="text" name="jml_tidak_hadir" class="form-control" id="edit-jml_tidak_hadir" readonly>
                                </div>
                                <div class="form-group">
                                <label>Gaji Di Terima</label>
                                <input type="text" name="gaji_diterima" class="form-control" id="edit-gaji_diterima" readonly>
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
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cetak Laporan</button>
                <br>
                <br>
                <table class="table table-bordered">
                    <thead  class="text-center">
                        <tr>
                            <td>No</td>
                            <td>ID Pegawai</td>
                            <td>Nama Pegawai</td>
                            <td>Jabatan</td>
                            <td>Gaji Pokok</td>
                            <td>Jumlah Tidak Hadir</td>
                            <td>Gaji Di Terima</td>
                            <td>Opsi</td>
                            
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @php
                            $no = 1;
                            
                        @endphp
            
                        @foreach ($penggajians as $penggajian)
                        @php
                           $no = 1; 
                        @endphp
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $penggajian->pegawai->id_pegawai}}</td>
                                <td>{{ $penggajian->pegawai->nama}}</td>
                                <td>{{ $penggajian->pegawai->jabatan}}</td>
                                {{-- <td>{{ $penggajian->absen->tanggal}}</td> --}}
                                {{-- <td>{{ $jmlabsen }}</td> --}}
                                {{-- <td>{{ $penggajian->$jmlabsen }}</td> --}}
                                <td>@currency($penggajian->gaji_pokok)</td>
                                {{-- <td>{{ }}</td> --}}
                                <td>{{ $penggajian->jml_tidak_hadir}}</td>
                                <td>@currency($penggajian->gaji_diterima)</td>
                                <td> 
                                  {{-- <input type="hidden" name="id" class="form-control" id="edit-id_penggajian">
                                  <input type="hidden" name="status" class="form-control" id="edit-status" value="0"> --}}
                                  <button type="submit" class="btn btn-primary" id="btn-edit-penggajian"
                           data-toggle="modal" 
                           data-target="#update"
                           data-id="{{$penggajian->id}}"
                           
                          >Cetak Slip</button></td>
                                
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
  $(document).on('click','#btn-edit-penggajian',function(){
      let id = $(this).data('id');
      // let nama = $(this).data('nama');
      // let keterangan = $(this).data('keterangan');
      // let status = $(this).data('status');

      // $('#edit-id').val(id);
      // $('#edit-nama').val(nama);
      // $('#edit-keterangan').text(keterangan);
      
      // $('#edit-status option').filter(function(){
      //     return ($(this).val()== status);
      // }).prop('selected', true);

        // AJAX 
      $.ajax({
        type: "get",
        url: 'penggajian/'+id,
        dataType: 'json',
        success: function(res){
            // console.log(res);

             $('#edit-id').val(res[0].id);
             $('#edit-id_pegawai').val(res[0].id_pegawai);
             $('#edit-nama_pegawai').val(res[0].nama);
            $('#edit-jabatan').val(res[0].jabatan);
            $('#edit-jenis_kelamin').val(res[0].jenis_kelamin);
            $('#edit-gaji_pokok').val(res[0].gaji_pokok);
            $('#edit-jml_tidak_hadir').val(res[0].jml_tidak_hadir);
            $('#edit-gaji_diterima').val(res[0].gaji_diterima);
            
      
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