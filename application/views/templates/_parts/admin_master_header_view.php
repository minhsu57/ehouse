<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
    <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $page_title;?></title>

    </head>
<body>
<?php
if($this->ion_auth->logged_in()) {
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"
                   href="<?php echo base_url(); ?>" target="_new"><?php echo 'Ehouse'?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Trang Chủ <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><?php echo anchor('admin/slider','Slider');?></li>
                            <li><?php echo anchor('admin/home','Thông tin chung website');?></li>
                            <li><?php echo anchor('admin/speaking_english/speaking_45_member','Luyện nói nhóm 4-5 bạn');?></li>
                            <li><?php echo anchor('admin/speaking_english/speaking_8_member','Luyện nói nhóm 8 bạn');?></li>
                            <li><?php echo anchor('admin/speaking_english/speaking_writing','Luyện thi tiếng anh SPEAKING & WRITING');?></li>
                            <li><?php echo anchor('admin/speaking_english/reading_listening','Luyện thi tiếng anh Reading & Listening');?></li>
                            <li><?php echo anchor('admin/speaking_english/test_4_skills','Luyện thi tiếng anh 4 kĩ năng IELTS');?></li>
                        </ul>
                    </li>
                    
                    <li><?php echo anchor('admin/vitri/index','Vị Trí');?></li>
                    <li><?php echo anchor('admin/tienich/index','Tiện ích');?></li>
                    <li><?php echo anchor('admin/matbang/index','Mặt Bằng');?></li>
                    <li><?php echo anchor('admin/canhomau/index','Căn Hỗ Mẫu');?></li>
                    <li><?php echo anchor('admin/thanhtoan/index','Thanh Toán');?></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><?php echo anchor('admin/tintuc/index','Tin tức');?></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->ion_auth->user()->row()->username;?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('admin/user/profile');?>">Profile page</a></li>
                            <?php echo $current_user_menu;?>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('admin/user/logout');?>">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container" style="padding-top:60px;">
        <?php
        echo $this->postal->get();
        ?>
    </div>
<?php
}
?>