<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">SỬA CATEGORY</h1>
            <?php echo form_open_multipart('admin/category/edit/'.$item->id);?>
            <div class="col-lg-12">
                <h3 class="col-lg-10" style="margin-top: 0"></h3>

                <div class="col-lg-2 pull-right">
                    <?php echo form_submit('submit', 'Save', 'class="btn btn-primary btn-lg btn-sm"');?>
                    <?php echo anchor('/admin/category', 'Cancel','class="btn btn-default btn-lg btn-sm"');?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Tiêu đề','name');
                echo form_error('name');
                ?>
                <input type="text" name="name" class="form-control" disabled value="<?php echo $item->name; ?>">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Category Cha','parent');
                ?>
                <select class="form-control" name="parent">
                <option value="<?php echo $item->parent; ?>"><?php if($item->parent != "NULL" && $item->parent != "") echo $item->parent; ?></option>
                <?php if($item->parent != "NULL" && $item->parent != "") { ?>
                <option value=""></option>
                <?php } ?>
                <?php foreach ($categories as $value) { ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Mô tả</strong>   
                <div id="editor">
                    <textarea class="ckeditor" name="description"><?php echo $item->description ?></textarea> 
                    <?php echo form_error('description','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Thông tin khóa học</strong>  
                <div id="editor">
                    <textarea class="ckeditor" name="content"><?php echo $item->content; ?></textarea> 
                    <?php echo form_error('content','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Đăng ký khóa học</strong>
                <div id="editor">
                    <textarea class="ckeditor" name="content2"><?php echo $item->content2; ?></textarea> 
                    <?php echo form_error('content2','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Nội dung khóa học</strong>
                <div id="editor">
                    <textarea class="ckeditor" name="content3"><?php echo $item->content3; ?></textarea> 
                    <?php echo form_error('content3','<p class="error">'); ?>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $item->id; ?>">
            <?php echo form_close();?>
        </div>
    </div>
</div>