<div id="test" class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
                <div class="input-group custom-search-form">
                </div>
            <li>
                <a href="/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#" ><i class="fa fa-table fa-fw"></i> Data<span class="fa arrow"></span></a>
                <ul  class="nav nav-second-level">
                    <li>
                        <a href="/pegawai">Pegawai</a>
                    </li>
                    <li>
                        <a href="/kelolabaju">Kelola Baju</a>
                    </li>
                    <li>
                        <a href="#">Invoice</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Toko</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
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
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
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
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
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
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>

<script src="admin/vendor/jquery/jquery.min.js"></script>
@guest
<script>
    $(function () {
        $('#test').children().click(function(){
          alert('Anda harus login');
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

<!-- /.navbar-static-side -->
</nav>

