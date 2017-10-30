<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">CALENDAR MANAGEMENT</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-lg-5 pd-l-0">
                <select class="form-control" name="user" id="user_name">
                    <option value="0">Please select student</option>
                    <?php foreach ($users as $user) { ?>
                    <option title="<?php echo $user->email.' - '.$user->phone; ?>" value="<?php echo $user->username; ?>"><?php echo $user->last_name.' '.$user->first_name.' - '.$user->email; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-lg-5 pd-0">
                <select class="form-control" name="course" id="course_id">
                    <option value="0">Please select course name</option>
                    <?php foreach ($courses as $value) { ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->name.' - '.$value->start_date; ?></option>
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
                        <option value="<?php echo $value->id; ?>" <?php if($this->input->get('course_id') == $value->id) echo 'selected'; ?>><?php echo $value->name.' - '.$value->start_date; ?></option>
                        <?php } ?>
                    </select>                    
                </div>
                <div class='col-lg-5 pd-l-0'>
                    <div class="form-group">
                        <div class='input-group' id='datetimepicker1'>
                            <input type='text' class="form-control" placeholder="Enter date to search" name="start_date" value="<?php if($this->input->get('start_date') !="") echo $this->input->get('start_date'); ?>">
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
            echo '<th><div class="text-center">No</div></th>';
            echo '<th>Course name</th>';
            echo '<th>Student name</th>';
            echo '<th><div class="text-center">Total day</div></th>';
            echo '<th><div class="text-center">Days spent</div></th>';
            echo '<th><div class="text-center">Days remaining</div></th>';
            echo '<th><div class="text-center">Email</div</th>';
            echo '<th><div class="text-center">Student start date</div></th>';
            echo '<th><div class="text-center">Phone</div></th>';
            echo '<th style="width: 90px !important"><div class="text-center">Actions</div></th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {

                foreach($items as $key=> $item)
                {
                    echo '<tr>';
                    echo '<td><div class="text-center">'.$record_number.'</div></td>';
                    echo '<td>'.$item->course_name.'</td>'; 
                    echo '<td><a href="'.base_url('admin/calendar/update?user_name='.$item->user_name.'&course_id='.$item->course_id).'">'.$item->last_name .' '.$item->first_name.'</a></td>';
                    echo '<td><div class="text-center">'.$item->total_day.'</div></td>';
                    echo '<td><div class="text-center">'.$item->days_spent.'</div></td>';
                    echo '<td><div class="text-center">'.$item->days_remaining.'</div></td>';
                    echo '<td>'.$item->email.'</td>';
                    echo '<td>'.$item->start_date.'</td>';                     
                    echo '<td>'.$item->phone.'</td>';
                    echo '<td><div style="width: 100%; text-align: center"><a href="'.base_url('admin/calendar/update?user_name='.$item->user_name.'&course_id='.$item->course_id).'" style="color:#fff"><button title="Click to view attendance" class="btn btn-sm btn-success"><li class="fa fa-calendar"></li></button></a> <a href="'.base_url("admin/").'calendar/delete/'.$item->course_id.'/'.$item->user_name.'" style="color:#fff" onclick="return confirm(\'Are you sure to delete ?\')"><button title="Click to delete" class="btn btn-sm btn-danger"><li class="fa fa-trash"></li></button></a> </div></td>';
                    echo '</tr>';
                    $record_number++;
                }
            }
            echo '</tbody>';
            echo '</table>';
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <?php echo $pagination; ?>
        </div>
    </div>
</div>