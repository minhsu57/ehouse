<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center">MEDIA MANAGEMENT</h4>
        </div>
    </div>
    <form action="<?php echo base_url('admin/users/media_upload') ?>" method="POST" enctype="multipart/form-data" >
    <div class="row" style="margin-top: 5px;">
        <div class="col-xs-12">
            <input type="file" name="media_file" class="form-control col-xs-4">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <a href="<?php echo base_url('admin/media/create') ?>"><button title="Click to create new" class="btn btn-primary btn-md pull-right"><li class="fa fa-upload"></li></button></a>
        </div>
    </div>
    </form>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th><div class="text-center">No</div></th>';
            echo '<th>Name</th>';
            echo '<th>link</th>';
            echo '<th>Created date</th>';
            echo '<th style="width: 160px !important">Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {

                foreach($items as $key => $item)
                {
                    echo '<tr>';
                    echo '<td><div class="text-center">'.($key+1).'</div></td>';
                    echo '<td>'.$item->name.'</td>';                    
                    echo '<td><audio controls>
                              <source src="'.base_url().'public/upload/media/'.$item->link.'" type="audio/ogg">
                            </audio></td>';
                    echo '<td>'.$item->created_date.'</td>';
                    echo '<td>';
                    echo '<a href="'.base_url("admin/").'users/delete_media/'.$item->user_id.'/'.$item->id.'" style="color:#fff" onclick="return confirm(\'Are you sure want to delete ?\')"><button title="Click to delete" class="btn btn-sm btn-danger"><li class="fa fa-trash"></li></button></a>';               
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