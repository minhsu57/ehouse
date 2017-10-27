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
            <div class="panel-heading"><div class="panel-title">Tìm kiếm</div></div>
            <div class="news-list">
                <div>
                <?php foreach ($items as $item) { ?>
                    <div class="row-div item col-md-12">
                        <h3 class="title" style="font-size: 20px"><a href="<?php if($item->slug == "tin-tuc") echo base_url($item->slug.'/'.$item->id.'-'.create_slug($item->name)); else echo base_url($item->slug.'/'.create_slug($item->name)); ?>   "><?php echo $item->name; ?></a></h3>
                        <div class="readmore"><a href="<?php if($item->slug == "tin-tuc") echo base_url($item->slug.'/'.$item->id.'-'.create_slug($item->name)); else echo base_url($item->slug.'/'.$item->id); ?>"><i>Đọc tiếp</i></a></div>
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

