 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <div class="presentation container">
 	<div id="login-form" class="col-main col-md-12">
 		<!--Page Title -->
 		<div class="box-header with-border">
 			<h2 class="box-title">Tài khoản mới</h2>
 		</div>
 		<!--Form nhap thong tin ca nhan -->
 		<p class="border-bottom-solid">Vui lòng nhập thông tin cá nhân</p>
 		<div class="box box-primary col-md-8">
 			<!-- /.box-header -->
 			<!-- form start -->
 			<div role="form" id="form" novalidate="true">
 				<form data-toggle="validator" action="http://muamyphamthiennhien.com/account/register" method="post" novalidate="true">
 					<div class="box-body">
 						<div class="form-group col-md-6">
 							<label for="fullname"><span class="required"> Họ tên*</span></label>
 							<input type="text" class="form-control" id="InputName" required="required" placeholder="Vui lòng nhập tên" name="name" data-error="Vui lòng nhập vào trường này và đúng định dạng !" value="">
 							<span class="glyphicon form-control-feedback"></span>
 							<span class="help-block with-errors"></span>

 						</div>

 						<div class="form-group col-md-6 has-error has-danger">
 							<label for="InputEmail1">Địa chỉ email<span class="required"> *</span></label>
 							<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="InputEmail" required="required" placeholder="Vui lòng nhập email" name="email" value="">
 							<div class="error help-block"> </div>
 							<div class="help-block">Nhập đúng định dạng email, ví dụ : abc@gmail.com</div>

 						</div>	

 						<div class="form-group col-md-6">
 							<label for="InputAddress">Địa chỉ</label>
 							<input type="text" class="form-control" id="InputAddress" required="required" placeholder="Vui lòng nhập địa chỉ" name="name" data-error="Vui lòng nhập vào trường này và đúng định dạng !" value="">
 							<span class="glyphicon form-control-feedback"></span>
 							<span class="help-block with-errors"></span>
 						</div>

 						<div class="form-group col-md-6 has-error has-danger">
 							<label for="InputPhone">Điện thoại<span class="required"> *</span></label>
 							<input type="text" pattern="^[_0-9]{6,14}$" data-minlength="6" maxlength="18" class="form-control" id="InputPhone" required="required" placeholder="Vui lòng nhập số điện thoại" name="phone" value="">
 							<div class="help-block">Số điện thoại phải từ  : 6 - 14</div>
 						</div>

 						<div class="form-group col-md-6">
 							<label for="InputSex">Giới tính<span class="required"> *</span></label>
 							<select class="form-control" id="InputSex" name="sex">
 								<option value="M">Nam</option>
 								<option value="F">Nữ</option>
 							</select>
 							<div class="help-block with-errors"></div>
 						</div>

 						<div class="form-group col-md-6 has-error has-danger">
 							<label for="InputPassword">Mật khẩu<span class="required"> *</span></label>
 							<input type="password" class="form-control" pattern=".{3,}" data-minlength="3" data-minlength-error="không đủ 3 ký tự" id="InputPassword" required="" placeholder="Mật khẩu" name="password" value="">
 							<div class="help-block">Ký tự tối thiểu  : 3</div>
 						</div>
 						<div class="form-group col-md-6 has-error has-danger">
 							<label for="InputRePassword1">Nhập lại mật khẩu<span class="required"> *</span></label>
 							<input type="password" class="form-control" pattern=".{3,}" id="inputPasswordConfirm" required="" data-match="#InputPassword" data-error="Nhập lại mật khẩu không khớp !" placeholder="Nhập lại mật khẩu" name="confirm_password" value="">
 							<div class="help-block with-errors"><ul class="list-unstyled"><li>Nhập lại mật khẩu không khớp !</li></ul></div>
 						</div>					
 					</div>

 					<div class="box-footer col-md-12">

 						<!-- Click tao tai khoan se chay ham create_account -->
 						<button type="submit" class="btn btn-info pull-left disabled">Tạo tài khoản</button>
 					</div>
 				</form>				
 			</div>
 		</div>
 	</div>
 </div>