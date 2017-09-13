<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-md-10">
            <h1 class="text-center">Sửa Slider</h1>
            <?php echo form_open_multipart('admin/slider/edit/'.$item->id);?>
            <div class="col-md-6">
                <label>Category </label><span class="error">*</span>
                <select class="form-control" name="category">
                <option value="<?php echo $item->category_id; ?>"><?php echo $item->category_name; ?></option>
                <?php foreach ($categories as $value) { ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label>Link </label><span class="error">*</span>
                <?php
                echo form_error('link');
                echo form_input('link',set_value('link', $item->link),'class="form-control"');
                ?>
            </div>             
            <div class="form-group col-md-5">
                <label>Slogan 01 </label><span class="error">*</span>
                <?php
                echo form_error('description');
                echo form_input('description',set_value('description', $item->description),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-5">
                <label>Slogan 02 </label><span class="error">*</span>
                <?php
                echo form_error('description2');
                echo form_input('description2',set_value('description2', $item->description2),'class="form-control"');
                ?>
            </div>
            <div class="col-md-2">
                <label>Status </label><span class="error">*</span>
                <select class="form-control" name="status">
                    <option value="<?php echo $item->status; ?>"><?php if($item->status == 1) echo "Hiện"; else echo "Ẩn"; ?></option>
                    <option value="<?php if($item->status == 1) echo 0; else echo 1; ?>"><?php if($item->status == 1) echo "Ẩn"; else echo "Hiện"; ?></option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Hình ảnh <span class="error">*</span></label>
                <div id="editor">
                    <textarea class="ckeditor" name="image"><?php echo $item->image; ?></textarea> 
                    <?php echo form_error('image','<p class="error">'); ?>
                </div>
            </div>
                     
            <?php
            $submit_button = 'Save';
            echo form_submit('submit', $submit_button, 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo anchor('/admin/slider', 'Cancel','class="btn btn-default btn-lg btn-block"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>