<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">ADD IMAGE LIBRARY</h3>
            <?php echo form_open_multipart('admin/images_library/create/');?>
            <div class="col-md-6">
                <label>Name <span class="error">*</span></label>
                <?php
                echo form_error('name','<p class="error">');
                echo form_input('name',set_value('name',''),'class="form-control"');
                ?>
            </div>
            <div class="col-md-6">
                <label>Sort <span class="error">*</span></label>
                <?php
                echo form_error('sort','<p class="error">');
                echo form_input('sort',set_value('sort',''),'class="form-control"');
                ?>
            </div>              
            <div class="form-group col-md-12" style="margin-top: 5px">
                <label>Image <span class="error">*</span></label>
                <?php echo form_error('image_link','<p class="error">'); ?>
                <input type="hidden" name="image_link" id="image_link" value="<?php echo set_value("image_link"); ?>">
                <img src="<?php echo set_value("image_link"); ?>" id="image_link_img" style="max-width: 400px" onclick="openPopup()">
                <button type="button" class="btn btn-default" onclick="openPopup()"><li class="fa fa-image"></li> Browse Image</button>
            </div>
            

            <?php
            $submit_button = 'Save';
            echo form_submit('submit', $submit_button, 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo anchor('/admin/images_library', 'Cancel','class="btn btn-default btn-lg btn-block"');?>
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
                     document.getElementById( 'image_link' ).value = file.getUrl();
                     document.getElementById( 'image_link_img' ).src = base_url+file.getUrl();
                 } );
                 finder.on( 'file:choose:resizedImage', function( evt ) {
                     document.getElementById('image_link').value = evt.data.resizedUrl;
                   document.getElementById( 'image_link_img' ).src = base_url+evt.data.resizedUrl;
                 } );
             }
         } );
     }
 </script>
