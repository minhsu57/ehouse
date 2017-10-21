<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">SLIDER MANAGEMENT</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <a href="<?php echo base_url('admin/slider/create') ?>"><button class="btn btn-primary btn-md pull-right"><li class="fa fa-plus"></li> ADD NEW</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th><div class="text-center">No</div></th>';
            echo '<th>Category name</th>';
            echo '<th>Slogan</th>';
            echo '<th>Image</th>';
            echo '<th>Modified date</th>';
            echo '<th>Status</th>';
            echo '<th>Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {

                foreach($items as $key => $item)
                {
                    echo '<tr>';
                    echo '<td><div class="text-center">'.($key+1).'</div></td>';
                    echo '<td>'.$item->category_name.'</td>';
                    echo '<td>'.$item->description.'</td>';
                    echo '<td><img src="'.base_url($item->image).'" style="width: 180px;"></td>';                    
                    echo '<td>'.$item->modified_date.'</td>'; ?>
                    <td><?php if($item->status == 1) echo "Showing"; else echo "Hiding"; ?></td>
                    <?php
                    echo '<td>';
                    echo '<a href="slider/edit/'.$item->id.'" style="color:#fff"><button class="btn btn-sm btn-warning"><li class="fa fa-pencil"></li></button></a> ';
                    echo '<a href="slider/delete/'.$item->id.'" style="color:#fff" onclick="return confirm(\'Are you sure to delete ?\')"><button class="btn btn-sm btn-danger"><li class="fa fa-trash"></li></button></a>';
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