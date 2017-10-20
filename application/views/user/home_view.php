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
            <p><img src="<?php echo $item->image_name; ?>" class="img-opacity" alt="<?php echo $item->title; ?>"></p>
            
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
                        <img class="img-circle img-thumbnail" alt="<?php echo $website->page_title; ?>" src="<?php echo public_helper('upload/images/call.png'); ?>">
                    </div>
                </div>
                <input class="form-control" placeholder="Họ và tên" id="student_name">
                <input class="form-control" placeholder="Số điện thoại" id="student_phone">
                <input class="form-control" placeholder="Email" id="student_email">
                <div class="input-group" id="ehouse_course_tab">
                    <input type="text" class="form-control" placeholder="Bạn cần tư vấn chương trình" disabled id="ehouse_course_id">
                    <label class="input-group-addon dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </label>
                    <ul class="dropdown-menu" role="menu">
                        <li><a>Luyện nghe nói tiếng anh nhóm 4-5 bạn</a></li>
                        <li><a>Luyện nghe nói tiếng anh nhóm 8 bạn</a></li>
                        <li><a>Luyện nghe nói tiếng anh theo nhóm tại công ty</a></li>
                        <li><a>Luyện thi IELTS</a></li>
                        <li><a>Thi thử IELTS</a></li>
                    </ul>
                </div>
                <textarea class="form-control" placeholder="Nếu bạn có lời nhắn, xin hãy để lại khung này" id="student_message"></textarea>
                <div class="text-center" style="margin-top:20px;">
                    <button class="btn btn-info" onclick="sendInfo('<?php echo base_url(); ?>')">Gửi thông tin</button>
                </div>
            </div>
        </div>

    </div>                  
</section>

<!-- ÄÄƒng kÃ½ kiá»ƒm tra trÃ¬nh Ä‘á»™ vÃ  lÆ°u Ã½ -->
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
            <div class="panel-heading"><div class="panel-title">HÌNH ẢNH HỌC VIÊN</div></div>
            <div class="slider">
                <div id="student-image-slider">
                    <?php foreach ($images_library as $value) { ?>                       
                    <div class="item">
                        <a class="fancybox" data-fancybox-group="gallery" href="<?php echo base_url($value->image); ?>"><img src="<?php echo base_url($value->image); ?>" alt="<?php echo $value->name; ?>"></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="text-center">
                <a href="<?php echo base_url('thu-vien-hinh-anh') ?>"><button type="button" class="btn btn-info">Xem thêm hình ảnh khác</button></a>
            </div>
        </div>
    </div>
</div>
<!-- End student Info -->
<!-- News -->
<div class="news">
    <div class="container">
        <div class="panel-xanh">
            <div class="panel-heading"><div class="panel-title">TIN TỨC</div></div>
            <div class="news-list">
                <div>
                <?php foreach ($news as $item) {
                    $year = date('Y', strtotime($item->modified_date));
                    $month = date('m', strtotime($item->modified_date));
                    $date = date('d', strtotime($item->modified_date)); 
                    // get value of src img tag
                    preg_match( '@src="([^"]+)"@' , $item->image, $match);
                    $image = array_pop($match); ?>
                    <div class="item col-md-4">
                        <div class="hinh"><a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)) ?>"><img src="<?php echo $image; ?>" class="img-responsive img-opacity" alt="<?php echo $item->title; ?>"></a></div>
                        <p class="date"><?php echo 'Ngày cập nhật - '.$date.' tháng '.$month.' năm '.$year; ?></p>
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

