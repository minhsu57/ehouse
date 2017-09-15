 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!-- Slider section -->
 <?php require "slider_view.php" ?>
 <!-- End slider section -->
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
                <?php echo $item->content4; ?>
            </div>
        </div>
        <div class="text-center media-middle media-left">
            <a href="<?php echo $item->url; ?>" target="_blank"><button class="btn btn-push-up"><i class="fa fa-user-plus"></i>&nbsp;&nbsp; Đăng ký ngay</button></a>
        </div>
    </div>
</div>