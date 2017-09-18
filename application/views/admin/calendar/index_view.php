<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">QUẢN LÝ CALENDAR</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <a href="<?php echo base_url('admin/category/create') ?>"><button class="btn btn-primary btn-md pull-right"><li class="fa fa-plus"></li> Thêm mới</button></a>
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
                    echo '<td>';
                    // echo '<a href="'.base_url("admin/").'category/edit/'.$item->id.'" style="color:#fff"><button class="btn btn-sm btn-warning">Sửa</button></a> ';                   
                    ?>
                    <?php
                    echo '</td>';
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