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
		<h5>Laporan Pegawai</h4>
	</center>
	
	<table class='table table-bordered'>
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
			</tr>
		@endforeach
		  </tbody>
	</table>
 
</body>
</html>