<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-md-10">
            <h3 class="text-center">Tạo mới Slider</h3>
            <?php echo form_open_multipart('admin/slider/create/');?>
            <div class="col-md-6">
                <label>Category </label><span class="error">*</span>
                <select class="form-control" name="category">
                <?php foreach ($categories as $value) { ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label>Link </label>
                <?php
                echo form_error('link');
                echo form_input('link',set_value('link',''),'class="form-control"');
                ?>
            </div>             
            <div class="form-group col-md-5">
                <label>Slogan 01 <span class="error">*</span></label>
                <?php
                echo form_error('description','<span class="error">');
                echo form_input('description',set_value('description',''),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-5">
                <label>Slogan 02 </label>
                <?php
                echo form_error('description2');
                echo form_input('description2',set_value('description2',''),'class="form-control"');
                ?>
            </div>
            <div class="col-md-2">
                <label>Status <span class="error">*</span></label>
                <select class="form-control" name="status">
                    <option value="1">Show</option>
                    <option value="0">Hide</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Image <span class="error">*</span></label>
                <?php echo form_error('image','<p class="error">'); ?>
                <div>
                    <input type="hidden" name="image" id="image" value="<?php echo set_value("image"); ?>">
                    <img src="<?php echo base_url(set_value("image")); ?>" id="image_link_img" style="max-height: 300px" onclick="openPopup()" name="image_link_img">
                    <button type="button" class="btn btn-default" onclick="openPopup()"><li class="fa fa-image"></li> Browse Image</button>
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
<script src="<?php echo public_helper('ckfinder/ckfinder.js?t='.rand())?>"></script>
<script>
     function openPopup() {
         CKFinder.popup( {
             chooseFiles: true,
             onInit: function( finder ) {
                 finder.on( 'files:choose', function( evt ) {
                     var file = evt.data.files.first();
                     document.getElementById( 'image' ).value = file.getUrl();
                     document.getElementById( 'image_link_img' ).src = base_url+file.getUrl();
                 } );
                 finder.on( 'file:choose:resizedImage', function( evt ) {
                     document.getElementById('image').value = evt.data.resizedUrl;
                   document.getElementById( 'image_link_img' ).src = base_url+evt.data.resizedUrl;
                 } );
             }
         } );
     }
 </script>