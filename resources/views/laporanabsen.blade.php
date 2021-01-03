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
		<h5>Laporan Absen</h4>
	</center>
	
	<table class='table table-bordered'>
		<thead>
			<tr>
                <td>No</td>
                <td>ID Pegawai</td>
                <td>Nama Pegawai</td>
                <td>Jabatan</td>
                <td>Tanggal</td>
                <td>Kehadiran</td>
			</tr>
		</thead>
        <tbody class="text-center">
            @php
                $no = 1;   
            @endphp

            @foreach ($absens as $absen)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $absen->pegawai->id_pegawai}}</td>
                    <td>{{ $absen->pegawai->nama}}</td>
                    <td>{{ $absen->pegawai->jabatan}}</td>
                    <td>{{ $absen->updated_at}}</td>
                    <td>
                      {{ $absen->status ? 'checked' : '' }}
                    </td>
                </tr>
                @endforeach
        </tbody>
	</table>
 
</body>
</html>