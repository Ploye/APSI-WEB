@extends('layouts.app')

@extends('layouts.nav')
@section('content')

    <div id="page-wrapper">
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Pegawai</h1>
                @if (session('added_success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{session('added_success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
            
                  @if (session('updated_success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{session('updated_success')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                    @if (session('deleted_success'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{session('deleted_success')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                <button class="btn btn-primary" data-toggle="modal" data-target="#insertModal">Tambah Data</button>
                <br>
                <br>
                <table class="table table-bordered">
                    <thead  class="text-center">
                        <tr>
                            <td>No</td>
                            <td>ID Pegawai</td>
                            <td>Nama Pegawai</td>
                            <td>Jenis Kelamin</td>
                            <td>No HP</td>
                            <td>Jabatan</td>
                            <td>Alamat</td>
                            <td>Email</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody class="text-center">
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
                                {{-- <td>
                                @if ($dosen->status == 1)
                                    Aktif
                                @else
                                    Tidak Aktif
                                @endif
                                </td> --}}
                                {{-- <td>{{ $dosen->keterangan}}</td> --}}
                                <td><div class="btn-group" role="group" aria-label="Basic example">
                                     <button type="button" class="btn btn-primary" id="btn-edit-pegawai"
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
                                    
                                    <button type="button" class="btn btn-danger" id="btn-delete-pegawai"
            
                                    data-toggle="modal" 
                                    data-target="#delete"
                                    data-id_pegawai="{{$pegawai->id_pegawai}}"
                                    
                                    >Hapus</button>
                                  </div></td>
                            </tr>
                        @endforeach
                      
                    </tbody>
                </table>
                {{-- <hr/>
                <h1>RecycleBin</h1>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#emptyModal">Empty</button>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#restoreAllModal">Restore All</button>
                </div>
                <br>
                <br>
                <table class="table table-bordered">
                  <thead  class="text-center">
                      <tr>
                        <td>No</td>
                        <td>ID Pegawai</td>
                        <td>Nama Pegawai</td>
                        <td>Jenis Kelamin</td>
                        <td>No HP</td>
                        <td>Jabatan</td>
                        <td>Alamat</td>
                        <td>Email</td>
                        <td>Opsi</td>
                      </tr>
                  </thead>
                  <tbody class="text-center">
                      @php
                          $no = 1;   
                      @endphp
            
                      @foreach ($trash as $del)
                          <tr>
                              <td>{{ $no++}}</td>
                                <td>{{ $del->id_pegawai}}</td>
                                <td>{{ $del->nama}}</td>
                                <td>{{ $del->jenis_kelamin}}</td>
                                <td>{{ $del->no_hp}}</td>
                                <td>{{ $del->jabatan}}</td>
                                <td>{{ $del->alamat}}</td>
                                <td>{{ $del->email}}</td> --}}
                              {{-- <td>
                              @if ($del->status == 1)
                                  Aktif
                              @else
                                  Tidak Aktif
                              @endif
                              </td> --}}
                              {{-- <td>{{ $del->keterangan}}</td> --}}
                              {{-- <td><div class="btn-group" role="group" aria-label="Basic example">
                                  <button type="button" class="btn btn-primary" id="btn-restore-pegawai"
                                   data-toggle="modal" 
                                   data-target="#restoreModal"
                                   data-id_pegawai=""="{{$del->id_pegawai}}"
                                  >Restore</button>
                                  <button type="button" class="btn btn-danger" id="btn-force-delete-pegawai"
                                  data-toggle="modal" 
                                  data-target="#forceDeleteModal"
                                  data-id_pegawai="{{$del->id_pegawai}}"
                                  >Delete</button>
                                </div></td>
                          </tr>
                      @endforeach
                    
                  </tbody>
              </table>
            </div> --}}
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
                              <input type="text" name="id_pegawai" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Nama</label>
                              <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label>No HP</label>
                            <input type="text" name="no_hp" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" required>
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                  </div>
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
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-warning">Update</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                 
                  <div class="modal-body">
                    <strong>Apakah anda yakin akan menghapus data tersebut? </strong>
                  <form method="post" action="{{action('PegawaiController@destroy', 'delete')}}">
                      @method('DELETE')
                      @csrf
                            <input type="hidden" name="id_pegawai" id="delete-id_pegawai">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
              <!-- Modal Empty -->
              {{-- <div class="modal fade" id="emptyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Empty Data Pegawai</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <strong>Apakah anda yakin akan menghapus seluruh data tersebut? </strong>
                    <form method="post" action="{{action('PegawaiController@emptyAll')}}">
                        @csrf
                          
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Empty</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div> --}}
            
               <!-- Modal Restore All -->
               {{-- <div class="modal fade" id="restoreAllModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Restore All Data Pegawai</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                   
                    <div class="modal-body">
                      <strong>Apakah anda yakin akan mengembalikan  seluruh data? </strong>
                    <form method="post" action="{{action('PegawaiController@restoreAll')}}">
                        @csrf
                       
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Restore All</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
               <!-- Modal Restore -->
               <div class="modal fade" id="restoreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Restore Data Pegawai</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                   
                    <div class="modal-body">
                      <strong>Apakah anda yakin akan menegmbalikan data tersebut? </strong>
                    <form method="post" action="{{action('PegawaiController@restore')}}">
                        @csrf
                        <input type="" name="id_pegawai" id="restore-id_pegawai">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Restore</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div> --}}
            
               <!-- Modal Force Delete -->
               {{-- <div class="modal fade" id="forceDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pegawai</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                   
                    <div class="modal-body">
                      <strong>Apakah anda yakin akan Hapus data tersebut? </strong>
                    <form method="post" action="{{action('PegawaiController@forceDelete')}}">
                        @csrf
                        <input type="hidden" name="id_pegawai" id="force-delete-id_pegawai">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Delete</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div> --}}
                {{-- JS DOM --}}
      
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