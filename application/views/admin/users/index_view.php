<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">USERS MANAGEMENT</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h3 class="">Search Section</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form method="GET" action="<?php echo base_url('admin/users'); ?>">
                <div class="col-lg-5 pd-l-0">
                    <input type="text" name="first_name" class="form-control" placeholder="Enter First name to search" value="<?php echo $this->input->get('first_name'); ?>">
                </div>
                <div class="col-lg-5 pd-l-0">
                    <input type="text" name="last_name" class="form-control" placeholder="Enter Last name to search" value="<?php echo $this->input->get('last_name'); ?>">
                </div>
                <div class="col-lg-2 pd-l-0">
                    <select name="active" class="form-control">
                        <option value="" <?php if(!$this->input->get('active') || $this->input->get('active')=="" ) echo 'selected'; ?> >All users status</option>
                        <option value="1" <?php if($this->input->get('active')==1) echo 'selected'; ?> >Actived</option>
                        <option value="0" <?php if($this->input->get('active')=="0") echo 'selected'; ?> >Locked</option>
                    </select>
                </div>
                <div class="col-lg-5 pd-l-0">
                    <input type="text" name="email" class="form-control" placeholder="Enter email to search" value="<?php echo $this->input->get('email'); ?>">
                </div>
                <div class="col-lg-5 pd-l-0">
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone to search" value="<?php echo $this->input->get('phone'); ?>">
                </div>
                
                <button class="btn btn-primary btn-md pull-right"  type="submit"><li class="fa fa-search"></li> SEARCH</button>
            </form>
        </div>
    </div>
    <div class="row" style="margin-top: 5px;">
        <div class="col-xs-12">
            <a href="<?php echo base_url('admin/users/create') ?>"><button title="Click to create new" class="btn btn-primary btn-md pull-right"><li class="fa fa-plus"></li></button></a>
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
            echo '<th>Last name</th>';
            echo '<th>First name</th>';
            echo '<th>Email</th>';
            echo '<th>Phone</th>';
            echo '<th>Modifed date</th>';
            echo '<th style="width: 160px !important">Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {

                foreach($items as $key => $item)
                {
                    echo '<tr>';
                    echo '<td><div class="text-center">'.$record_number.'</div></td>';
                    echo '<td>'.$item->username.'</td>';                    
                    echo '<td>'.$item->last_name.'</td>';
                    echo '<td>'.$item->first_name.'</td>';
                    echo '<td>'.$item->email.'</td>';
                    echo '<td>'.$item->phone.'</td>';
                    echo '<td>'.$item->modified_date.'</td>';
                    echo '<td>';
                    echo '<a href="'.base_url("admin/").'users/media/'.$item->id.'" style="color:#fff"><button title="Click to view media" class="btn btn-sm btn-info"><li class="fa fa-file-video-o"></li></button></a> ';
                    echo '<a href="'.base_url("admin/").'users/edit/'.$item->id.'" style="color:#fff"><button title="Click to edit" class="btn btn-sm btn-info"><li class="fa fa-pencil"></li></button></a> ';
                    echo '<a href="'.base_url("admin/").'users/delete/'.$item->id.'/'.$item->username.'" style="color:#fff" onclick="return confirm(\'Are you sure want to delete ?\')"><button title="Click to delete" class="btn btn-sm btn-danger"><li class="fa fa-trash"></li></button></a>';
                    if($item->active == 1){
                        echo '<a href="'.base_url('admin/users/lock/'.$item->id.'/'.$item->active).'" style="color:#fff; margin-left:5px" onclick="return confirm(\'Are you sure want to lock it ?\')"><button title="Click to lock" class="btn btn-sm btn-warning"><li class="fa fa-lock"></li></button></a>';
                    }else{
                        echo '<a href="'.base_url('admin/users/lock/'.$item->id.'/'.$item->active).'" style="color:#fff; margin-left:5px" onclick="return confirm(\'Are you sure want to unlock it ?\')"><button title="Click to unlock" class="btn btn-sm btn-default"><li class="fa fa-unlock"></li></button></a>';
                    }                
                    ?>
                    <?php
                    echo '</td>';
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