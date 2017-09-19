<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">CALENDAR MANAGEMENT</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-lg-5 pd-l-0">
                <select class="form-control" name="user" id="user_name">
                    <option value="0">Please select student</option>
                    <?php foreach ($users as $user) { ?>
                    <option value="<?php echo $user->username; ?>"><?php echo $user->first_name.' '.$user->last_name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-lg-5 pd-0">
                <select class="form-control" name="course" id="course_id">
                    <option value="0">Please select course name</option>
                    <?php foreach ($courses as $value) { ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <button class="btn btn-primary btn-md pull-right" onclick="create_calendar()"><li class="fa fa-plus"></li> ADD CALENDAR</button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="">Search Section</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form method="GET" action="<?php echo base_url('admin/calendar'); ?>">
                <div class="col-lg-5 pd-l-0">
                    <input type="text" name="email" class="form-control" placeholder="Enter email to search" value="<?php echo $this->input->get('email'); ?>">
                </div>
                <div class="col-lg-5 pd-l-0">
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone to search" value="<?php echo $this->input->get('phone'); ?>">
                </div>
                <div class="col-lg-5 pd-l-0">
                    <select class="form-control" name="course_id">
                        <option value="">------- All Courses -------</option>
                        <?php foreach ($courses as $value) { ?>
                        <option value="<?php echo $value->id; ?>" <?php if($this->input->get('course_id') == $value->id) echo 'selected'; ?>><?php echo $value->name; ?></option>
                        <?php } ?>
                    </select>                    
                </div>
                <div class='col-lg-5 pd-l-0'>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" name="start_date" value="<?php if($this->input->get('start_date') !="") echo $this->input->get('start_date'); ?>" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
                <button class="btn btn-primary btn-md pull-right"  type="submit"><li class="fa fa-search"></li> SEARCH</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Course name</th>';
            echo '<th>Student name</th>';
            echo '<th>Email</th>';
            echo '<th>Phone</th>';
            echo '<th>Status</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {

                foreach($items as $item)
                {
                    echo '<tr>';
                    echo '<td>'.$item->course_name.'</td>'; 
                    echo '<td><a href="'.base_url('admin/calendar/update?user_name='.$item->user_name.'&course_id='.$item->course_id).'">'.$item->last_name .' '.$item->first_name.'</a></td>';
                    echo '<td>'.$item->email.'</td>';                    
                    echo '<td>'.$item->phone.'</td>';
                    echo '<td></td>';
                    echo '</tr>';
                }
            }
            echo '</tbody>';
            echo '</table>';
            echo '<nav><ul class="pagination">';
            // echo //$next_previous_pages;
            echo '</ul></nav>';
            ?>
        </div>
    </div>
</div>