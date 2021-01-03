        

@extends('layouts.app')

@extends('layouts.nav')
@section('content')

<div id="page-wrapper">
        
  <div class="row">
      <div class="col-lg-12">
              
      </div>
      <!-- /.col-lg-12 -->
  </div>
        <h1>Laporan Penjualan</h1>
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
        <br>
        <br>
        <table class="table table-bordered">
            <thead  class="text-center">
                <tr>
                    <td>No</td>
                    <td>Kode Baju</td>
                    <td>Gambar</td>
                    <td>Warna Baju</td>
                    <td>Ukuran</td>
                    <td>Jenis Baju</td>
                    <td>Harga</td>
                    <td>Qty</td>
                    <td>Total Bayar</td>
                    
                    <td>Nama Pembeli</td>
                    <td>Email</td>
                    <td>Alamat</td>
                    <td>Metode Pembayaran</td>
                    <td>Tanggal</td>
                    <td>Opsi</td>
                </tr>
            </thead>
            <tbody class="text-center">
                @php
                    $no = 1;   
                @endphp
    
                @foreach ($laporanbeli as $laporanbeli)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $laporanbeli->kode_baju}}</td>
                        <td><img src="{{$laporanbeli->getavatar()}}" class="img-responsive" alt="avatar"></td>
                        <td>{{ $laporanbeli->warnabaju}}</td>
                        <td>{{ $laporanbeli->ukuran}}</td> 
                        <td>{{ $laporanbeli->jenis_baju}}</td>
                        <td>@currency($laporanbeli->harga)</td>
                        <td>{{ $laporanbeli->qty}}</td>
                        <td>@currency($laporanbeli->bayar)</td>
                        
                        <td>{{ $laporanbeli->nama_cs}}</td>
                        <td>{{ $laporanbeli->email_cs}}</td>
                        <td>{{ $laporanbeli->alamat_cs}}</td>
                        <td>{{ $laporanbeli->metodeByr}}</td>
                        <td>{{ $laporanbeli->created_at}}</td>
                        <td><button type="submit" class="btn btn-warning">Cetak</button></td>
                    </tr>
                @endforeach
              
            </tbody>
        </table>

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