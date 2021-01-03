<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pegawai</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<p>@php
		date_default_timezone_set('Asia/Jakarta');
		echo '' . date('j F, Y');
		@endphp</p>
	<center>
		<h5>Laporan Baju</h4>
	</center>
	
	<table class='table table-bordered'>
		<thead>
			<tr>
                <td>No</td>
                <td>Kode Baju</td>
                <td>Nama Baju</td>
                <td>Bahan</td>
                <td>Ukuran</td>
                <td>Jenis Baju</td>
                <td>Harga</td>
                <td>Stok</td>
          
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
                    <td>{{ $baju->ukuran}}</td>
                    <td>{{ $baju->jenis_baju}}</td>
                    <td>@currency( $baju->harga)</td>
                    <td>{{ $baju->stok}}</td>
                    
                </tr>
            @endforeach
          
        </tbody>

	</table>
 
</body>
</html>