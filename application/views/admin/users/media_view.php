<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top:0px;">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center">MEDIA MANAGEMENT</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <span><a href="<?php echo base_url('admin/users') ?>"><button class="btn btn-default btn-sm"><li class="fa fa-arrow-circle-left"></li></button></a></span>
            <div class="label label-success"><?php echo 'Name - '.$user->last_name.' '.$user->first_name; ?></div>
            <div class="label label-success"><?php echo 'Email- '.$user->email; ?></div>
            <div class="label label-success"><?php echo 'Phone - '.$user->phone; ?></div>          
        </div>
    </div>
    <form action="<?php echo base_url('admin/users/media/'.$user_id) ?>" method="POST" enctype="multipart/form-data" >

        <div class="row" style="margin-top: 5px;">
            <div class="col-xs-12 pd-l-0">
                <div class="col-xs-2">
                    <select name="type" class="form-control" onchange="handleChangeMediaType(this.value)">
                        <option value="audio">Audio</option>
                        <option value="video" <?php if($this->input->post('type')=="video") echo 'selected'; ?>>Video</option>
                    </select>
                </div>
                <div class="col-xs-4" id="media_area">
                    <?php if($this->input->post('type')=="video"){ ?>
                    <input type="text" name="video" class="form-control" id="video" placeholder="Enter video link here" value="<?php echo set_value("video"); ?>">
                    <?php }else{ ?>
                    <input type="file" name="audio_file" class="form-control" id="audio">
                    <?php } ?>
                </div>
                <div class="col-xs-4">
                    <input type="text" name="name" class="form-control" placeholder="Enter media description" value="<?php echo set_value("name"); ?>">                 
                </div>
                <div class="col-xs-2">
                 <button value="submit" name="submit" class="btn btn-primary btn-md pull-right"><li class="fa fa-save"></li></button>
             </div>                
         </div>
     </div>
     <div class="row">
        <div class="col-xs-12">
            <p class="info">File format are mp3, ogg - File size must less than 20MB</p>            
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
        echo '<th style="width: 70px !important">Actions</th>';
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
                echo '<td>';
                if($item->type=="video"){ echo '<a href="'.$item->link.'" target="_blank">'.$item->link.' <button class="btn btn-default btn-sm"><li class="fa fa-video-camera"></li></button></a> '; }else {echo '<audio controls><source src="'.base_url().'public/upload/media/'.$item->link.'" type="audio/ogg"></audio>'; }
                echo '</td>';
                echo '<td>'.$item->created_date.'</td>';
                echo '<td>';
                echo '<a href="'.base_url("admin/").'users/delete_media/'.$item->id.'" style="color:#fff" onclick="return confirm(\'Are you sure want to delete ?\')"><button title="Click to delete" class="btn btn-sm btn-danger"><li class="fa fa-trash"></li></button></a>';               
                ?>
                <?php
                echo '</td>';
                echo '</tr>';
            }
        }
        echo '</tbody>';
        echo '</table>';
        ?>
    </div>
</div>
</div>