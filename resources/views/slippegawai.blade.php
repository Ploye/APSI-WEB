<!DOCTYPE html>
<html>
<head>
	<title>Slip Pegawai</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <br>
    <p>@php
		date_default_timezone_set('Asia/Jakarta');
		echo '' . date('j F, Y');
		@endphp</p>
    <br>
    
        <table class="table table-bordered">
        <thead>
          <tr>
            <th class="tg-3xi5" colspan="6" style="text-align: center">Perusahaan Naonwe<br>Jl.Jalankamanawe No.23</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-c6of" style="text-align: center">ID Pegawai</td>
            <td class="tg-c6of" style="text-align: center">Nama Pegawai</td>
            <td class="tg-c6of" style="text-align: center">Jabatan</td>
            <td class="tg-c6of" style="text-align: center">Total Hadir</td>
            <td class="tg-c6of" style="text-align: center" colspan="2">Gaji pokok</td>
          </tr>
          <tr>
            <td class="tg-0pky" style="text-align: center">{{$data['id_pegawai']}}</td>
            <td class="tg-0pky" style="text-align: center">{{$data['nama_pegawai']}}</td>
            <td class="tg-0pky" style="text-align: center">{{$data['jabatan']}}</td>
            <td class="tg-0pky" style="text-align: center">{{$data['jml_tidak_hadir']}}</td>
            <td class="tg-0pky" style="text-align: center" colspan="2">@currency($data['gaji_pokok'])</td>
          </tr>
          <tr>
            <td class="tg-0pky" colspan="3">Total Gaji : <h4 style="text-align: center"> @currency($data['gaji_diterima'])</h4></td>
            <td class="tg-0pky" colspan="3">Manager :</td>
          </tr>
        </tbody>
        </table>
</body>
</html>