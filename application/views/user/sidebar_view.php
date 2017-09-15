<div class="sidebar">
	<div class="row row-div col-lg-12"><label>TIN TỨC MỚI</label></div>
	<?php foreach ($news as $item) { ?>
	<div class="row row-article">
		<div class="col-xs-4 col-md-2 col-lg-4">
			<div class="news_image  hidden-md">
				<a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)); ?>"><img src="<?php echo $item->image; ?>"></a>
			</div>
			<div class="visible-md">-</div>			
		</div>
		<div class="col-xs-8 col-md-10 col-lg-8 pd-lr-0">			
			<div class="news_title"><span><a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)); ?>" style="color: #333"><?php echo $item->title; ?></a></span></div>
		</div>
	</div>
	<?php } ?>
	<div class="row row-div col-lg-12"><label>KEYWORD</label></div>
	<div class="row row-div col-lg-12">
		<ul class="list-unstyled">
			<div class="tagcloud">
				<?php echo $website->keyword; ?>
			</div>
		</ul>
	</div>
	<div class="row row-div col-lg-12"><label>VIDEO</label></div>
	<div class="row row-div col-lg-12">
		<div class="textwidget">
			<iframe style="min-width:100%; height:315px" src="https://www.youtube.com/embed/Cjf-mcQ9zVc?rel=0&wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
		</div>
	</div>
</div>