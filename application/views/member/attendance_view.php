<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include "header_view.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center">ATTENDANCE</h4>
            <div class="list-group">
                <a href="#" class="list-group-item active">
                GROUP OF COURSES LEARNED
                </a>
                <?php foreach($items as $item)
                { ?>
                    <a href="calendar?course_id=<?php echo $item->course_id; ?>" class="list-group-item"><?php echo $item->course_name.' - '.$item->start_date; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>