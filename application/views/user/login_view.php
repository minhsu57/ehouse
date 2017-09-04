 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<div class="presentation container">
    <div id="login-form" class="col-main col-md-12 home_page">
		<!--Page Title -->
		<div class="box box-primary col-md-6">
			<div class="box-header with-border col-xs-12">
				<h2 class="box-title">Đăng nhập</h2>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<div role="form" id="login_form">
			<form action="<?php echo base_url('login'); ?>" method="post" accept-charset="utf-8">
					<div class="box-body">
						<div class="form-group col-md-8">
							<label for="InputEmail">Địa chỉ email</label>
							<input type="email" name="email" class="form-control" id="InputEmail" placeholder="Vui lòng nhập email" value="">
							<span class="error"></span>
						</div>
						<div class="form-group col-md-8">
							<label for="InputPassword">Mật khẩu</label>
							<input type="password" name="password" class="form-control" id="InputPassword" placeholder="Mật khẩu" value="">
							<span class="error"></span>				  
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
		<div class="box box-primary col-md-6">
			<div class="box-header with-border">
				<h3 class="box-title">&nbsp;</h3>
			</div>
			<h4>Khách hàng mới</h4>
			<h5 class="help-block ">Hãy tạo ngay tài khoản để nhận được nhiều ưu đãi nhất</h5>
			<div class="box-footer">
				<a href="<?php echo base_url('account'); ?>"><button type="submit" class="btn btn-info">Nhấp để tạo tài khoản</button></a>
			</div>
		</div>
	</div>
</div>
</div>