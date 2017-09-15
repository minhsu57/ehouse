 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!-- Slider section -->
 <?php require "slider_view.php" ?>
 <!-- End slider section -->
 <div class="text-center" style="margin-top: 40px"><h2>CÁC CHƯƠNG TRÌNH TẠI EHOUSE</h2></div>
 <!-- Cac khoa hoc -->
 <div class="content-course container">
    <?php foreach ($content_course as $item) { ?> 
    <div class="col-xs-12 col-md-6 col-lg-15"> 
        <a href="<?php echo base_url().$item->link; ?>">     
            <p><img src="<?php echo $item->image_name; ?>" class="img-opacity"></p>
            
            <div class="content-course-title">
                <div>
                    <h5><?php echo $item->title; ?></h5>
                </div>
            </div>
        </a>      
    </div>
    <?php } ?>
</div>
<!-- End cac khoa hoc -->

<section class="testimonials-section" style="background-image:url('<?php echo $course_consultant->image_name; ?>'); height: 100%; ">
    <div class="container">
        <div id="class-res" class="col-xs-12 col-md-5 pull-right">
            <h3 class="text-center"><?php echo $course_consultant->title; ?></h3>
            <div class="register">
                <span class="col-xs-12"></span>
                <div class="text-center">
                    <div class="col-xs-12">
                        <img class="img-circle img-thumbnail" alt="logo_content" src="<?php echo public_helper('upload/images/call.png'); ?>">
                    </div>
                </div>
                <input class="form-control" placeholder="Họ và tên">
                <input class="form-control" placeholder="Số điện thoại">
                <input class="form-control" placeholder="Email">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Bạn cần tư vấn chương trình:">
                    <label class="input-group-addon dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </label>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Luyện nghe nói tiếng Anh nhóm 4-5 bạn</a></li>
                        <li><a href="#">Luyện nghe nói tiếng Anh nhóm 8 bạn</a></li>
                        <li><a href="#">Luyện nghe nói tiếng Anh theo nhóm tại công ty</a></li>
                        <li><a href="#">Luyện thi IELTS</a></li>
                        <li><a href="#">Thi thử IELTS</a></li>
                    </ul>
                </div>
                <textarea class="form-control" placeholder="Nếu bạn có lời nhắn, xin hãy để lại khung này"></textarea>
                <div class="text-center" style="margin-top:20px;">
                    <button class="btn btn-info">Gửi thông tin</button>
                </div>
            </div>
        </div>

    </div>                  
</section>

<!-- Đăng ký kiểm tra trình độ và lưu ý -->
<section class="text-section">
    <div class="seft-test container">
        <div class="text-center">
            <button class="btn btn-push-up"><a href="<?php echo $note_rtl->link; ?>" target="_blank"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp; <?php echo $note_rtl->title; ?></a></button>
        </div>
        <div>
            <?php echo $note_rtl->description; ?>
        </div>
    </div>
</section>

<!-- End reg and note -->
<!-- Student Info -->
<div class="student-info">
    <div class="container">
        <div class="panel-xanh">
            <div class="panel-heading"><div class="panel-title">Hình ảnh học viên</div></div>
            <div class="slider">
                <div id="student-image-slider">
                    <div class="item">
                        <a href="#"><img src="<?php echo public_helper("images/slider.jpg"); ?>" alt="room pic"></a>
                    </div>
                    <div class="item"><a href="#"><img src="<?php echo public_helper("images/slider1.jpg"); ?>"  alt="room pic"></a>
                    </div>
                    <div class="item"><a href="#"><img src="<?php echo public_helper("images/slider2.jpg"); ?>" alt="room pic"></a>
                    </div>
                    <div class="item"><a href="#"><img src="<?php echo public_helper("images/slider3.jpg"); ?>" alt="room pic"></a>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="text-center">
                <button type="button" class="btn btn-info">Xem thêm hình ảnh khác</button>
            </div>
        </div>
    </div>
</div>
<!-- End student Info -->
<!-- News -->
<div class="news">
    <div class="container">
        <div class="panel-xanh">
            <div class="panel-heading"><div class="panel-title">Tin tức</div></div>
            <div class="news-list">
                <div>
                <?php foreach ($news as $item) { ?>
                    <div class="item col-md-4">
                        <div class="hinh"><a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)) ?>"><img src="<?php echo base_url($item->image); ?>" class="img-responsive img-opacity" alt=""></a></div>
                        <p class="date">Ngày 20 tháng 01 năm 2016</p>
                        <h3 class="title"><a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)) ?>"><?php echo $item->title; ?></a></h3>
                        <p class="summary"><?php echo $item->short_content; ?></p>
                        <div class="readmore"><a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)) ?>"><i>Đọc tiếp</i></a></div>
                    </div>
                <?php } ?>                    
                </div>
                <div style="clear: both;"></div>
                <div class="text-center">
                    <a href="<?php echo base_url('tin-tuc') ?>"><button type="button" class="btn btn-info"><li class="fa fa-arrow-right "></li> Xem thêm tin tức khác</button></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End News -->
<?php $this->load->view('user/google_map_view') ?>

