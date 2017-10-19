<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">ADD IMAGE LIBRARY</h3>
            <?php echo form_open_multipart('admin/images_library/create/');?>
            <div class="col-md-12">
                <label>Name </label><span class="error">*</span>
                <?php
                echo form_error('name','<p class="error">');
                echo form_input('name',set_value('name',''),'class="form-control"');
                ?>
            </div>             
            <div class="form-group col-md-12">
                <label>Image <span class="error">*</span></label>
                <?php echo form_error('image_link','<p class="error">'); ?>
                <div id="editor">
                    <textarea class="ckeditor" name="image_link"><?php echo set_value('image_link','') ?></textarea>                     
                </div>
            </div>
            

            <?php
            $submit_button = 'Save';
            echo form_submit('submit', $submit_button, 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo anchor('/admin/images_library', 'Cancel','class="btn btn-default btn-lg btn-block"');?>
            <?php echo form_close();?>
            <div class="form-group col-md-12">
                <button class="btn btn-primary" onclick="BrowseServer()">upload</button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo public_helper('ckfinder/ckfinder.js?t=20100601')?>"></script>
<script type="text/javascript">

    function BrowseServer()
    {
       // You can use the "CKFinder" class to render CKFinder in a page:
       
       var finder = new CKFinder();
       finder.basePath = '/ckfinder/';   // The path for the installation of CKFinder (default = "/ckfinder/").
       finder.baseDir = '/fichiers/documents/';
       finder.removePlugins = 'basket';
       finder.resourceType = 'Documents';
       finder.Width = '500px';
       finder.Height = '400px';
       finder.language = 'fr';
       finder.popup();
    }

        function SetFileField(fileUrl, data)
        {
            //alert('Bạn đã chọn file: ' + fileUrl);
            document.getElementById("image").setAttribute("value", fileUrl);
        }

    </script>