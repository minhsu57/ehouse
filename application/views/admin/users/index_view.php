<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">USERS MANAGEMENT</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <a href="<?php echo base_url('admin/user/create') ?>"><button class="btn btn-primary btn-md pull-right"><li class="fa fa-plus"></li> Thêm mới</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th><div class="text-center">No</div></th>';
            echo '<th>Username</th>';
            echo '<th>First name</th>';
            echo '<th>Last name</th>';
            echo '<th>Email</th>';
            echo '<th>Phone</th>';
            echo '<th>Modifed date</th>';
            echo '<th>Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {

                foreach($items as $key => $item)
                {
                    echo '<tr>';
                    echo '<td><div class="text-center">'.$key.'</div></td>';
                    echo '<td>'.$item->username.'</td>';
                    echo '<td>'.$item->first_name.'</td>';                    
                    echo '<td>'.$item->last_name.'</td>';
                    echo '<td>'.$item->email.'</td>';
                    echo '<td>'.$item->phone.'</td>';
                    echo '<td>'.$item->modified_date.'</td>';
                    echo '<td>';
                    echo '<a href="'.base_url("admin/").'users/edit/'.$item->id.'" style="color:#fff"><button class="btn btn-sm btn-warning">Edit</button></a> ';
                        echo '<a href="'.base_url("admin/").'users/delete/'.$item->id.'" style="color:#fff" onclick="return confirm(\'Bạn chắc chắn muốn xóa ?\')"><button class="btn btn-sm btn-danger">Del</button></a>';                
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