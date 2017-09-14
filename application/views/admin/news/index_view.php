<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h2>NEWS MANAGEMENT</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo base_url('admin/news/create'); ?>"><button class="pull-right btn btn-primary"><li class="fa fa-plus"></li> Thêm bài viết mới</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<thead>';
            echo '<tr>';
            echo '<th style="width: 300px !important">Title</th>';
            echo '<th>Image</th>';
            echo '<th>Modified date</th>';
            echo '<th>Status</th>';
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
                    ?>
                    <td><?php preg_match('@src="([^"]+)"@', $item->content, $matches); if(count($matches) > 0) echo '<img '.$matches[0].'" class="img-200"> '; ?></td>
                    <?php                     
                    echo '<td>'.$item->modified_date.'</td>';
                    echo '<td>'.$item->status.'</td>';
                    echo '<td>';
                    echo '<a href="'.base_url('admin/tintuc/edit/'.$item->id).'" style="color:#fff"><button class="btn btn-sm btn-info">Sửa</button></a>';
                    echo '<a href="tintuc/delete/'.$item->id.'" style="color:#fff; margin-left:5px" onclick="return confirm(\'Bạn chắc chắn muốn xóa ?\')"><button class="btn btn-sm btn-danger">Xóa</button></a>';
                    ?>
                    <a href="<?php echo 'tintuc/changeStatus/'.$item->id.'/'.$item->status ?>" style="color:#fff"><button class="btn btn-sm btn-warning" style="margin-left:5px"><?php if($item->status == 1) echo 'Ẩn'; else echo 'Hiện'; ?></button></a>
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