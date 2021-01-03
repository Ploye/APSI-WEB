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
<link href="../tokod/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../tokod/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="../tokod/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../tokod/js/move-top.js"></script>
<script type="text/javascript" src="../tokod/js/easing.js"></script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="../tokod/js/jstarbox.js"></script>
<link rel="stylesheet" href="tokod/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body>
<div class="header">
    <div class="container">     
        <div class="logo">
            <img src="../tokod/images/logoclick.png">
        </div>
        <div class="logo">
            <h1><a href="index.html"><b>D</b>CLICK DESIGN<span>The Best Sablon In Cianjur</span><span></span></a></h1>          
        </div>

        <div><hr></div>

        <div class="nav-top">
            <nav class="navbar navbar-default">
                <div class="brand">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Belanja Baju</a></li>
                  <li class="active"><a href="/{{ Auth::user()->id }}}/pesanbaju">Pesan Baju</a></li>
                  <li class="active"><a href="#">Keranjang</a></li>
                  <li class=""><div class="cart" >
                    <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
                    </div></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class=""><a> </a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i> <span>{{$cs->name}}, Logout?</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
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
        <div class="spec ">
            <h3>Produk Kami</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
            <div class="tab-head ">
                
                <div class=" tab-content tab-content-t ">
                    <div class="tab-pane active text-style" id="tab1">
                        <div class=" con-w3l">

                        <!-- sampai sini -->
                            @foreach($baju as $baju)
                            <!-- barang baris 1 x 4 ;  kolom 1-->
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">                             
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="{{$baju->getavatar()}}" class="img-responsive" alt="avatar">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">{{$baju->nama_baju}}</h6>                          
                                        </div>
                                        <div class="mid-2">
                                            <!-- harga -->
                                            <p><strong>Harga :</strong></p>
                                            <p ><label>$2.00</label><em class="item_price">{{$baju->harga}}</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <!-- stok -->
                                            <p><strong>Stok :</strong></p>
                                            <p ><em class="item_price">{{$baju->stok}}</em></p>
                                            <!-- <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div> -->
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                           <a href="{{$baju->id_baju}}/beli" class="btn btn-primary "> Beli </a>
                                        </div>
                                        <!-- my-cart-btn my-cart-b  -->
                                    </div>
                                </div> <br> 
                            </div>
                            <!-- kolom 2-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../tokod/js/bootstrap.js"></script>
<!-- //for bootstrap working --> <!-- KERANJANG -->
<!-- <script type='text/javascript' src="../tokod/js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script> -->
</body>
</html>