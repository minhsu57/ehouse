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
                <p><img src="<?php echo public_helper('upload/images/'.$value->image_name); ?>" class="img-responsive" alt=""></p>
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