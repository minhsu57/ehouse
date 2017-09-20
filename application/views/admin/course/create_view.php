<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center"><b>ADD NEW COURSE</b></h4>
        </div>
    </div>
    <?php echo form_open_multipart('admin/course/create/');?>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12 ">
                <div class="pull-right">
                    <?php echo form_submit('submit', 'SAVE', 'class="btn btn-primary btn-lg btn-sm"');?>
                    <a href="<?php echo base_url('admin/course') ?>"><input class="btn btn-default btn-lg btn-sm" type="button" value="CANCEL"></a>
                </div>                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="form-group col-md-12 col-lg-12">
                <?php
                echo form_label('Name','name');
                echo form_error('name','<p class="error">');
                ?>
                <input type="text" name="name" class="form-control" value="<?php echo set_value("name"); ?>">
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <?php
                echo form_label('Teacher','teacher');
                echo form_error('teacher','<p class="error">');
                ?>
                <input type="text" name="teacher" class="form-control" value="<?php echo set_value("teacher"); ?>">
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <?php
                echo form_label('Start Date','start_date');
                echo form_error('start_date','<p class="error">');
                ?>
                <input type="text" id="start_date" name="start_date" class="form-control date" value="<?php echo set_value("start_date"); ?>">
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <?php
                echo form_label('End Date','end_date');
                echo form_error('end_date','<p class="error">');
                ?>
                <input type="text" id="end_date" name="end_date" class="form-control date" value="<?php echo set_value("end_date"); ?>">
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <?php
                echo form_label('Description','description');
                echo form_error('description','<p class="error">');
                ?>
                <input type="text" name="description" class="form-control" value="<?php echo set_value("description"); ?>">
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>
