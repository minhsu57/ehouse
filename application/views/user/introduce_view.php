 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!-- pct new slider -->
 <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="blend">
                <div></div>
                <?php echo $item->image; ?>
            </div>
            <div class="carousel-caption animated flipInX" style="animation-delay: 0.4s">
                <h1 class="hidden-xs">GIỚI THIỆU</h1>
                <h4 class="visible-xs">GIỚI THIỆU</h4>
            </div>
        </div>
    </div>
</div>
<div class="container"><?php echo $item->content; ?></div>