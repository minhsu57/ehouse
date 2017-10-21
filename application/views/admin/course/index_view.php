<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">COURSES MANAGEMENT</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="">Search Section</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form method="GET" action="<?php echo base_url('admin/course'); ?>">
                <div class="col-lg-2 pd-l-0">
                    <select name="active" class="form-control" title="Course status">
                        <option value="" <?php if($this->input->get('active')=="") echo 'selected'; ?> >All course status</option>
                        <option value="1" <?php if($this->input->get('active')==1) echo 'selected'; ?> >Actived</option>
                        <option value="0" <?php if($this->input->get('active')=="0") echo 'selected'; ?> >Locked</option>
                    </select>
                </div>
                <button class="btn btn-primary btn-md"  type="submit"><li class="fa fa-search"></li> SEARCH</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo base_url('admin/course/create'); ?>"><button title="Click to create new" class="pull-right btn btn-primary"><li class="fa fa-plus"></li></button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th><div class="text-center">No</div></th>';
            echo '<th style="width: 300px !important">Name</th>';
            echo '<th>Teacher</th>';
            echo '<th><div class="text-center">Total day</div></th>';
            echo '<th style="width: 90px !important">Start date</th>';
            echo '<th style="width: 90px !important">End date</th>';
            echo '<th>Description</th>';
            echo '<th style="width: 150px !important">Modified date</th>';            
            echo '<th style="width: 120px !important">Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {
                foreach($items as $key => $item)
                {
                    echo '<tr>';
                    echo '<td><div class="text-center">'.$record_number.'</div></td>';
                    echo '<td><div style="max-width: 300px;">'.$item->name.'</div></td>';
                    echo '<td><div style="max-width: 300px;">'.$item->teacher.'</div></td>';
                    echo '<td><div class="text-center">'.$item->total_day.'</div></td>';
                    echo '<td>'.$item->start_date.'</td>';
                    echo '<td>'.$item->end_date.'</td>'; 
                    echo '<td>'.$item->description.'</td>';                    
                    echo '<td>'.$item->modified_date.'</td>';
                    echo '<td>';
                    echo '<a href="'.base_url('admin/course/edit/'.$item->id).'" style="color:#fff"><button title="Click to edit" class="btn btn-sm btn-info"><li class="fa fa-pencil"></li></button></a>';
                    echo '<a href="'.base_url('admin/course/delete/'.$item->id).'" style="color:#fff; margin-left:5px" onclick="return confirm(\'Are you sure want to delete ?\')"><button title="Click to delete" class="btn btn-sm btn-danger"><li class="fa fa-trash"></li></button></a>';
                    if($item->active == 1){
                        echo '<a href="'.base_url('admin/course/lock/'.$item->id.'/'.$item->active).'" style="color:#fff; margin-left:5px" onclick="return confirm(\'Are you sure want to lock it ?\')"><button title="Click to lock" class="btn btn-sm btn-warning"><li class="fa fa-lock"></li></button></a>';
                    }else{
                        echo '<a href="'.base_url('admin/course/lock/'.$item->id.'/'.$item->active).'" style="color:#fff; margin-left:5px" onclick="return confirm(\'Are you sure want to unlock it ?\')"><button title="Click to unlock" class="btn btn-sm btn-default"><li class="fa fa-unlock"></li></button></a>';
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