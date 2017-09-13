 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <?php require "slider_view.php" ?>
 <div class="presentation container">
    <div class="row">
        <h2 class="text-center"><?php echo $item->name; ?></h2>
        <div class="col-xs-12">
            <?php echo $item->description; ?>
        </div>
    </div>
    <div class="row"">
        <ul class="nav nav-pills">
            <li class="active"><a class="btn-slider-presentation" href="#tab_a" data-toggle="tab" aria-expanded="false"><i class="fa fa-info-circle"></i> <?php echo $tab1_title; ?></a></li>
            <li><a class="btn-slider-presentation" href="#tab_b" data-toggle="tab" aria-expanded="true"><i class="fa fa-registered"></i> <?php echo $tab2_title; ?></a></li>
            <li><a class="btn-slider-presentation" href="#tab_c" data-toggle="tab" aria-expanded="true"><i class="fa fa-star"></i> <?php echo $tab3_title; ?></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane animated bounceInLeft active col-xs-12" id="tab_a">            
                <?php echo $item->content; ?>
            </div>
            <div class="tab-pane animated bounceInUp" id="tab_b">
                <div class="wpb_wrapper col-xs-12">
                    <?php echo $item->content2; ?>
                </div>
            </div>
            <div class="tab-pane animated bounceInRight" id="tab_c">
                <div class="wpb_wrapper col-xs-12">
                    <?php echo $item->content3; ?>
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