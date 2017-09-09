 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!-- pct new slider -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="blend">
                <div></div>
                <img src="<?php echo public_helper('images/'.$sliders[0]->image_name); ?>" class="img-responsive" alt="">
            </div>
            <div class="carousel-caption animated flipInX" style="animation-delay: 0.4s">
                <h1>Los Angeles</h1>
                <p>LA is always so much fun!</p>
            </div>
        </div>
        <?php foreach (array_slice($sliders, 1) as $slider) { ?> 
        <div class="item">
            <div class="blend">
                <!-- thẻ div làm cho tấm hình ở dưới đen lại -->
                <div></div>
                <img src="<?php echo public_helper('images/'.$slider->image_name); ?>" class="img-responsive" alt="">
            </div>
            <div class="carousel-caption animated flipInX" style="animation-delay: 0.4s">
                <h1>Los Angeles</h1>
                <p>LA is always so much fun!</p>
            </div>
        </div>
        <?php } ?>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- end pct new slider -->
<!-- Cac khoa hoc -->
<div class="container course">
    <?php foreach ($content as $item) { ?> 
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">        
        <img class="img-circle img-thumbnail animated" alt="logo_content" src="<?php echo public_helper('images/'.$item->image); ?>" />
        <h4><?php echo $item->title; ?></h4>
        <div class="content-course"><?php echo $item->content; ?></div>        
    </div>
    <?php } ?>
</div>
<!-- End cac khoa hoc -->
<!-- Lop hoc -->
<div class="container classroom media">
    <div id="class-pics" class="col-xs-12 col-md-7">
        <h3 class="text-center">Phản hồi của học viên</h3>
        <div class="slider">
            <div id="comment-slider">
                <div class="item">
                    <a href="#"><img src="<?php echo public_helper("images/slider.jpg"); ?>" alt="room pic"></a>
                    <h4><a href="#">Lê Minh Sự - IELTS 7.5 - 26 tuổi </a></h4>
                    <p>Ehouse cung cấp dịch vụ tốt, mình rất thích chương trình học và các giáo viên ở đây...</p>
                </div>
                <div class="item"><a href="#"><img src="<?php echo public_helper("images/slider1.jpg"); ?>"  alt="room pic"></a>
                    <h4><a href="#">Lê Minh Sự - IELTS 7.5 - 26 tuổi </a></h4>
                    <p>Cảm ơn Ehouse rất nhiều, nhờ có Ehouse bây giờ mình đã tự tin giao tiếp như ngôn ngữ thứ 2 của mình, chương trình học rất bổ ích ... </p>
                </div>
                <div class="item"><a href="#"><img src="<?php echo public_helper("images/slider2.jpg"); ?>" alt="room pic"></a>
                    <h4><a href="#">Lê Minh Sự - IELTS 7.5 - 26 tuổi </a></h4>
                    <p>Ehouse cung cấp dịch vụ tốt, mình rất thích chương trình học và các giáo viên ở đây...</p>
                </div>
                <div class="item"><a href="#"><img src="<?php echo public_helper("images/slider3.jpg"); ?>" alt="room pic"></a>
                    <h4><a href="#">Lê Minh Sự - IELTS 7.5 - 26 tuổi </a></h4>
                    <p>Ehouse cung cấp dịch vụ tốt, mình rất thích chương trình học và các giáo viên ở đây...</p>
                </div>
            </div>
        </div>
    </div>
    <div id="class-res" class="col-xs-12 col-md-5">
        <h3 class="text-center"><?php echo $course_consultant->title; ?></h3>
        <div class="register">
            <span class="col-xs-12"></span>
            <div class="text-center">
                <div class="col-xs-12">
                    <img class="img-circle img-thumbnail animated" alt="logo_content" src="<?php echo public_helper('images/'.$course_consultant->image); ?>" />
                </div>
            </div>
            <input class="form-control" placeholder="Họ và tên" />
            <input class="form-control" placeholder="Số điện thoại" />
            <input class="form-control" placeholder="Email" />
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

