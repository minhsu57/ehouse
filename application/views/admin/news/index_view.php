<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center"><b>NEWS MANAGEMENT</b></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo base_url('admin/news/create'); ?>"><button class="pull-right btn btn-primary"><li class="fa fa-plus"></li> Add news</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th style="width: 300px !important">Title</th>';
            echo '<th>Sumary content</th>';
            echo '<th>Image</th>';
            echo '<th>Modified date</th>';            
            echo '<th>Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {
                foreach($items as $item)
                {
                    echo '<tr>';
                    echo '<td><div style="max-width: 300px;">'.$item->title.'</div></td>';
                    echo '<td><div style="max-width: 300px;">'.$item->short_content.'</div></td>'; 
                    echo '<td><img src="'.base_url($item->image).'" style="width: 150px;"></td>';                    
                    echo '<td>'.$item->modified_date.'</td>';
                    echo '<td>';
                    echo '<a href="'.base_url('admin/news/edit/'.$item->id).'" style="color:#fff"><button class="btn btn-sm btn-info">Sửa</button></a>';
                    echo '<a href="'.base_url('admin/news/delete/'.$item->id).'" style="color:#fff; margin-left:5px" onclick="return confirm(\'Bạn chắc chắn muốn xóa ?\')"><button class="btn btn-sm btn-danger">Xóa</button></a>';
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