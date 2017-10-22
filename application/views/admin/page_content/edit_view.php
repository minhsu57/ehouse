<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <?php echo form_open_multipart('admin/page_content/edit/'.$item->id);?>
            <div class="col-lg-12">
                <h3 class="col-lg-10" style="margin-top: 10px;  text-align: center"><?php echo $item->title; ?></h3>

                <div class="col-lg-2 pull-right">
                    <?php echo form_submit('submit', 'Save', 'class="btn btn-primary btn-lg btn-sm"');?>
                    <?php echo anchor('/admin/page_content', 'Cancel','class="btn btn-default btn-lg btn-sm"');?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <label>Title <span class="error">*</span></label>
                <?php
                echo form_error('title','<span class="error">');
                echo form_input('title',set_value('title',$item->title),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <?php
                echo form_label('Link','link');
                echo form_error('link');
                echo form_input('link',set_value('link',$item->link),'class="form-control"');
                ?>
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <?php
                echo form_label('Note','note');
                echo form_error('note');
                echo form_input('note',set_value('note',$item->note),'class="form-control"');
                ?>
            </div>            
            <div class="form-group col-md-6 col-lg-6">
                <strong>Image</strong>
                <?php echo form_error('image','<p class="error">'); ?>
                <div>
                    <input type="hidden" name="image" id="image" value="<?php echo set_value("image", $item->image); ?>">
                    <img src="<?php echo base_url(set_value("image", $item->image)); ?>" id="image_link_img" style="max-height: 200px; margin-bottom: 5px" onclick="openPopup()" name="image_link_img">
                    <div>
                        <button type="button" class="btn btn-default" onclick="openPopup()"><li class="fa fa-image"></li> Browse Image</button>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Description</strong>   
                <div id="editor">
                    <?php //echo $this->ckeditor->editor('content',$item->content);?>
                    <textarea class="ckeditor" name="description"><?php echo $item->description ?></textarea> 
                    <?php echo form_error('description','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Description 2</strong>  
                <div id="editor">
                    <?php //echo $this->ckeditor->editor('content',$item->content);?>
                    <textarea class="ckeditor" name="content"><?php echo $item->content ?></textarea> 
                    <?php echo form_error('content','<p class="error">'); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <strong>Description 3</strong>
                <div id="editor">
                    <?php //echo $this->ckeditor->editor('content',$item->content);?>
                    <textarea class="ckeditor" name="content2"><?php echo $item->content2 ?></textarea> 
                    <?php echo form_error('content2','<p class="error">'); ?>
                </div>
            </div>
            
            
            <!-- AJAX Response will be outputted on this DIV container -->
            <?php echo form_hidden('id',$item->id);?>
            
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