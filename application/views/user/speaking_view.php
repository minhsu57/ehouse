 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!-- Slider -->
 <div class="slider">
    <div id="slider">
        <?php foreach ($sliders as $slider) { ?> 
        <div class="item"><a href="#"><img src="<?php echo public_helper('images/'.$slider->image_name); ?>" class="img-responsive" alt=""></a></div>
        <?php } ?>
    </div>
</div>
<!-- end Slider -->
<!-- Khoa hoc 45 nguoi -->

<div class="presentation container">
    <div class="row">
        <h2 class="text-center">Luyện nói nhóm 4-5 bạn cùng 100% GVNN</h2>
        <div class="col-xs-12">
            <p>Khóa Pre IELTS cung cấp kiến thức nền tảng cơ bản vững chắc cho học viên IELTS về các kĩ năng Nói, Viết, Nghe
                và Đọc cần thiết chuẩn bị cho kì thi IELTS. Lớp học sẽ tập trung vào các điểm phát âm, ngữ pháp, từ vựng
                và các kỹ năng làm bài cần thiết cho IELTS. Để tham gia khóa luyện thi Pre-IELTS, các bạn cần có kỹ năng
                Nói, Viết, Nghe và Đọc ở trình độ căn bản.
            </p>
        </div>
    </div>
    <div class="row"">
        <ul class="nav nav-pills">
            <li class="active"><a class="btn-slider-presentation" href="#tab_a" data-toggle="tab" aria-expanded="false"><i class="fa fa-info-circle"></i> Thông tin khóa học</a></li>
            <li><a class="btn-slider-presentation" href="#tab_b" data-toggle="tab" aria-expanded="true"><i class="fa fa-registered"></i> Đăng kí khóa học</a></li>
            <li><a class="btn-slider-presentation" href="#tab_c" data-toggle="tab" aria-expanded="true"><i class="fa fa-registered"></i> Nội dung khóa học</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane animated bounceInLeft active col-xs-12" id="tab_a">
                <h6><strong>+ Lịch học</strong></h6>

                <ul>
                    <li>
                        <h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>
                    </li>
                    <li>
                        <h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>
                    </li>
                    <li>
                        <h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>
                    </li>
                    <li>
                        <h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>
                    </li>
                    <li>
                        <h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>
                    </li>
                    <li>
                        <h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>
                    </li>
                    <li>
                        <h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>
                    </li>
                    <li>
                        <h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>
                    </li>
                    <li>
                        <h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>
                    </li>
                </ul>

                <h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>

                <ul>
                    <li style="text-align:justify"><span style="font-size:14px"><span style="color:#000000"><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></span></li>
                    <li style="text-align:justify"><span style="font-size:14px"><span style="color:#000000"><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></span></li>
                    <li style="text-align:justify"><span style="font-size:14px"><span style="color:#000000"><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></span></li>
                </ul>


                <h6 style="text-align:justify"><strong><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></span></strong></h6>

                <h6 style="text-align:justify"><span style="color:#000000"><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></span></h6>

                <h6 style="text-align:justify"><span style="color:#000000"><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></h6>

                <h6>&nbsp;</h6>




            </div>
            <div class="tab-pane animated bounceInUp" id="tab_b">
                <div class="wpb_wrapper col-xs-12">
                    <h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.
                    </h6>
                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href="http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang">ĐÂY</a>.</h6>
                </div>
            </div>
            <div class="tab-pane animated bounceInRight" id="tab_c">
                <div class="wpb_wrapper col-xs-12">
                    <h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.
                    </h6>
                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href="http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang">ĐÂY</a>.</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row media">
        <div class="media-body">
            <div class="text-center">
                <h3><b><strong>Nếu bạn có thắc mắc về chương trình học </strong></b></h3>
                <h3><b><strong>xin liên lạc qua:</strong></b></h3>
                <h6>Facebook: <a style="color:chocolate" href="https://www.facebook.com/Ehouse.hcmc/">https://www.facebook.com/mc.ielts/</a> (inbox)</h6>
                <p style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Tel: 028 3939 0811</span></span></span></span></p>

                <p style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Hotline: 0906 911 022</span></span></span></span></p>

                <p style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></span></p>

                <p style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><span style="background-color:#fcfcfc"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></span></p>

                <p style="text-align:center">&nbsp;</p>

            </div>
        </div>
        <div class="text-center media-middle media-left">
            <button class="btn btn-push-up"><i class="fa fa-user-plus"></i>&nbsp;&nbsp; Đăng ký ngay</button>
        </div>
    </div>
</div>
    <!-- End khoa hoc 45 nguoi -->