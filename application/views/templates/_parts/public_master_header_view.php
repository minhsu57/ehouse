<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header">
    <div class="top top-header">
        <div class="container">
            <div class="col-md-8 social">
                <ul>
                <li><a href="<?php echo $website->facebook; ?>" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>
                    <li><a href="<?php echo $website->twitter; ?>"><i class="fa fa-fw fa-twitter"></i></a></li>
                    <li><a href="<?php echo $website->google_plus; ?>"><i class="fa fa-fw fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 social">
                <ul class="list-unstyled list-inline pull-right">
                    <li><a href="<?php echo base_url('login'); ?>"><i class="fa fa-fw fa-user"></i><span class="">Đăng nhập</span></a></li>
                    <!-- <li><a href="<?php echo base_url('account'); ?>"><i class="fa fa-fw fa-user-plus"></i><span class="hidden-xs">Đăng ký</span></a></li> -->
                </ul>
            </div>
        </div>
    </div>
    <div class="middle mid-header">
        <div class="container">
            <div class="col-md-5">
                <a href="<?php echo base_url(); ?>"><p><img src="<?php echo public_helper('upload/images/logo.png'); ?>" class="img-responsive" alt=""></p></a>
            </div>
            <div class="col-md-offset-1 col-md-4 col-xs-12 col-sm-12 pull-right">
                <p class="ct-text-2"><i class="fa fa-phone"></i> <?php echo $website->phone; ?></p>
                <form method="POST" action="<?php echo base_url().'tim-kiem' ?>" class="search-box">
                    <input type="text" name="id" class="input-control" placeholder="Tìm kiếm...">
                    <button type="submit" value="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end Header -->
<!-- pct add one more nav-->
<!-- nav-1 transparent and cover slider behind, nav-2 fixed top when scroll bar -->
<nav id="header-1" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav c-nav-left">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <?php foreach ($cate_lv01 as $cate) { ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" <?php if(count($cate['children'])==0){ ?> href="<?php echo base_url('english/'.$cate['id']); ?>" <?php } ?> ><?php echo $cate['name']; ?> <?php if(count($cate['children'])>0){ ?><span class="caret"></span><?php } ?></a>
                    <?php 
                    if(count($cate['children'])>0){
                    echo '<ul class="dropdown-menu">';                   
                    foreach ($cate['children'] as $key => $value) {
                        echo '<li><a href="'.base_url('english/'.$value['id']).'">'.$value['name'].'</a></li>';                        
                    }
                    echo '</ul>';
                    }
                    ?>
                </li>
            <?php } ?>
            <li><a href="<?php echo base_url('tin-tuc'); ?>">Tin tức</a></li>
            <li><a href="<?php echo base_url('lien-he'); ?>">Liên hệ</a></li>
        </ul>
        <ul class="nav navbar-nav">
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
</nav>
</div>
    <!-- End navbar -->
<!-- pct end nav one -->
<!-- Navbar -->
<nav id="header-2" class="navbar navbar-default hidden">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2"
            aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav c-nav-left">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <?php foreach ($cate_lv01 as $cate) { ?>
                <li class="dropdown">
                    <a <?php if(count($cate['children'])==0){ ?> href="<?php echo base_url('english/'.$cate['id']); ?>" <?php } ?> ><?php echo $cate['name']; ?> <?php if(count($cate['children'])>0){ ?><span class="caret"></span><?php } ?></a>
                    <?php 
                    if(count($cate['children'])>0){
                    echo '<ul class="dropdown-menu">';                   
                    foreach ($cate['children'] as $key => $value) {
                        echo '<li><a href="'.base_url('english/'.$value['id']).'">'.$value['name'].'</a></li>';                        
                    }
                    echo '</ul>';
                    }
                    ?>
                </li>
            <?php } ?>
            <li><a href="<?php echo base_url('tin-tuc'); ?>">Tin tức</a></li>
            <li><a href="<?php echo base_url('lien-he'); ?>">Liên hệ</a></li>
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