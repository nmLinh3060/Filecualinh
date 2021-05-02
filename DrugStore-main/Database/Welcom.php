<?php
	session_start();
	if(!isset($_SESSION['userinfor'])) {
		header('../../DrugStore-main/Database/Login.php');
		die();
	}

	if(!empty($_POST)) {
		require_once('../../DrugStore-main/Database/dbhelper.php');
	}
	$username = null;
	$fullname = '';
	if(isset($_SESSION['userinfor'])) {
		$username = $_SESSION['userinfor'];
		$fullname = $username['hoten'];
	}


?>
 
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="../../DrugStore-main/images/favicon.png">
      <title>Welcome to Drugshop</title>
      <link href="../../DrugStore-main/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="../../DrugStore-main/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../DrugStore-main/css/flexslider.css" type="text/css" media="screen"/>
      <link href="../../DrugStore-main/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="../../DrugStore-main/css/style.css" rel="stylesheet">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper" style="margin-top: 100px;">
         <div class="header">    
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="../../DrugStore-main/index.html"><img src="../../DrugStore-main/images/logo.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="option_nav">
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="#">About Us</a></li>
                                 <li><a href="#">News</a></li>
                                 <li><a href="#">Service</a></li>
                                 <li><a href="#">Recruiment</a></li>
                                 <li><a href="#">Media</a></li>
                                 <li><a href="#">Support</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                              <h5 class="text-center"><span style="color:white; font-family:Verdana">Chào mừng <strong><?=$fullname?></strong></span></h5>
                              <a href="../../DrugStore-main/Database/Logout.php"><h5 class="text-center"><span style="color:coral; font-family:Verdana">Đăng xuất</span></h5></a>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart" onmouseover="updateCart(),updatePrice()">
                              <a href="#" class="cart-icon" id = "card-shop">cart <span class="cart_no"></span></a>
                              <ul class="option-cart-item" id="cart-list">
                                 <li id="marker"><span class="total">Total <strong id="total-price" >600.000 VNĐ</strong></span><button class="checkout" onClick="location.href='../../DrugStore-main/checkout.html'">CheckOut</button></li>
                              </ul>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trang chủ</a>
                                 <div class="dropdown-menu">
                                    <ul class="mega-menu-links">
                                       <li><a href="../../DrugStore-main/index.html">home1</a></li>
                                       <li><a href="../../DrugStore-main/home2.html">home2</a></li>
                                       <li><a href="../../DrugStore-main/home3.html">home3</a></li>
                                       <li><a href="../../DrugStore-main/productlitst.html">List sản phẩm 1</a></li>
                                       <li><a href="../../DrugStore-main/productgird.html">List sản phẩm 2</a></li>
                                       <li><a href="../../DrugStore-main/details.html">Details</a></li>
                                       <li><a href="../../DrugStore-main/cart.html">Giỏ hàng </a></li>
                                       <li><a href="../../DrugStore-main/checkout.html">CheckOut</a></li>
                                       <li><a href="../../DrugStore-main/checkout2.html">CheckOut2</a></li>
                                       <li><a href="../../DrugStore-main/contact.html">Liên hệ</a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li><a href="../../DrugStore-main/productgird.html">Sale</a></li>
                              <li><a href="../../DrugStore-main/productlitst.html">Tư vấn thuốc </a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sống Khỏe</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="../../DrugStore-main/productgird.html">Bệnh thường gặp</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">Gia đình</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">Bệnh mãn tính</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">Làm đẹp</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">Dinh dưỡng</a></li>
                                             <li><a href="../../DrugStore-main/productgird.html">Tin tức </a></li>
                                          </ul>
                                       </div>

                                    </div>
                                 </div>
                              </li>
                              <li><a href="../../DrugStore-main/productgird.html">blog</a></li>
                              <li><a href="../../DrugStore-main/contact.html">Liên hệ chúng tôi</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Tiết kiệm hơn, sống khỏe hơn </span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Sale 2020</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Chung tay bảo vệ sức khỏe cho cả gia đình bạn.</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                       
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="../../DrugStore-main/images/slider-image-01.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Tư vấn về toa thuốc</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>Tìm nơi tư vấn và mua thuốc với giá tốt, uy tín. 
                              Hãy để Pharmacity giúp bạn!</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="../../DrugStore-main/images/slider-image-02.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Ưu đãi lên đến 50%</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Dành cho thành viên của EXTRA CARE</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="../../DrugStore-main/images/slider-image-03.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="../../DrugStore-main/images/promotion-01.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="../../DrugStore-main/images/promotion-02.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="../../DrugStore-main/images/promotion-03.png" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Đề Xuất</strong> </h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="../../DrugStore-main/images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>dầu ăn con cét</div>
                                 <h4 class="price">415000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details2.html"><img src="../../DrugStore-main/images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>sữa tắm "Em tắm anh yêu"</div>
                                 <h4 class="price">577000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details3.html"><img src="../../DrugStore-main/images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Mì xào bò</div>
                                 <h4 class="price">135000 VND</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details4.html"><img src="../../DrugStore-main/images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Sữa matcha hương socola</div>
                                 <h4 class="price">250000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details5.html"><img src="../../DrugStore-main/images/products/small/products-05.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Đường tinh luyện</div>
                                 <h4 class="price">100000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details6.html"><img src="../../DrugStore-main/images/products/small/products-06.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Honda</div>
                                 <h4 class="price">300000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details7.html"><img src="../../DrugStore-main/images/products/small/products-07.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Xiaomi note 10</div>
                                 <h4 class="price">320000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details8.html"><img src="../../DrugStore-main/images/products/small/products-08.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Dép kẹp</div>
                                 <h4 class="price">167000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Sản phẩm </strong> khác</h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="../../DrugStore-main/images/products/small/products-09.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Thạch cao</div>
                                 <h4 class="price">400000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="../../DrugStore-main/images/products/small/products-10.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Thịt bò</div>
                                 <h4 class="price">312000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="../../DrugStore-main/images/products/small/products-11.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Cao su</div>
                                 <h4 class="price">505000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="../../DrugStore-main/images/products/small/products-12.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>Bút bi</div>
                                 <h4 class="price">910000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="../../DrugStore-main/images/products/small/products-13.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>ACK</div>
                                 <h4 class="price">168000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="../../DrugStore-main/images/products/small/products-14.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>firewall</div>
                                 <h4 class="price">50000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products" >
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="../../DrugStore-main/images/products/small/products-15.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>clgt</div>
                                 <h4 class="price">760000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="../../DrugStore-main/details.html"><img src="../../DrugStore-main/images/products/small/products-16.png" alt="Product Name"></a></div>
                                 <div class="productname"></br></br>ngáo</div>
                                 <h4 class="price">56000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="addToCart(this);updateCart();Fly()">Thêm vào giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title"><strong>Nhãn hàng </strong> của chúng tôi</h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="../../DrugStore-main/images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="../../DrugStore-main/images/logo.png" alt=""></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Contact <strong>Info</strong></h4>
                        <p>17A, Cong Hoa, HCM , Vietnam</p>
                        <p>Call Us : (084) 1234567</p>
                        <p>Email : ahihi@gmail.com</p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Customer<strong> Support</strong></h4>
                        <ul class="support">
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Payment Option</a></li>
                           <li><a href="#">Booking Tips</a></li>
                           <li><a href="#">Infomation</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                        <p>Pharmacity VN</p>
                        <form class="newsletter">
							<input type="text" name="" placeholder="Type your email....">
							<input type="submit" value="SignUp" class="button">
						</form>
                     </div>   
                  </div>
               </div>
            </div>
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>Copyright © 2012. Designed by <a href="#">KMA</a>. All rights reseved</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <style>
      body{
         position: relative;
      }
         .img-product-fly{
            position: absolute;
            z-index: 999999999;
            width: 35px;
            height: 35px;
            object-fit: fill;
            border-radius: 100%;
            border: 2px solid blanchedalmond;
            transition: all 0.9s ease;
      }
      </style>
      <script>
         function Fly() {
               $(document).on('click','.add-cart',function(e){
               e.preventDefault();
               var parent = $(this).parents('.products');
               var cart = $(document).find('#card-shop');
               var src = parent.find('img').attr('src');

               var gotoX = parent.offset().left;
               var gotoY = parent.offset().top;

               $('<img />',{
                  class : 'img-product-fly',
                  src: src
               }).appendTo('body').css({
                  'top': gotoY,
                  'left': parseInt(gotoX) + parseInt(parent.width()) - 50
               })

               setTimeout(function(){
                  $(document).find('.img-product-fly').css({
                  'top': cart.offset().top,
                  'left': cart.offset().left
                  });
                  setTimeout(function(){
                  $(document).find('.img-product-fly').remove();
                  }, 900)
               }, 50);
            });
         }
      </script>
      <!-- Bootstrap core JavaScript==================================================-->
      <script type="text/javascript" src="../../DrugStore-main/js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="../../DrugStore-main/js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="../../DrugStore-main/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="../../DrugStore-main/js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="../../DrugStore-main/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="../../DrugStore-main/js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="../../DrugStore-main/js/script.min.js" ></script>
     <script type="text/javascript" src="../../DrugStore-main/js/cart.js"></script>
   </body>
</html>
