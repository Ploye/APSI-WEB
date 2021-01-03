<!DOCTYPE html>
<html>
<head>
<title>Web Shoping Toko Click Design</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../../tokod/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../../tokod/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="../../tokod/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../../tokod/js/move-top.js"></script>
<script type="text/javascript" src="../../tokod/js/easing.js"></script>
<link href="../../css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="../../tokod/js/jstarbox.js"></script>
<link rel="stylesheet" href="../../tokod/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body>
<div class="header">
    <div class="container">     
        <div class="logo">
            <img src="../../tokod/images/logoclick.png">
        </div>
        <div class="logo">
            <h1><a href="index.html"><b>D</b>CLICK DESIGN<span>The Best Sablon In Cianjur</span><span></span></a></h1>          
        </div>

        <div><hr></div>

        <div class="nav-top">
            <nav class="navbar navbar-default">
                <div class="brand">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="/{{ Auth::user()->id }}/toko">Belanja Baju</a></li>
                  <li class="active"><a href="/{{ Auth::user()->id }}/pesanbaju">Pesan Baju</a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i> <span>, Logout?</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout"> <span>Logout</span></a></li>
                    </ul>
                  </li> 
                </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!--content-->

<div class="content-top ">
    <div class="container ">
        <div class="panel">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{$baju->getavatar()}}" class="img-responsive" alt="avatar">
                    </div>
                </div><br>
                <h3 class="panel-title">ISI FORMULIR PEMBELIAN BAJU</h3>
            </div>

            <div class="panel-body">
                <form method="POST" action="{{action('LaporanbeliController@store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>KODE BAJU</label>
                        <input name="kode_baju" type="text" class="form-control"  value="{{$baju->kode_baju}}" readonly>
                    </div>

                    <div class="form-group">
                        <label>NAMA BAJU</label>
                        <input name="nama_baju" type="text" class="form-control" value="{{$baju->nama_baju}}" readonly>
                    </div>

                    <div class="form-group">
                        <label>UKURAN</label>
                        <select class="form-control" name="ukuran">
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>BAHAN KAIN</label>
                        <select name="bahan" class="form-control">
                          <option value="KAIN FLECE">KAIN FLECE</option>
                          <option value="KAIN KAFAN">KAIN KAFAN</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label>Warna Baju</label>
                      <select name="warnabaju" class="form-control">
                        <option value="PUTIH">PUTIH</option>
                        <option value="HITAM">HITAM</option>
                        <option value="MERAH">MERAH</option>
                        <option value="BIRU">BIRU</option>
                        <option value="KUNING">KUNING</option>
                        <option value="HIJAU">HIJAU</option>
                      </select>
                    </div>

                    <div class="form-group">
                        <label>JENIS BAJU</label>
                        <select name="jenis_baju" class="form-control">
                          <option value="TANGAN PANJANG">TANGAN PANJANG</option>
                          <option value="TANGAN PENDEK">TANGAN PENDEK</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>HARGA</label>
                        <input name="harga" type="text" class="form-control" value="{{$baju->harga}}"  id="txt1"  onkeyup="sum();" readonly>
                    </div>

                    <div class="form-group">
                        <label>JUMLAH BELI BAJU</label>
                        <input name="qty" type="number" class="form-control" id="txt2"  onkeyup="sum();">
                    </div>

                    <div class="form-group">
                        <label>TOTAL BAYAR</label>
                        <input name="bayar" type="text" class="form-control" id="txt3" readonly>
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input name="avatar" type="text" class="form-control" value="{{$baju->avatar}}" readonly>
                    </div>

                    <div class="form-group">ISI BIODATA ANDA <br>
                        
                        <div class="form-group">
                            <label>NAMA ANDA</label>
                            <input name="nama_cs" type="text" class="form-control" placeholder="NAMA ANDA">
                        </div>

                        <div class="form-group">
                            <label>EMAIL ANDA</label>
                            <input name="email_cs" type="text" class="form-control" placeholder="EMAIL AKTIF ANDA">
                        </div>

                        <div class="form-group">
                            <label>MASUKAN ALAMAT LENGKAP</label>
                            <input name="alamat_cs" type="text" class="form-control" placeholder="JL NO, BLOK NO BLOK, RT/RW, DESA">
                        </div>

                    </div>

                    <div class="form-group"><hr>
                        
                        <div class="form-group">
                            <label>METODE PEMBAYARAN</label>
                            <select name="metodeByr" class="form-control">
                              <option value="DIANTAR KURIR">DIANTAR KURIR</option>
                              <option value="DATANG KE TOKO">DATANG KE TOKO</option>
                            </select>
                        </div>

                    </div>

                    <button type="button" class="btn btn-secondary btn-sm" onclick="history.go(-1)">Batal</button>
                    <button type="submit" class="btn btn-warning btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../../tokod/js/bootstrap.js"></script>

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>
  
</body>
</html>