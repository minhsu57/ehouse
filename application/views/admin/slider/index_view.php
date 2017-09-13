<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">QUẢN LÝ SLIDER</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <a href="<?php echo base_url('admin/slider/create') ?>"><button class="btn btn-primary btn-md pull-right"><li class="fa fa-plus"></li> Thêm mới</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Category name</th>';
            echo '<th>Slogan</th>';
            echo '<th>Hình</th>';
            echo '<th>Ngày upload</th>';
            echo '<th>T.Thái</th>';
            echo '<th>Thao tác</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            if(!empty($items))
            {

                foreach($items as $item)
                {
                    echo '<tr>';
                    echo '<td>'.$item->category_name.'</td>';
                    echo '<td>'.$item->description.'</td>';
                    echo '<td><img src="'.base_url($item->image_name).'" style="width: 180px;"></td>';                    
                    echo '<td>'.$item->modified_date.'</td>'; ?>
                    <td><?php if($item->status == 1) echo "Hiện"; else echo "Ẩn"; ?></td>
                    <?php
                    echo '<td>';
                    echo '<a href="slider/edit/'.$item->id.'" style="color:#fff"><button class="btn btn-sm btn-warning">Sửa</button></a> ';
                    echo '<a href="slider/delete/'.$item->id.'" style="color:#fff" onclick="return confirm(\'Bạn chắc chắn muốn xóa ?\')"><button class="btn btn-sm btn-danger">Xóa</button></a>';
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