<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!-- Slider section -->
 <?php require "slider_view.php" ?>
 <!-- End slider section -->
 <!-- News -->
<div class="news">
    <div class="container">
        <div class="panel-xanh">
            <div class="panel-heading"><div class="panel-title">Tin tức</div></div>
            <div class="news-list">
                <div>
                <?php foreach ($items as $item) {
                    // get value of src img tag
                    preg_match( '@src="([^"]+)"@' , $item->image, $match);
                    $image = array_pop($match);
                    // 
                    $year = date('Y', strtotime($item->modified_date));
                    $month = date('m', strtotime($item->modified_date));
                    $date = date('d', strtotime($item->modified_date)); ?>
                    <div class="row-div item col-md-4">
                        <div class="hinh"><a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)) ?>"><img src="<?php echo $image; ?>" class="img-responsive img-opacity" alt=""></a></div>
                        <p class="date"><?php echo 'Ngày cập nhật - '.$date.' tháng '.$month.' năm '.$year; ?></p>
                        <h3 class="title"><a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)) ?>"><?php echo $item->title; ?></a></h3>
                        <p class="summary"><?php echo $item->short_content; ?></p>
                        <div class="readmore"><a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)) ?>"><i>Đọc tiếp</i></a></div>
                    </div>
                <?php } ?>                    
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</div>

