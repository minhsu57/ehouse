<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include "header_view.php"; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="text-center" style="color: #286090">DOCUMENTS</h3>
			<div class="row">
				<div class="col-lg-12" style="margin-top: 10px;">
					<?php
					echo '<table class="table table-hover table-bordered table-condensed">';
					echo '<thead>';
					echo '<tr>';
					echo '<th>Name</th>';
					echo '<th>link</th>';
					echo '</tr>';
					echo '</thead>';
					echo '<tbody>';
					if(!empty($items))
					{
						foreach($items as $key => $item)
						{
							echo '<tr>';
							echo '<td>'.$item->name.'</td>';                    
							echo '<td>';
							if($item->type=="video"){ echo '<a href="'.$item->link.'" target="_blank">'.$item->link.' <button class="btn btn-default btn-sm"><li class="fa fa-video-camera"></li></button></a> '; }else {echo '<audio controls><source src="'.base_url().'public/upload/media/'.$item->link.'" type="audio/ogg"></audio>'; }
							echo '</td>';
							echo '</tr>';
						}
					}
					echo '</tbody>';
					echo '</table>';
					?>
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>