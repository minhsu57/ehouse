<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include "header_view.php"; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="text-center" style="color: #286090">PROFILE</h3>
			<div class="list-group">
				<a href="#" class="list-group-item active">
				STUDENT INFORMATION
				</a>
				<a href="#" class="list-group-item">User name : <?php echo $item->username; ?></a>
				<a href="#" class="list-group-item">Last name : <?php echo $item->last_name; ?></a>
				<a href="#" class="list-group-item">Fist name : <?php echo $item->first_name; ?></a>
				<a href="#" class="list-group-item">Email : <?php echo $item->email; ?></a>
				<a href="#" class="list-group-item">Phone : <?php echo $item->phone; ?></a>
				<a href="#" class="list-group-item">Birth day : <?php echo $item->birth_day; ?></a>
				<a href="#" class="list-group-item">Address : <?php echo $item->address; ?></a>
			</div>
			<div style="clear: both;"></div>
			<div class="alert alert-info">PROFILE</div>
			<div class="pd-lr-5"><?php echo $item->profile; ?></div>
		</div>
	</div>
</div>