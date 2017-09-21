<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">EDIT COURSE</h3>
        </div>
    </div>
    <?php echo form_open_multipart('admin/course/edit/'.$item->id);?>
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
                <label>Name</label>
                <span class="error">*</span>
                <?php
                echo form_error('name','<p class="error">');
                ?>
                <input type="text" name="name" class="form-control" value="<?php if(set_value("name")) echo set_value("name"); else echo $item->name; ?>">
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <?php
                echo form_label('Teacher','teacher');
                echo form_error('teacher','<p class="error">');
                ?>
                <input type="text" name="teacher" class="form-control" value="<?php if(set_value("teacher")) echo set_value("teacher"); else echo $item->teacher; ?>">
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <label>Total day</label>
                <span class="error">*</span>
                <?php
                echo form_error('total_day','<p class="error">');
                ?>
                <input type="text" name="total_day" class="form-control" value="<?php if(set_value("total_day")) echo set_value("total_day"); else echo $item->total_day; ?>">
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <label>Start date</label>
                <span class="error">*</span>
                <?php
                echo form_error('start_date','<p class="error">');
                ?>
                <input type="text" id="start_date" name="start_date" class="form-control date" value="<?php if(set_value("start_date")) echo set_value("start_date"); else echo $item->start_date; ?>">
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <label>End date</label>
                <?php
                echo form_error('end_date','<p class="error">');
                ?>
                <input type="text" id="end_date" name="end_date" class="form-control date" value="<?php if(set_value("end_date")) echo set_value("end_date"); else echo $item->end_date; ?>">
            </div>
            <div class="form-group col-md-12 col-lg-12">
                <?php
                echo form_label('Description','description');
                echo form_error('description','<p class="error">');
                ?>
                <input type="text" name="description" class="form-control" value="<?php if(set_value("description")) echo set_value("description"); else echo $item->description; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $item->id; ?>">
            <?php echo form_close();?>
        </div>
    </div>
</div>