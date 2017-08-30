<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header">
    <div class="middle mid-header">
        <div class="container">
            <div class="col-md-5">
            <a href="#"><img src="<?php echo public_helper('images/logo.png'); ?>" class="img-responsive" alt=""></a>
            </div>
            <div class="col-md-offset-1 col-md-4 hidden-xs hidden-sm">
                <p class="ct-text-2"><i class="fa fa-phone"></i> (04) 6674 2332 - (04) 3786 8904</p>
                <form action="https://greenshop-theme.bizwebvietnam.net/search" class="search-box">
                    <input type="text" name="query" class="input-control" placeholder="Tìm kiếm...">
                    <button><i class="fa fa-search"></i></button>
                </form> 
            </div>
        </div>
    </div>
</div>
<!-- end Header -->
<!-- Navbar -->
<nav class="navbar" role="navigation">  
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="#">Green shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"> <a href="#">Trang chủ</a> </li>
                <li> <a href="#">Giới thiệu</a> </li>
                <li> <a href="#">Sản phẩm</a> </li>
                <li> <a href="#">Dịch vụ</a> </li>
                <li> <a href="#">Tin tức &amp; sự kiện</a> </li>
                <li> <a href="#">Liên hệ</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>