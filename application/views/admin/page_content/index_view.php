<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">PAGE CONTENT MANAGEMENT</h3>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-xs-12">
            <a href="<?php echo base_url('admin/page_content/create') ?>"><button class="btn btn-primary btn-md pull-right"><li class="fa fa-plus"></li> Thêm mới</button></a>
        </div>
    </div> -->
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th>Note</th>';
            echo '<th>Image</th>';
            echo '<th>Modify Date</th>';
            echo '<th>Action</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {

                foreach($items as $item)
                {
                    echo '<tr>';
                    echo '<td>'.$item->title.'</td>';
                    echo '<td>'.$item->note.'</td>';
                    echo '<td><img src="'.base_url($item->image).'" style="width: 150px;"></td>';                    
                    echo '<td>'.$item->modified_date.'</td>';
                    echo '<td><div  style="text-align:center">';
                    echo '<a href="'.base_url("admin/").'page_content/edit/'.$item->id.'" style="color:#fff"><button class="btn btn-sm btn-info"><li class="fa fa-pencil"></li></button></a> </div>';
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