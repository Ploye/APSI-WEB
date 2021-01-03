<style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>
  
  <div class="preloader">
    <div class="loading">
      <img src="admin/loading.gif" width="300">
      
    </div>
  </div>
  
<div id="test" class="navbar-default sidebar" role="navigation">
    
    <div class="sidebar-nav navbar-collapse">
      
        <ul class="nav" id="side-menu">
                <div class="input-group custom-search-form">
                </div>
               
            <li>
                <a href="/home"><i class="fa fa-home"></i> Beranda</a>
            </li>
            <li>
                <a href="#" ><i class="fa fa-group"></i> Data Pegawai<span class="fa arrow"></span></a>
                <ul  class="nav nav-second-level">
                    <li>
                        <a href="/pegawai">Pegawai</a>
                    </li>
                    <li>
                        <a href="/absen">Absensi</a> 
                        <a href="/penggajian">Penggajian</a>
                        
                    </li>
                    {{-- <li>
                        <a href="#">Invoice</a>
                    </li> --}}
                </ul>
            </li>
            {{-- <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Toko</a>
            </li> --}}
            {{-- <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li> --}}
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> Data Penjualan<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/kelolabaju">Kelola Baju</a>
                    </li>
                    {{-- <li>
                        <a href="buttons.html">Laporan Penjualan Baju</a>
                    </li> --}}
                    {{-- <li>
                        <a href="notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="icons.html"> Icons</a>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li> --}}
                </ul>
                <!-- /.nav-second-level -->
                
            </li>
         
            <li>
                
                <a  style="background-color: #f0f0f0"></i></a>
            </li>
            {{-- <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li> --}}
                </ul>
                <!-- /.nav-second-level -->
            </li>
            {{-- <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li> --}}
        </ul>
        
    </div>
    <!-- /.sidebar-collapse -->
</div>
{{-- <div  class="modal fade" id="tes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}


<script src="admin/vendor/jquery/jquery.min.js"></script>
@guest

<script>

    $(function () {
        $('#test').children().click(function(){
          alert('Anda harus login');
        //    document.getElementById("tes");
        });
        function cancel () { return false; };
        document.getElementById("test").disabled = true;
        var nodes = document.getElementById("test").getElementsByTagName('*');
        console.log(nodes);
        for (var i = 0; i < nodes.length; i++) {
            nodes[i].setAttribute('disabled', true);
            nodes[i].onclick = cancel;
        }
        
    }());
    </script>
@endguest
<script>
    $(document).ready(function(){
                        $(".preloader").fadeOut();
                           })
</script>

<!-- /.navbar-static-side -->
</nav>

