<?php
    session_start();
	if(isset($_SESSION['userinfor'])) {
		header('Location: index.php');
		die();
	}
	if(!empty($_POST)) {
		require_once('Database/dbhelper.php');	


		$email = $fullname = $password = $confirmation_pwd = 
        $address1 = $address2 = $district = $phone = $city = $usr= $sex= '';


		if(isset($_POST['fullname'])) {
			$fullname = $_POST['fullname'];
		}
        if(isset($_POST['usr'])) {
			$usr = $_POST['usr'];
		}
		if(isset($_POST['email'])) {
			$email = $_POST['email'];
		}
        if(isset($_POST['sex'])) {
			$sex = $_POST['sex'];
		}
        if(isset($_POST['phone'])) {
			$phone = $_POST['phone'];
		}
		if(isset($_POST['password'])) {
			$password = $_POST['password'];
		}
		if(isset($_POST['confirmation_pwd'])) {
			$confirmation_pwd = $_POST['confirmation_pwd'];
		}
        if(isset($_POST['address1'])) {
			$address1 = $_POST['address1'];
		}
        if(isset($_POST['address2'])) {
			$address2 = $_POST['address2'];
		}
        if(isset($_POST['calc_shipping_district'])) {
			$district = $_POST['calc_shipping_district'];
		}
        if(isset($_POST['calc_shipping_provinces'])) {
			$city = $_POST['calc_shipping_provinces'];
		}
        		
		if($password == $confirmation_pwd && !empty($fullname) && !empty($email) 
				&& !empty($phone) && !empty($address1) && !empty($district) && !empty($city)
                && !empty($usr) && !empty($sex)) {
			$password = md5(md5(md5($password)));
			$sql = "insert into accountcus(ID, usernameCus, password, email, fullname, sex, phonenumber, created_at, updated_at ) values ('','$usr', '$password', '$email', '$fullname', '$sex', '$phone', '', '')";
            execute($sql);
            $idCus = "select ID from accountcus where fullname = $fullname and email = $email";
            $sql1 = "insert into address(id, idCus, province, district, wards, street) values ('', '$idCus', '$city', '$district', '', '$address1 & $address2' )";			
            execute($sql1);
			header('Location: index.php');
			die();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
        Welcome to DrugStore
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
    </script>
    <![endif]-->
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/logo.png" alt="FlatShop">
                            </a>
                        </div>
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
                                        <li>
                                            <a href="#">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                News
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Service
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Recruiment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Media
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Support
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="usermenu">
                                        <li>
                                            <a href="login.html" class="log">
                                                Đăng nhập
                                            </a>
                                        </li>
                                        <li>
                                            <a href="register.html" class="reg">
                                                Đăng kí
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="header_bottom">
                            <ul class="option">
                                <li id="search" class="search">
                                    <form>
                                        <input class="search-submit" type="submit" value="">
                                        <input class="search-input" placeholder="Nhập từ khóa tìm kiếm..." type="text" value="" name="search">
                                    </form>
                                </li>
                                <li class="option-cart">
                                    <a href="#" class="cart-icon">
                                        cart
                                        <span class="cart_no">
                                            0
                                        </span>
                                    </a>
                                    <ul class="option-cart-item">
                                        <li>
                                            <div class="cart-item">
                                                <!--<div class="image">
                                                    <img src="images/products/thum/products-01.png" alt="">
                                                </div>
                                                <div class="item-description">
                                                    <p class="name">
                                                        Lincoln chair
                                                    </p>
                                                    <p>
                                                        Size:
                                                        <span class="light-red">
                                                            One size
                                                        </span>
                                                        <br>
                                                        Quantity:
                                                        <span class="light-red">
                                                            01
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="right">
                                                    <p class="price">
                                                        300.000 VNĐ
                                                    </p>
                                                    <a href="#" class="remove">
                                                        <img src="images/remove.png" alt="remove">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cart-item">
                                                <div class="image">
                                                    <img src="images/products/thum/products-02.png" alt="">
                                                </div>
                                                <div class="item-description">
                                                    <p class="name">
                                                        Sản phẩm 2021
                                                    </p>
                                                    <p>
                                                        Size:
                                                        <span class="light-red">
                                                            One size
                                                        </span>
                                                        <br>
                                                        Số lượng:
                                                        <span class="light-red">
                                                            01
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="right">
                                                    <p class="price">
                                                        300.000 VNĐ
                                                    </p>
                                                    <a href="#" class="remove">
                                                        <img src="images/remove.png" alt="remove">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>-->
                                        <li>
                                            <span class="total">
                                                Tổng cộng
                                                <strong>
                                                    0 VNĐ
                                                </strong>
                                            </span>
                                            <button class="checkout" onClick="location.href='checkout.html'">
                                                CheckOut
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">
                                        Toggle navigation
                                    </span>
                                    <span class="icon-bar">
                                    </span>
                                    <span class="icon-bar">
                                    </span>
                                    <span class="icon-bar">
                                    </span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Trang chủ
                                        </a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu-links">
                                                <li>
                                                    <a href="index.html">
                                                        home
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home2.html">
                                                        home2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home3.html">
                                                        home3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="productlitst.html">
                                                        Productlitst
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="productgird.html">
                                                        Productgird
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="details.html">
                                                        Details
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">
                                                        Cart
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">
                                                        CheckOut
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="checkout2.html">
                                                        CheckOut2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">
                                                        contact
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="productgird.html">
                                            Sale
                                        </a>
                                    </li>
                                    <li>
                                        <a href="productlitst.html">
                                            Tư vấn thuốc
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Blog
                                        </a>
                                        <div class="dropdown-menu mega-menu">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <ul class="mega-menu-links">
                                                        <li>
                                                            <a href="productgird.html">
                                                                New Collection
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Shirts & tops
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Laptop & Brie
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Dresses
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Blazers & Jackets
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Shoulder Bags
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <ul class="mega-menu-links">
                                                        <li>
                                                            <a href="productgird.html">
                                                                New Collection
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Shirts & tops
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Laptop & Brie
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Dresses
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Blazers & Jackets
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="productgird.html">
                                                                Shoulder Bags
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="productgird.html">
                                            Liên hệ chúng tôi
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="page-index">
                <div class="container">
                    <p>
                        Đăng Kí
                    </p>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="container_fullwidth">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="special-deal leftbar" style="margin-top:0;">
                            <h4 class="title">
                                Special
                                <strong>
                                    Deals
                                </strong>
                            </h4>
                            <div class="special-item">
                                <div class="product-image">
                                    <a href="details.html">
                                        <img src="images/products/thum/products-01.png" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <p>
                                        <a href="details.html">
                                            Sản phẩm 2021
                                        </a>
                                    </p>
                                    <h5 class="price">
                                        300.000 VNĐ
                                    </h5>
                                </div>
                            </div>
                            <div class="special-item">
                                <div class="product-image">
                                    <a href="details.html">
                                        <img src="images/products/thum/products-02.png" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <p>
                                        <a href="details.html">
                                            Sản phẩm 2021
                                        </a>
                                    </p>
                                    <h5 class="price">
                                        300.000 VNĐ
                                    </h5>
                                </div>
                            </div>
                            <div class="special-item">
                                <div class="product-image">
                                    <a href="details.html">
                                        <img src="images/products/thum/products-03.png" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <p>
                                        <a href="details.html">
                                            Sản phẩm 2021
                                        </a>
                                    </p>
                                    <h5 class="price">
                                        300.000 VNĐ
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-tag leftbar">
                            <h3 class="title">
                                Products
                                <strong>
                                    Tags
                                </strong>
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Lincoln us
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        SDress for Girl
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Corner
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Window
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        PG
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Oscar
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Bath room
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        PSD
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="fbl-box leftbar">
                            <h3 class="title">
                                Facebook
                            </h3>
                            <span class="likebutton">
                                <a href="#">
                                    <img src="images/fblike.png" alt="">
                                </a>
                            </span>
                            <p>
                                12k người thích trang này.
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                            </ul>
                            <div class="fbplug">
                                <a href="#">
                                    <span>
                                        <img src="images/fbicon.png" alt="">
                                    </span>
                                    Facebook social plugin
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="checkout-page">
                            <ol class="checkout-steps">
                                <li class="steps active">
                                    <a href="register.php" class="step-title">
                                       Thông tin đăng kí
                                    </a>
                                    <div class="step-description">
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="your-details">
                                                        <h5>
                                                            Thông tin cá nhân
                                                        </h5>
                                                        <div class="form-row">
                                                            <label class="lebel-abs">
                                                                Họ tên
                                                                <strong class="red">
                                                                    *
                                                                </strong>
                                                            </label>
                                                            <input required = "true" type="text" class="input namefild" name="fullname">
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="lebel-abs">
                                                                Username
                                                                <strong class="red">
                                                                    *
                                                                </strong>
                                                            </label>
                                                            <input required = "true" type="text" class="input namefild" name="usr">
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="lebel-abs">
                                                                Email
                                                                <strong class="red">
                                                                    *
                                                                </strong>
                                                            </label>
                                                            <input required = "true" type="email" class="input namefild" name="email">
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="lebel-abs">
                                                                SĐT
                                                                <strong class="red">
                                                                    *
                                                                </strong>
                                                            </label>
                                                            <input required = "true" type="text" class="input namefild" name="phone" maxlength="10">
                                                        </div>  
                                                        <label class="lebel-abs" style="width: fit-content; font-size: 14px;">
                                                            Giới tính
                                                            <strong class="red">
                                                                <select name="sex">
                                                                    <option value="Nam">Nam</option>
                                                                    <option value="Nữ">Nữ</option>
                                                                </select>
                                                                <input type="hidden"> 
                                                            </strong>   
                                                        </label>                                                                                                       
                                                        <div class="pass-wrap">
                                                            <div class="form-row">
                                                                <label class="lebel-abs">
                                                                    Mật khẩu
                                                                    <strong class="red">
                                                                        *
                                                                    </strong>
                                                                </label>
                                                                <input required = "true" type="password" class="input namefild" name="password" minlength="8">
                                                            </div>
                                                            <div class="form-row">
                                                                <label class="lebel-abs">
                                                                    Nhập lại mật khẩu
                                                                    <strong class="red">
                                                                        *
                                                                    </strong>
                                                                </label>
                                                                <input required = "true" type="password" class="input cpass" name="confirmation_pwd" minlength="8">
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <span class="input-checkbox">
                                                                <input type="checkbox" name="user">
                                                            </span>
                                                            <span class="text">
                                                                Tôi muốn nhận được thông báo của Pharmacity.
                                                            </span>
                                                        </p>
                                                        <p>
                                                            <span class="input-checkbox">
                                                                <input required = "true" type="checkbox" name="user">
                                                            </span>
                                                            <span class="text">
                                                                Địa chỉ giao hàng và địa chỉ thanh toán của tôi giống nhau
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="your-details">
                                                        <h5>
                                                            Địa chỉ của bạn
                                                        </h5>  
                                                        <label class="lebel-abs" style="width: fit-content; font-size: 14px;">
                                                            Thành phố
                                                                <select name="calc_shipping_provinces">
                                                                    <option>Tỉnh / Thành phố</option>
                                                                </select>
                                                                <input class ="billing_address_1" type="hidden" value=""> 
                                                        </label>                          
                                                        <label class="lebel-abs" style="width: fit-content; font-size: 14px;">
                                                                Quận/Huyện
                                                                <select name="calc_shipping_district">
                                                                    <option>Quận / Huyện</option>
                                                                </select> 
                                                                <input class="billing_address_2" type="hidden" value="">
                                                        </label>
                                                        <div class="form-row">
                                                            <label class="lebel-abs">
                                                                Địa chỉ  01
                                                                <strong class="red">
                                                                    *
                                                                </strong>
                                                            </label>
                                                            <input required = "true" type="text" class="input namefild" name="address1">
                                                        </div>                                                    
                                                        <div class="form-row">
                                                            <label class="lebel-abs">
                                                                Địa chỉ  02
                                                            </label>
                                                            <input type="text" class="input namefild" name="address2">
                                                        </div>
                                                        <p class="privacy">
                                                            <span class="input-checkbox">
                                                                <input required = "true" type="checkbox" name="user">
                                                            </span>
                                                            <span class="text">
                                                                Tôi đồng ý với các
                                                                <a href="#" class="red">
                                                                    chính sách
                                                                </a>
                                                            </span>
                                                        </p>
                                                        <button type="submit" class="btn btn-success">Đăng ký</button>
                                                        <button type="reset" class="btn btn-success" onclick="reload()">Hủy</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--js-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='js/districts.min.js'></script>
<script>
        if (address_2 = localStorage.getItem('address_2_saved')) {
            $('select[name="calc_shipping_district"] option').each(function() {
                if ($(this).text() == address_2) {
                $(this).attr('selected', '')
                }
            })
            $('input.billing_address_2').attr('value', address_2)
        }
        if (district = localStorage.getItem('district')) {
            $('select[name="calc_shipping_district"]').html(district)
            $('select[name="calc_shipping_district"]').on('change', function() {
                var target = $(this).children('option:selected')
                target.attr('selected', '')
                $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                address_2 = target.text()
                $('input.billing_address_2').attr('value', address_2)
                district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('district', district)
                localStorage.setItem('address_2_saved', address_2)
            })
        }
        $('select[name="calc_shipping_provinces"]').each(function() {
            var $this = $(this),
                stc = ''
            c.forEach(function(i, e) {
                e += +1
                stc += '<option value=' + e + '>' + i + '</option>'
                $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
                if (address_1 = localStorage.getItem('address_1_saved')) {
                $('select[name="calc_shipping_provinces"] option').each(function() {
                    if ($(this).text() == address_1) {
                    $(this).attr('selected', '')
                    }
                })
                $('input.billing_address_1').attr('value', address_1)
                }
                $this.on('change', function(i) {
                i = $this.children('option:selected').index() - 1
                var str = '',
                    r = $this.val()
                if (r != '') {
                    arr[i].forEach(function(el) {
                        str += '<option value="' + el + '">' + el + '</option>'
                        $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
                    })
                    var address_1 = $this.children('option:selected').text()
                    var district = $('select[name="calc_shipping_district"]').html()
                    localStorage.setItem('address_1_saved', address_1)
                    localStorage.setItem('district', district)
                    $('select[name="calc_shipping_district"]').on('change', function() {
                        var target = $(this).children('option:selected')
                        target.attr('selected', '')
                        $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                        var address_2 = target.text()
                        $('input.billing_address_2').attr('value', address_2)
                        district = $('select[name="calc_shipping_district"]').html()
                        localStorage.setItem('district', district)
                        localStorage.setItem('address_2_saved', address_2)
                    })
                } else {
                    $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
                    district = $('select[name="calc_shipping_district"]').html()
                    localStorage.setItem('district', district)
                    localStorage.removeItem('address_1_saved', address_1)
                    }
                })
            })
        })
</script>
</body>
</html>
