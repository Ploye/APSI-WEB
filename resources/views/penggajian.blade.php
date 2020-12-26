@extends('layouts.app')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

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
                        <h2 class="modal-title" id="exampleModalLabel">Cetak Slip</h2>
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
                                <label>Jumlah Hadir</label>
                                <input type="text" name="jml_tidak_hadir" class="form-control" id="edit-jml_hadir" readonly>
                                </div>
                                <div class="form-group">
                                <label>Gaji Di Terima</label>
                                <input type="text" name="gaji_diterima" class="form-control" id="edit-gaji_diterima" readonly>
                                </div>
                              
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning">Cetak Sekarang</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
                

                <div class="row">
                  <div class="col-md-5">
                    <label>Bulan</label>
                    <select name="bulan" id="bulan" class="form-control">
                      <option value="01" <?= (date('m') == '01' ? 'selected' : '') ?>>Januari</option>
                      <option value="02" <?= (date('m') == '02' ? 'selected' : '') ?>>Februari</option>
                      <option value="03" <?= (date('m') == '03' ? 'selected' : '') ?>>Maret</option>
                      <option value="04" <?= (date('m') == '04' ? 'selected' : '') ?>>April</option>
                      <option value="05" <?= (date('m') == '05' ? 'selected' : '') ?>>Mei</option>
                      <option value="06" <?= (date('m') == '06' ? 'selected' : '') ?>>Juni</option>
                      <option value="07" <?= (date('m') == '07' ? 'selected' : '') ?>>Juli</option>
                      <option value="08" <?= (date('m') == '08' ? 'selected' : '') ?>>Agustus</option>
                      <option value="09" <?= (date('m') == '09' ? 'selected' : '') ?>>September</option>
                      <option value="10" <?= (date('m') == '10' ? 'selected' : '') ?>>Oktober</option>
                      <option value="11" <?= (date('m') == '11' ? 'selected' : '') ?>>November</option>
                      <option value="12" <?= (date('m') == '12' ? 'selected' : '') ?>>Desember</option>
                    </select>
                  </div>
                  <div class="col-md-5">
                    <label>Tahun</label>
                    <select name="tahun" id="tahun" class="form-control">
                      <option value="<?= date('Y', strtotime('+2 years')) ?>"><?= date('Y', strtotime('+2 years')) ?></option>
                      <option value="<?= date('Y', strtotime('+1 year')) ?>"><?= date('Y', strtotime('+1 year')) ?></option>
                      <option value="<?= date('Y') ?>" selected><?= date('Y') ?></option>
                      <option value="<?= date('Y', strtotime('-1 year')) ?>"><?= date('Y', strtotime('-1 year')) ?></option>
                      <option value="<?= date('Y', strtotime('-2 years')) ?>"><?= date('Y', strtotime('-2 years')) ?></option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>&nbsp;</label>
                    <button class="btn btn-primary form-control" id="searchNow">Cari</button>
                  </div>
                </div>
                <hr>
              
                <table class="table table-bordered" id="tablePenggajian">
                    <thead  class="text-center">
                        <tr>
                            <td>No</td>
                            <th>Periode</th>
                            <td>ID Pegawai</td>
                            <td>Nama Pegawai</td>
                            <td>Jabatan</td>
                            <td>Gaji Pokok</td>
                            <td>Jumlah Kehadiran</td>
                            <td>Gaji Di Terima</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody class="text-center" id="bodyPenggajian">
                      
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
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script>

  $(function(){

    $('#searchNow').click(function(){

      let bulan = $('#bulan').val();
      let tahun = $('#tahun').val();
      let holder = $('#bodyPenggajian');

      if ( $.fn.dataTable.isDataTable( '#tablePenggajian' ) ) {
        $('#tablePenggajian').DataTable().destroy();
      }

      // var table = $(document).find('#tablePenggajian').DataTable();
      // table.clear().draw();

      let link = '{{ url("filterPenggajian/") }}/'+bulan+'/'+tahun;

      let loading = '<tr><td colspan="9"><center><h3>Memuat..</h3></center></td></tr>';
      holder.html(loading);

      

      $.get(link,function(res){

        holder.html(res);

        $(document).find('#tablePenggajian').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                // 'copyHtml5',
                'excelHtml5',
                // 'csvHtml5',
                'pdfHtml5'
            ],
        } );

      });

    });

  });

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
            $('#edit-jml_hadir').val(res[0].jml_hadir);
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