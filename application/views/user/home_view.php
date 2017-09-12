 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!-- pct new slider -->
 <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <?php if(count($sliders) > 1) { ?>
    <ol class="carousel-indicators">
        <?php foreach ($sliders as $key => $value) { ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php if($key == 0) echo "active"; ?>"></li>
        <?php } ?>        
    </ol>
    <?php } ?>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php foreach ($sliders as $key => $value) { ?>
        <div class="item <?php if($key == 0) echo "active"; ?>">
            <div class="blend">
                <div></div>
                <img src="<?php echo public_helper('images/'.$value->image_name); ?>" class="img-responsive" alt="">
            </div>
            <div class="carousel-caption animated flipInX" style="animation-delay: 0.4s">
                <h1 class="hidden-xs">LET'S SPEAK ENGLISH BETTER TODAY</h1>
                <h4 class="visible-xs">LET'S SPEAK ENGLISH BETTER TODAY</h4>
                <P>EHOUSE ENGLISH SPEAKING</P>
            </div>
        </div>
        <?php } ?>

        <?php if(count($sliders) > 1) { ?>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        <?php } ?>
    </div>
</div>
<!-- end pct new slider -->
<div class="text-center" style="margin-top: 40px"><h2>CÁC CHƯƠNG TRÌNH TẠI EHOUSE</h2></div>
<!-- Cac khoa hoc -->
<div class="content-course container">
    <?php foreach ($content_course as $item) { ?> 
    <div class="col-xs-12 col-md-6 col-lg-15"> 
        <a href="<?php echo base_url().$item->link; ?>">     
            <img class="img-thumbnail" alt="logo_content" src="<?php echo public_helper('images/'.$item->image); ?>" />
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

<section class="testimonials-section" style="background-image:url('<?php echo public_helper("images/3_member_english_speaking.jpg"); ?>'); height: 100%; ">
    <div class="container">
        <div id="class-res" class="col-xs-12 col-md-5 pull-right">
            <h3 class="text-center">Đăng ký tư vấn khóa học</h3>
            <div class="register">
                <span class="col-xs-12"></span>
                <div class="text-center">
                    <div class="col-xs-12">
                        <img class="img-circle img-thumbnail" alt="logo_content" src="http://sudev.net/public/images/call.png">
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
<!-- Lop hoc -->

<!-- End lop hoc -->
<!-- Đăng ký kiểm tra trình độ và lưu ý -->
<div class="seft-test container">
    <div class="text-center">
        <button class="btn btn-push-up"><a href="#"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp; <?php echo $note_rtl->title; ?></a></button>
    </div>
    <div>
        <?php echo $note_rtl->content; ?>
    </div>
</div>
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
            <div><button type="button" class="btn btn-success pull-right">Xem thêm hình ảnh khác</button></div>
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
                    <div class="item col-md-4">
                        <div class="hinh"><a href="#"><img src="<?php echo public_helper("images/slider1.jpg"); ?>" class="img-responsive" alt=""></a></div>
                        <p class="date">Ngày 20 tháng 01 năm 2016</p>
                        <h3 class="title"><a href="#">Hướng dẫn lựa chọn cây cảnh trang trí trong văn phòng</a></h3>
                        <p class="summary">Hướng dẫn lựa chọn cây cảnh trang trí trong văn phòng, Bạn muốn tạo bầu không khí mới lạ cho văn phòng của mình bằng những chậu cây xanh, Hay đơn giản chỉ là sáng tạo một chút khi bố trí nội thất để tạo điểm nhấn cho văn phòng của mình?</p>
                        <div class="readmore"><a href="#"><i>Đọc tiếp</i></a></div>
                    </div>
                    <div class="item col-md-4">
                        <div class="hinh"><a href="#"><img src="<?php echo public_helper("images/slider2.jpg"); ?>" class="img-responsive" alt=""></a></div>
                        <p class="date">Ngày 20 tháng 01 năm 2016</p>
                        <h3 class="title"><a href="#">Cách bố trí cây cảnh các vị trí quan trọng trong nhà để hút lộc</a></h3>
                        <p class="summary">Ngôi nhà là nơi mà mọi người thường tìm lại cảm giác yên bình, an toàn và thư thái,thoải mái sau những giờ làm việc vất vả, căng thẳng. Chính vì vậy mà khi thiết kế nhà, gia chủ cần lưu ý tới việc đưa cây cảnh nội thất vào không gian.</p>
                        <div class="readmore"><a href="#"><i>Đọc tiếp</i></a></div>
                    </div>
                    <div class="item col-md-4">
                        <div class="hinh"><a href="#"><img src="<?php echo public_helper("images/slider3.jpg"); ?>" class="img-responsive" alt=""></a></div>
                        <p class="date">Ngày 20 tháng 01 năm 2016</p>
                        <h3 class="title"><a href="#">Loại cây xanh để bàn đang được giới văn phòng ưa chuộng</a></h3>
                        <p class="summary">Loại cây xanh để bàn đang được giới văn phòng ưa chuộng, giúp trang trí không gian làm việc tạo cảm giác khi làm việc được thoải mái, ngoài ra nó còn làm thanh lọc không khí, tạo ra nhiều nguồn cảm hứng mới khi làm việc.</p>
                        <div class="readmore"><a href="#"><i>Đọc tiếp</i></a></div>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div class="col-xs-12"><button type="button" class="btn btn-success pull-right">Xem thêm tin tức khác</button></div>
            </div>

        </div>
    </div>
</div>
<!-- End News -->
<?php $this->load->view('user/google_map_view') ?>

