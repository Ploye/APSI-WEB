@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<style>
  th{
    text-align: center;
  }
</style>
    <div id="page-wrapper">
      <meta name="_token" content="{{ csrf_token() }}">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Pegawai</h1>
                @if (session('added_success'))
                <div class="alert alert-success" role="alert">
                    {{session('added_success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
            
                  @if (session('updated_success'))
                  <div class="alert alert-success" role="alert">
                      {{session('updated_success')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                    @if (session('deleted_success'))
                  <div class="alert alert-danger" role="alert">
                      {{session('deleted_success')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                  
              
            </div>
        </div>
         <!-- Modal UPDATE-->
         <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title" id="exampleModalLabel">Ubah Pegawai</h2>
              </div>
              <div class="modal-body">
              <form method="post" action="{{action('PegawaiController@update', 'update')}}">
                  @method('PATCH')
                  @csrf
                      <div class="form-group">
                        <label>ID Pegawai</label>
                        <input type="text" name="id_pegawai" class="form-control" id="edit-id_pegawai" readonly>
                      </div>
                      <div class="form-group">
                      <label>Nama</label>
                        <input type="text" name="nama" class="form-control" id="edit-nama">
                      </div>
                      <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <textarea class="form-control" name="jenis_kelamin" id="edit-jenis_kelamin"></textarea>
                    </div>
                    <div class="form-group">
                      <label>No HP</label>
                      <textarea class="form-control" name="no_hp" id="edit-no_hp"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Jabatan</label>
                      <textarea class="form-control" name="jabatan" id="edit-jabatan"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" name="alamat" id="edit-alamat"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <textarea class="form-control" name="email" id="edit-email"></textarea>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-warning">Perbarui</button>
              </form>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary" data-toggle="modal" data-target="#insertModal">Tambah Pegawai</button>
   
        <a href="generatePDF" class="btn btn-info" target="_blank">CETAK PDF</a>
    
        <form class="form-inline "><br>
          <div class="form-group mx-sm-3 mb-2 ">
            <input type="text" class="form-control" id="search" name="search" placeholder="Cari"></input>
          </div>
        </form>

                  <table class="table table-bordered text-center">
                  <thead>
                  <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Nama Pegawai</th>
                  <th>Jenis Kelamin</th>
                  <th>No HP</th>
                  <th>Jabatan</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Opsi</th>
                  </tr>
                  </thead>
              
                  <tbody>
                    @php
                    $no = 1;   
                @endphp
    
                @foreach ($pegawais as $pegawai)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $pegawai->id_pegawai}}</td>
                        <td>{{ $pegawai->nama}}</td>
                        <td>{{ $pegawai->jenis_kelamin}}</td>
                        <td>{{ $pegawai->no_hp}}</td>
                        <td>{{ $pegawai->jabatan}}</td>
                        <td>{{ $pegawai->alamat}}</td>
                        <td>{{ $pegawai->email}}</td>
                      
                        <td><div class="btn-group" role="group" aria-label="Basic example">
                             <button type="button" class="btn btn-warning" id="btn-edit-pegawai"
                             data-toggle="modal" 
                             data-target="#update"
                             data-id_pegawai="{{$pegawai->id_pegawai}}"
                             data-nama="{{$pegawai->nama}}"
                             data-jenis_kelmain="{{$pegawai->jenis_kelamin}}"
                             data-no_hp="{{$pegawai->no_hp}}"
                             data-jabatan="{{$pegawai->jabatan}}"
                             data-alamat="{{$pegawai->alamat}}"
                             data-email="{{$pegawai->email}}"
                            >Ubah</button>
                           </div>
                           <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-danger" id="btn-delete-pegawai"
    
                            data-toggle="modal" 
                            data-target="#delete"
                            data-id_pegawai="{{$pegawai->id_pegawai}}"
                            
                            >Hapus</button>
                            {{-- <button type="button" class="btn btn-primary" id="btn-edit-pegawai"
                          
                            >Absen</button> --}}
                          </div>
                          </td>
                    </tr>
                @endforeach
                  </tbody>
                  </table>
                  </div>
                  </div>
                  </div>
                  </div>
                </div>
                  
                  <!-- Modal Insert-->
            <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   <h2 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h2>
                  </div>
                  <div class="modal-body">
                
                  <form method="post" action="{{action('PegawaiController@store')}}">
                      @csrf
                          <div class="form-group">
                            <label>ID Pegawai</label>
                          <input type="text" name="id_pegawai" class="form-control" value="{{ $lastID }}" readonly>
                          </div>
                          <div class="form-group">
                          <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required oninvalid="this.setCustomValidity('Harap isi bidang ini')" oninput="setCustomValidity('')">
                          </div>
                          <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text" name="jenis_kelamin" class="form-control" required required oninvalid="this.setCustomValidity('Harap isi bidang ini')" oninput="setCustomValidity('')">
                        </div>
                        <div class="form-group">
                          <label>No HP</label>
                          <input type="number" name="no_hp" class="form-control" required oninvalid="this.setCustomValidity('Harap isi bidang ini')" oninput="setCustomValidity('')">
                        </div>
                        <div class="form-group">
                          <label>Jabatan</label>
                          <select class="form-control" name="jabatan">
                            <option value="">--</option>
                            <option name="jabatan" value="Admin">Admin</option>
                            <option name="jabatan" value="Produksi">Produksi</option>                 
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="alamat" class="form-control" required oninvalid="this.setCustomValidity('Harap isi bidang ini')" oninput="setCustomValidity('')">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control" required oninvalid="this.setCustomValidity('Harap isi dengan email yang benar')" oninput="setCustomValidity('')">
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            
                    <!-- Modal DELETE -->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                 
                  <div class="modal-body">
                    <strong>Apakah anda yakin akan menghapus data tersebut? </strong>
                  <form method="post" action="{{action('PegawaiController@destroy', 'delete')}}">
                      @method('DELETE')
                      @csrf
                            <input type="text" name="id_pegawai" id="delete-id_pegawai" hidden>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
      
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
            
                        // $('#edit-id_pegawai').val(id_pegawai);
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
            
                    //   $(document).on('click','#btn-restore-pegawai',function(){
                    //     let id_pegawai = $(this).data('id_pegawai');
                    //     $('#restore-id_pegawai').val(id_pegawai);
            
                    //   });
            
                    //   $(document).on('click','#btn-force-delete-pegawai',function(){
                    //     let id_pegawai = $(this).data('id_pegawai');
                    //     $('#force-delete-id_pegawai').val(id_pegawai);
            
                    //   });

                      
                </script>
  <script type="text/javascript">
    $('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
    type : 'get',
    url : '{{URL::to('search')}}',
    data:{'search':$value},
    success:function(data){
    $('tbody').html(data);
    }
    });
    })
    </script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>

</body>
</html>
@endsection