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
                <h1 class="hidden-xs">LIÊN HỆ</h1>
                <h4 class="visible-xs">LIÊN HỆ</h4>
            </div>
        </div>
    </div>
</div>
<!-- end pct new slider -->
<div class="presentation container">
    <h2 class="text-center" style="display: none"><?php echo $item->title; ?></h2>
    <div class="content" style="margin-top: 30px"><?php echo $item->content; ?></div>
    <div class="form-contact" style="margin:10px 0 40px">
				<div class="name">
					<label>HỌ TÊN</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="email">
					<label>EMAIL</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="phone">
					<label>ĐIỆN THOẠI</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="phone">
					<label>NỘI DUNG</label>
					<textarea rows="6" class="form-control"></textarea>
				</div><br>
				<div>
					<button class="btn btn-success form">Gửi thông tin</button>
				</div>
			</div>
</div>
<!--Load google map-->
<?php $this->load->view('user/google_map_view') ?>