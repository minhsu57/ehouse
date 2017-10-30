<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">NEW CATEGORY</h3>
            <?php echo form_open_multipart('admin/category/create');?>
            <div class="col-lg-12">
                <h3 class="col-lg-10" style="margin-top: 0"></h3>

                <div class="col-lg-2 pull-right">
                    <?php echo form_submit('submit', 'Save', 'class="btn btn-primary btn-lg btn-sm"');?>
                    <?php echo anchor('/admin/category', 'Cancel','class="btn btn-default btn-lg btn-sm"');?>
                </div>
            </div>
            <div class="form-group col-md-5 col-lg-5">
                <label>Title <span class="error">*</span></label>
                <?php
                //echo form_error('name',' <span class="error">');
                // echo form_input('name',set_value('name',''),'class="form-control"');
                ?>
                <span class="error"><?php echo form_error('name'); ?></span>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group col-md-4 col-lg-4">
                <?php
                echo form_label('Category Cha','parent');
                echo form_error('parent','<span class="error">');
                ?>
                <select class="form-control" name="parent">
                    <option value=""></option>
                    <?php foreach ($categories as $value) { ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-3 col-lg-3">
                <?php
                echo form_label('Sort Order','sort_order');
                ?>
                <span class="error"><?php echo form_error('sort_order'); ?></span>
                <input type="text" name="sort_order" class="form-control">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Description</strong>   
                <div id="editor">
                    <textarea class="ckeditor" name="description"></textarea> 
                    <?php echo form_error('description','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Tab 01</strong>  
                <div id="editor">
                    <textarea class="ckeditor" name="content"></textarea> 
                    <?php echo form_error('content','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Tab 02</strong>
                <div id="editor">
                    <textarea class="ckeditor" name="content2"></textarea> 
                    <?php echo form_error('content2','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Tab 03</strong>
                <div id="editor">
                    <textarea class="ckeditor" name="content3"></textarea> 
                    <?php echo form_error('content3','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Content 04 (bellow 3 tabs)</strong>
                <div id="editor">
                    <textarea class="ckeditor" name="content4"></textarea> 
                    <?php echo form_error('content4','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Button (Đăng ký ngay) - Url','url');
                echo form_error('url');
                ?>
                <input type="text" name="url" class="form-control" >
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <h5><b>SEO SECTION</b></h5>
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <?php
                echo form_label('Meta keyword','meta_keyword');
                echo form_error('meta_keyword','<p class="error">');
                ?>
                <textarea class="form-control" name="meta_keyword"><?php set_value("meta_keyword") ?></textarea>
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <?php
                echo form_label('Meta Description','meta_description');
                echo form_error('meta_description','<p class="error">');
                ?>
                <textarea class="form-control" name="meta_description"><?php set_value("meta_description") ?></textarea>
            </div>
            
            <?php echo form_close();?>
        </div>
    </div>
</div>