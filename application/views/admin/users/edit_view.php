<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">EDIT USER</h3>
        </div>
    </div>
    <?php echo form_open_multipart('admin/users/edit/'.$user->id);?>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12 ">
                <div class="pull-right">
                    <?php echo form_submit('submit', 'SAVE', 'class="btn btn-primary btn-lg btn-sm"');?>
                    <a href="<?php echo base_url('admin/users') ?>"><input class="btn btn-default btn-lg btn-sm" type="button" value="CANCEL"></a>
                </div>                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('User name','username');
                echo form_error('username','<p class="error">');
                ?>
                <input type="text" name="username" class="form-control" disabled value="<?php echo $user->username; ?>">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Email','email');
                echo form_error('email','<p class="error">');
                ?>
                <input type="text" name="email" class="form-control" value="<?php if(set_value("email")) echo set_value("email"); else echo $user->email; ?>">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Change password','password');
                echo form_error('password','<p class="error">');
                ?>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Confirm changed password','password_confirm');
                echo form_error('password_confirm','<p class="error">');
                ?>
                <input type="password" name="password_confirm" class="form-control">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('First name','first_name');
                echo form_error('first_name','<p class="error">');
                ?>
                <input type="text" name="first_name" class="form-control" value="<?php if(set_value("first_name")) echo set_value("first_name"); else echo $user->first_name; ?>">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Last name','last_name');
                echo form_error('last_name','<p class="error">');
                ?>
                <input type="text" name="last_name" class="form-control" value="<?php if(set_value("last_name")) echo set_value("last_name"); else echo $user->last_name; ?>">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Phone','phone');
                echo form_error('phone','<p class="error">');
                ?>
                <input type="text" name="phone" class="form-control" value="<?php if(set_value("phone")) echo set_value("phone"); else echo $user->phone; ?>">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Address','address');
                echo form_error('address','<p class="error">');
                ?>
                <input type="text" name="address" class="form-control" value="<?php if(set_value("address")) echo set_value("address"); else echo $user->address; ?>">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Birth day','birth_day');
                echo form_error('birth_day','<p class="error">');
                ?>
                <input type="text" id="birth_day" name="birth_day" class="form-control" value="<?php if(set_value("birth_day")) echo set_value("birth_day"); else echo $user->birth_day; ?>">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php echo form_label('Profile','profile'); ?>  
                <div id="editor">
                    <textarea class="ckeditor" name="profile"><?php if(set_value("profile")) echo set_value("profile"); else echo $user->profile; ?></textarea> 
                    <?php echo form_error('profile','<p class="error">'); ?>
                </div>
            </div>
            <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
            <input type="hidden" name="groups[]" value="2" checked="checked">
            <?php echo form_close();?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $("#birth_day").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: '1950:now'
        });
    });
</script>
