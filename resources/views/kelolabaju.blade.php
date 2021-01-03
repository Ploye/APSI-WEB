        

@extends('layouts.app')

@extends('layouts.nav')
@section('content')

<div id="page-wrapper">
        
  <div class="row">
      <div class="col-lg-12">
              
      </div>
      <!-- /.col-lg-12 -->
  </div>
        <h1>Data Baju</h1>
        @if (session('added_success'))
        <div  class="alert alert-danger" role="alert">
            {{session('added_success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
    
          @if (session('updated_success'))
          <div class="alert alert-warning" role="alert">
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
        <button class="btn btn-primary" data-toggle="modal" data-target="#insertModal">Tambah Data</button>
        <br>
        <br>
        <table class="table table-bordered">
            <thead  class="text-center">
                <tr>
                    <td>No</td>
                    <td>Kode Baju</td>
                    <td>Nama Baju</td>
                    <td>Bahan</td>
                    <td>Warna Baju</td>
                    <td>Ukuran</td>
                    <td>Jenis Baju</td>
                    <td>Harga</td>
                    <td>Gambar</td>
                    <td>Stok</td>
                    <td>Opsi</td>
                </tr>
            </thead>
            <tbody class="text-center">
                @php
                    $no = 1;   
                @endphp
    
                @foreach ($baju as $baju)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $baju->kode_baju}}</td>
                        <td>{{ $baju->nama_baju}}</td>
                        <td>{{ $baju->bahan}}</td>
                        <td>{{ $baju->warnabaju}}</td>
                        <td>{{ $baju->ukuran}}</td> 
                        <td>{{ $baju->jenis_baju}}</td>
                        <td>@currency($baju->harga)</td>
                        <td>
                            <img src="{{$baju->getavatar()}}" class="img-responsive" alt="avatar">
                        </td>
                        <td>{{ $baju->stok}}</td>
                        <td><div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-warning" id="btn-edit-baju"
                             data-toggle="modal" 
                             data-target="#update"
                             data-id_baju="{{$baju->id_baju}}"
                             data-kode_baju="{{$baju->kode_baju}}"
                             data-nama_baju="{{$baju->nama_baju}}"
                             data-bahan="{{$baju->bahan}}"
                             data-warnabaju="{{$baju->warnabaju}}"
                             data-ukuran="{{$baju->ukuran}}"
                             data-jenis_baju="{{$baju->jenis_baju}}"
                             data-harga="{{$baju->harga}}"
                             data-stok="{{$baju->stok}}"
                             data-avatar="{{$baju->avatar}}"
                            >Ubah</button>
                            
                            <button type="button" class="btn btn-danger" id="btn-delete-baju"
                            data-toggle="modal" 
                            data-target="#delete"
                            data-id_baju="{{$baju->id_baju}}"
                            >Hapus</button>
                          </div></td>
                    </tr>
                @endforeach
              
            </tbody>
        </table>

    <!-- Modal Insert-->
    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Baju</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" action="{{action('BajuController@store')}}" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                      <label>Kode Baju</label>
                      <input type="text" name="kode_baju" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <label>Nama Baju</label>
                      <input type="text" name="nama_baju" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <label>Bahan</label>
                    <select name="bahan" class="form-control">
                      <option value="KAIN FLECE">KAIN FLECE</option>
                      <option value="KAIN KAFAN">KAIN KAFAN</option>
                    </select>
                  </div>

                  <div class="form-group">
                      <label>Warna Baju</label>
                      <select name="warnabaju" class="form-control">
                        <option value="SEMUA WARNA ADA">SEMUA WARNA ADA</option>
                        <option value="PUTIH">PUTIH</option>
                        <option value="HITAM">HITAM</option>
                        <option value="MERAH">MERAH</option>
                        <option value="BIRU">BIRU</option>
                        <option value="KUNING">KUNING</option>
                        <option value="HIJAU">HIJAU</option>
                      </select>
                    </div>

                  <div class="form-group">
                    <label>Ukuran</label>
                    <select name="ukuran" class="form-control">
                      <option value="ALL SIZE">ALL SIZE</option>
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Jenis Baju</label>
                    <select name="jenis_baju" class="form-control">
                      <option value="PANJANG PENDEK">PANJANG PENDEK</option>
                      <option value="TANGAN PANJANG">TANGAN PANJANG</option>
                      <option value="TANGAN PENDEK">TANGAN PENDEK</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="avatar" class="form-control" required>
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
                      <h5 class="modal-title" id="exampleModalLabel">Ubah Baju</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>                      
                    </div>
                    <div class="modal-body">
                    <form method="post" action="{{action('BajuController@update', 'update')}}">
                        @method('PATCH')
                        @csrf

                    <div class="form-group">
                      <label>No</label>
                      <input type="text" name="id_baju" class="form-control" id="edit-id_baju" readonly>
                    </div>

                    <div class="form-group">
                      <label>Kode Baju</label>
                      <input type="text" name="kode_baju" class="form-control" id="edit-kode_baju">
                    </div>

                    <div class="form-group">
                      <label>Nama Baju</label>
                      <input type="text" name="nama_baju" class="form-control" id="edit-nama_baju">
                    </div>

                    <div class="form-group">
                      <label>Bahan</label>
                      <select name="bahan" class="form-control">
                        <option value="KAIN FLECE" @if($baju->bahan=="KAIN FLECE") selected @endif>KAIN FLECE</option>
                        <option value="KAIN KAFAN" @if($baju->bahan=="KAIN KAFAN") selected @endif>KAIN KAFAN</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Warna Baju</label>
                      <select name="warnabaju" class="form-control">
                        <option value="SEMUA WARNA ADA" @if($baju->warnabaju=="SEMUA WARNA ADA") selected @endif>SEMUA WARNA ADA</option>
                        <option value="PUTIH" @if($baju->warnabaju=="PUTIH") selected @endif>PUTIH</option>
                        <option value="HITAM" @if($baju->warnabaju=="HITAM") selected @endif>HITAM</option>
                        <option value="MERAH" @if($baju->warnabaju=="MERAH") selected @endif>MERAH</option>
                        <option value="BIRU" @if($baju->warnabaju=="BIRU") selected @endif>BIRU</option>
                        <option value="KUNING" @if($baju->warnabaju=="KUNING") selected @endif>KUNING</option>
                        <option value="HIJAU" @if($baju->warnabaju=="HIJAU") selected @endif>HIJAU</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Ukuran</label>
                      <select name="ukuran" class="form-control">
                        <option value="ALL SIZE" @if($baju->ukuran=="ALL SIZE") selected @endif>ALL SIZE</option>
                        <option value="S" @if($baju->ukuran=="S") selected @endif>S</option>
                        <option value="M" @if($baju->ukuran=="M") selected @endif>M</option>
                        <option value="L" @if($baju->ukuran=="L") selected @endif>L</option>
                        <option value="XL" @if($baju->ukuran=="XL") selected @endif>XL</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Jenis Baju</label>
                      <select name="jenis_baju" class="form-control">
                        <option value="PANJANG PENDEK" @if($baju->jenis_baju=="PANJANG PENDEK") selected @endif>PANJANG PENDEK</option>
                        <option value="TANGAN PANJANG" @if($baju->jenis_baju=="TANGAN PANJANG") selected @endif>TANGAN PANJANG</option>
                        <option value="TANGAN PENDEK" @if($baju->jenis_baju=="TANGAN PENDEK") selected @endif>TANGAN PENDEK</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>harga</label>
                      <input type="text" name="harga" class="form-control" id="edit-harga">
                  </div>

                  <div class="form-group">
                      <label>stok</label>
                      <input type="text" name="stok" class="form-control" id="edit-stok">
                  </div>

                  <div class="form-group">
                    <label>Gambar</label>
                    <input type="text" name="avatar" class="form-control" id="edit-avatar" value="{{$baju->avatar}}">
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
            <h5 class="modal-title" id="exampleModalLabel">Delete Baju</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
         
          <div class="modal-body">
            <strong>Apakah anda yakin akan menghapus data tersebut? </strong>
          <form method="post" action="{{action('BajuController@destroy', 'delete')}}">
              @method('DELETE')
              @csrf
                    <input type="hidden" name="id_baju" id="delete-id_baju">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          </div>
        </div>
      </div>
    </div>


        {{-- JS DOM --}}
        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
        <script>
            $(document).on('click','#btn-edit-baju',function(){
                let id_baju = $(this).data('id_baju');
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
                  url: 'kelolabaju/'+id_baju,
                  dataType: 'json',
                  success: function(res){
                      // console.log(res);
                      $('#edit-id_baju').val(res[0].id_baju);
                      $('#edit-kode_baju').val(res[0].kode_baju);
                      $('#edit-nama_baju').val(res[0].nama_baju);
                      //  $('#edit-keterangan').text(res[0].keterangan);
                      $('#edit-bahan').val(res[0].bahan);
                      $('#edit-warbaju').val(res[0].warnabaju);
                      $('#edit-ukuran').val(res[0].ukuran);
                      $('#edit-jenis_baju').val(res[0].jenis_baju);
                      $('#edit-harga').val(res[0].harga);
                      $('#edit-stok').val(res[0].stok);
                      $('#edit-avatar').val(res[0].avatar);
                      //  $('#edit-status option').filter(function(){
                      //      return ($(this).val()== res[0].status);
                      //  }).prop('selected', true);
                  }
                });
    
                
            });
    
            $(document).on('click','#btn-delete-baju',function(){
                let id_baju = $(this).data('id_baju');
                $('#delete-id_baju').val(id_baju);
    
              }); 
    
              $(document).on('click','#btn-restore-baju',function(){
                let id_baju = $(this).data('id_baju');
                $('#restore-id_baju').val(id_baju);
    
              });
    
              $(document).on('click','#btn-force-delete-baju',function(){
                let id_baju = $(this).data('id_baju');
                $('#force-delete-id_baju').val(id_baju);
    
              });
        </script>
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

</body>

</html>
@endsection