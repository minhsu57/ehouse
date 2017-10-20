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
            <div class="panel-heading"><div class="panel-title">Thư viện hình ảnh</div></div>
            <div class="news-list">
                <div>
                <?php foreach ($items as $item) { ?>
                    <div class="row-div item col-md-4">
                        <div class="hinh fancybox" data-fancybox-group="gallery" title="<?php echo $item->name; ?>" href="<?php echo $item->image; ?>"><img src="<?php echo $item->image; ?>" class="img-responsive img-opacity" alt="<?php echo $item->name; ?>"></div>
                        <h3 class="title"><a><?php echo $item->name; ?></a></h3>
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

