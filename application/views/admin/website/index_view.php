<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <?php echo form_open_multipart('admin/website/index/');?>
            
            <div class="row">
                <div class="col-lg-12">
                <h2 class="text-center">COMMON PAGE INFO</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                <div class="col-xs-12">
                    <button type="submit" value="submit" name="submit" class="btn btn-primary btn-lg btn-sm pull-right"><li class="fa fa-save"></li> Save</button>
                </div>
                
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Tên website','website_name');
                echo form_error('website_name');
                echo form_input('website_name',set_value('website_name',$item_vi->website_name),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Facebook','facebook');
                echo form_error('facebook');
                echo form_input('facebook',set_value('facebook',$item_vi->facebook),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Youtube','youtube');
                echo form_error('youtube');
                echo form_input('youtube',set_value('youtube',$item_vi->youtube),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Google +','google_plus');
                echo form_error('google_plus');
                echo form_input('google_plus',set_value('google_plus',$item_vi->google_plus),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Twitter','twitter');
                echo form_error('twitter');
                echo form_input('twitter',set_value('twitter',$item_vi->twitter),'class="form-control"');
                ?>
            </div>

            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Phone','phone');
                echo form_error('phone');
                echo form_input('phone',set_value('phone',$item_vi->phone),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Mobile Phone','mobile_phone');
                echo form_error('mobile_phone');
                echo form_input('mobile_phone',set_value('mobile_phone',$item_vi->mobile_phone),'class="form-control"');
                ?>
            </div>

            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Google Map','google_map');
                echo form_error('google_map');
                echo form_input('google_map',set_value('page_title',$item_vi->google_map),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Email','email');
                echo form_error('email');
                echo form_input('email',set_value('email',$item_vi->email),'class="form-control"');
                ?>
            </div>

            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Address','address');
                echo form_error('address');
                echo form_input('address',set_value('address',$item_vi->address),'class="form-control"');
                ?> 
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Slogan','slogan');
                echo form_error('slogan');
                echo form_input('slogan',set_value('slogan',$item_vi->slogan),'class="form-control"');
                ?> 
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Keyword</strong>
                <div id="editor">
                    <textarea class="ckeditor" name="keyword"><?php echo $item_vi->keyword ?></textarea> 
                    <?php echo form_error('keyword','<p class="error">'); ?>
                </div>
            </div>          
            
            <!-- AJAX Response will be outputted on this DIV container -->
            <?php echo form_hidden('id',$item_vi->id);?>

            <?php echo form_close();?>
        </div>
    </div>
</div>