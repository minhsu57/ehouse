<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header">
    <div class="top top-header">
        <div class="container">
            <div class="col-md-8 social">
                <ul>
                <li><a href="https://www.facebook.com/Ehouse.hcmc/" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 social">
                <ul class="list-unstyled list-inline pull-right">
                    <li><a href="<?php echo base_url('login'); ?>"><i class="fa fa-fw fa-user"></i><span class="hidden-xs">Đăng nhập</span></a></li>
                    <li><a href="<?php echo base_url('account'); ?>"><i class="fa fa-fw fa-user-plus"></i><span class="hidden-xs">Đăng ký</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="middle mid-header">
        <div class="container">
            <div class="col-md-5">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo public_helper('images/logo.png'); ?>" class="img-responsive" alt=""></a>
            </div>
            <div class="col-md-offset-1 col-md-4 col-xs-12 col-sm-12 pull-right">
                <p class="ct-text-2"><i class="fa fa-phone"></i> (04) 6674 2332 - (04) 3786 8904</p>
                <form action="https://greenshop-theme.bizwebvietnam.net/search" class="search-box">
                    <input type="text" name="query" class="input-control" placeholder="Tìm kiếm...">
                    <button><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end Header -->
<!-- Navbar -->
<nav id="header-2" class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav c-nav-left">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Giới thiệu<span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Khóa học luyện nói tiếng Anh<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('luyen-noi-tieng-anh-nhom-4-5-nguoi'); ?>">Luyện nói nhóm 4-5 bạn cùng 100% GVNN</a></li>
                    <li><a href="<?php echo base_url('luyen-noi-tieng-anh-nhom-8-nguoi'); ?>">Luyện nói nhóm 8 bạn cùng 100% GVNN</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('luyen-noi-tieng-anh-tai-cong-ty'); ?>">Khóa luyện nói tiếng Anh tại công ty</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Khóa luyện thi IELTS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('luyen-thi-tieng-anh-speaking-writing'); ?>">Luyện thi SPEAKING & WRITING</a></li>
                    <li><a href="<?php echo base_url('luyen-thi-tieng-anh-reading-listening'); ?>">Luyện thi READING & LISTENING</a></li>
                    <li><a href="<?php echo base_url('luyen-thi-tieng-anh-4-ki-nang-ielts'); ?>">Luyện thi 4 kĩ năng IELTS</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="<?php echo base_url('thi-thu-ielts'); ?>">Thi thử IELTS</a>
                <!--<ul class="dropdown-menu">
                    <li><a href="#">IELTS 5.0</a></li>
                    <li><a href="#">IELTS 6.0</a></li>
                    <li><a href="#">IELTS 7.0</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">IELTS MASTER OVER SKILL</a></li>
                </ul>-->
            </li>
            <li><a href="<?php echo base_url('contact'); ?>">Liên hệ</a></li>
        </ul>
        <ul class="nav navbar-nav">
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
</div>
    <!-- End navbar -->