 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!-- Slider section -->
 <?php require "slider_view.php" ?>
 <!-- End slider section -->
 <div class="presentation container">
 	<div id="login-form" class="col-main col-md-12 home_page">
 		<!--Page Title -->
 		<div class="box box-primary col-md-6">
 			<div class="box-header with-border col-xs-12">
 				<h2 class="box-title">Đăng nhập</h2>
 			</div>
 			<div class="container" style="padding-top:60px;">
			    <?php
			    echo $this->postal->get();
			    ?>
			</div>
 			<div role="form" id="login_form">
 				<form action="<?php echo base_url('login'); ?>" method="post" accept-charset="utf-8">
 					<div class="box-body">
 						<div class="form-group col-md-8">
 							<label for="InputEmail">Tài khoản</label>
 							<input type="text" name="user_name" class="form-control" placeholder="Vui lòng nhập tài khoản" value="">
 							<?php echo form_error('user_name','<p class="error">'); ?>
 						</div>
 						<div class="form-group col-md-8">
 							<label for="InputPassword">Mật khẩu</label>
 							<input type="password" name="password" class="form-control" placeholder="Mật khẩu" value="">
 							<?php echo form_error('password','<p class="error">'); ?>			  
 						</div>
 						<p class="help-block col-md-8"><a href="#">Quên mật khẩu ?</a></p>	
 						<div class="error-message col-md-8"></div>									
 					</div>

 					<div class="box-footer col-md-8">
 						<button type="submit" class="btn btn-warning pull-right">Đăng nhập</button>
 						<p class="p_error"></p>  
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>
</div>
