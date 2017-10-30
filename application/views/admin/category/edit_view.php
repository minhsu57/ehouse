<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">EDIT CATEGORY</h3>
            <?php echo form_open_multipart('admin/category/edit/'.$item->id);?>
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
                echo form_error('name');
                ?>
                <input type="text" name="name" class="form-control" disabled value="<?php echo $item->name; ?>" title="<?php echo $item->name; ?>">
            </div>
            <?php if($item->level != -1) { ?>
            <div class="form-group col-md-4 col-lg-4">
                <?php
                echo form_label('Category Cha','parent');
                ?>
                <select class="form-control" name="parent" <?php if($item->level == -1) echo "disabled"; ?>>
                <option value="<?php echo $item->parent; ?>"><?php if($item->parent != "NULL" && $item->parent != "") echo $item->parent; ?></option>
                <?php if($item->parent != "NULL" && $item->parent != "") { ?>
                <option value=""></option>
                <?php } ?>
                <?php foreach ($categories as $value) { ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                <?php } ?>
                </select>
            </div>            
            <?php } ?>
            <div class="form-group col-md-3 col-lg-3">
                <?php
                echo form_label('Sort Order','sort_order');
                echo form_error('sort_order');
                ?>
                <input type="text" name="sort_order" class="form-control" value="<?php echo $item->sort_order; ?>" title="<?php echo $item->sort_order; ?>">
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Description</strong>   
                <div id="editor">
                    <textarea class="ckeditor" name="description"><?php echo $item->description ?></textarea> 
                    <?php echo form_error('description','<p class="error">'); ?>
                </div>
            </div>
            <?php if($item->level != -1) { ?>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Tab 01</strong>  
                <div id="editor">
                    <textarea class="ckeditor" name="content"><?php echo $item->content; ?></textarea> 
                    <?php echo form_error('content','<p class="error">'); ?>
                </div>
            </div>
            <?php } ?>
            <?php if($item->level != -1) { ?>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Tab 02</strong>
                <div id="editor">
                    <textarea class="ckeditor" name="content2"><?php echo $item->content2; ?></textarea> 
                    <?php echo form_error('content2','<p class="error">'); ?>
                </div>
            </div>
            <?php } ?>
            <?php if($item->level != -1) { ?>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Tab 03</strong>
                <div id="editor">
                    <textarea class="ckeditor" name="content3"><?php echo $item->content3; ?></textarea> 
                    <?php echo form_error('content3','<p class="error">'); ?>
                </div>
            </div>
            <?php } ?>
            <?php if($item->level != -1) { ?>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Content 04 (bellow 3 tabs)</strong>
                <div id="editor">
                    <textarea class="ckeditor" name="content4"><?php echo $item->content4; ?></textarea> 
                    <?php echo form_error('content4','<p class="error">'); ?>
                </div>
            </div>
            <?php } ?>
            <?php if($item->level != -1) { ?>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Button (Đăng ký ngay) - Url','url');
                echo form_error('url');
                ?>
                <input type="text" name="url" class="form-control" value="<?php echo $item->url; ?>" >
            </div>
            <?php } ?>
            <div class="form-group col-md-12 col-lg-12">
                <h5><b>SEO SECTION</b></h5>
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <?php
                echo form_label('Meta keyword','meta_keyword');
                echo form_error('meta_keyword','<p class="error">');
                ?>
                <textarea class="form-control" name="meta_keyword"><?php echo $item->meta_keyword; ?></textarea>
            </div>
            <div class="form-group col-md-12 col-lg-6">
                <?php
                echo form_label('Meta Description','meta_description');
                echo form_error('meta_description','<p class="error">');
                ?>
                <textarea class="form-control" name="meta_description"><?php echo $item->meta_description; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $item->id; ?>">
            <?php echo form_close();?>
        </div>
    </div>
</div>