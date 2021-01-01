
@extends('layouts.app')

@extends('layouts.nav')
@section('content')
    <div id="page-wrapper">
        
        <div class="row">
            <div class="col-lg-12">
                <br>
                <center><img class="wp-image-566 aligncenter" src="https://sablondigitall.com/wp-content/uploads/2019/01/logo-click-300x148.png" alt="" width="134" height="66" srcset="https://sablondigitall.com/wp-content/uploads/2019/01/logo-click-300x148.png 300w, https://sablondigitall.com/wp-content/uploads/2019/01/logo-click.png 437w" sizes="(max-width: 134px) 100vw, 134px"></center>
                <h1 class="page-header" style="text-align: center">APSIP3 & APSISABLON</h1>
               
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                    {{-- <span class="invalid-feedback" role="alert"> --}}
                        <strong>{{ $message }}<a class="nav-link"  data-toggle="modal" data-target="#exampleModal" href="{{ route('login') }}"> Login kembali?</a></strong>
                    {{-- </span> --}}
                    .Klik jika anda mau.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>  
                </div>
                @enderror
                    
                  
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="entry-content">
    
    {{-- <p><strong style="color: #2392C9; line-height: 1.5;">SEJARAH</strong></p>
    <p><strong style="color: #99CC52">click design house</strong> lahir pada tanggal 12 Januari 2017. Awal mulanya karena melihat peluang atas kebutuhan masyarakat terhadap kaos satuan, couple dan kaos komunitas. oleh karena itu click hadir sebagai pemenuh kebutuhan masyarakat terhadap sablon kaos tersebut, dimana dalam saetiap pengerjaannya tidak harus menunggu lama. Kami ingin memberikan solusi dan pelayanan yang optimal terhadap segala aspek, baik produksi&nbsp; dan hasil setiap karyanya serta ingin memberikan pelayanan yang cepat tanpa menunggu berhari hari, dari&nbsp; situ lah kami lahir untuk memberikan inovasi yang terbaik.</p>
     --}}
    <p><strong style="line-height: 1.5; color: #2392C9;">Anggota APSI : <b>APSIP3</b> (Sistem Penggajian dan Pengelolaan Pegawai)</strong></p>
    <ul>
    <li><strong> Ketua (PM) : AlvinLie</strong> </li>
    <li><strong> Analis : M Ridho Zulfikri</strong> </li>
    <li><strong> Programmer : M Musa Musthofa</strong> </li>
    <li><strong> Desainer : Lingga Firdaus</strong> </li>
    <li><strong> Dokumentasi : Alma Hana Katherina</strong> </li>
    </ul>
    <p><strong style="line-height: 1.5; color: #2392C9;">Anggota APSI : <b>APSISABLON</b> (Penjualan Baju dan Pemesanan Sablon)</strong></p>
    <ul>
    <li><strong> Ketua (PM) : M Bayu Misbahudin</strong> </li>
    <li><strong> Analis : Mochamad Fauqi Alsyiari Hakim </strong> </li>
    <li><strong> Programmer : Saidina Husen</strong> </li>
    <li><strong> Desainer : M Asipa Zaenal Arifin</strong> </li>
    <li><strong> Dokumentasi : M Bayu Misbahudin</strong> </li>
    </ul>
    <hr>
    </div>
    <footer style="text-align: right">
            <a style="text-align: right" href="https://github.com/Ploye/APSI-WEB" rel="nofollow">©2020 All Rights Reserved</a><span class="sep"> | </span>APSIP3 - APSISABLON		</div>
    </footer>
       
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
<script>

    $(document).ready(function(){
                        $(".preloader").fadeOut();
                           })
                           
</script>
</body>
    
</html>
@endsection