 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!-- Slider section -->
 <?php require "slider_view.php" ?>
 <!-- End slider section -->
 <div class="presentation container">
 	<div class="content" style="margin-top: 30px"><?php echo $item->description; ?></div>
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