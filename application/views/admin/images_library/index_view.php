<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">IMAGES LIBRARY MANAGEMENT</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <a href="<?php echo base_url('admin/images_library/create') ?>"><button class="btn btn-primary btn-md pull-right"><li class="fa fa-plus"></li> Add</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th><div class="text-center">No</div></th>';
            echo '<th>name</th>';
            echo '<th>Image</th>';
            echo '<th>Sort Order</th>';
            echo '<th>Created date</th>';
            echo '<th><div style="text-align: center">Actions</div></th>';
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
                    echo '<td><img src="'.base_url($item->image).'" style="width: 120px;"></td>'; 
                    echo '<td>'.$item->sort.'</td>';                   
                    echo '<td>'.$item->modified_date.'</td>'; ?>
                    <?php
                    echo '<td><div style="text-align: center;">';
                    echo '<a href="images_library/delete/'.$item->id.'" style="color:#fff" onclick="return confirm(\'Are you sure to delete ?\')"><button class="btn btn-sm btn-danger"><li class="fa fa-trash"></li></button></a>';
                    ?>
                    <?php
                    echo '</div></td>';
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