
<?php include "header_view.php"; ?>
<link rel='stylesheet' href="<?php echo public_helper('fullcalendar/fullcalendar.min.css'); ?>" />
<link href="<?php echo public_helper('fullcalendar/fullcalendar.print.css'); ?>" rel='stylesheet' media='print' />
<script src="<?php echo public_helper("fullcalendar/moment.min.js"); ?>"></script>
<script src="<?php echo public_helper("fullcalendar/jquery-ui.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo public_helper('fullcalendar/fullcalendar.min.js'); ?>" /></script>
<script type="text/javascript">
	$(document).ready(function() {

	var zone = "05:30";  //Change this to your timezone

	$.ajax({

		url: '../../admin/calendar/process',
    type: 'POST', // Send post data
    data: 'type=fetch&user_name=<?php echo $user_name; ?>&course_id=<?php echo $course_id; ?>',
    async: false,
    success: function(s){
    	json_events = s;
    }
});


	var currentMousePos = {
		x: -1,
		y: -1
	};
	jQuery(document).on("mousemove", function (event) {
		currentMousePos.x = event.pageX;
		currentMousePos.y = event.pageY;
	});

	/* initialize the external events
	-----------------------------------------------------------------*/

	$('#external-events .fc-event').each(function() {

		// store data so the calendar knows to render an event upon drop
		$(this).data('event', {
			title: $.trim($(this).text()), // use the element's text as the event title
			stick: true, // maintain when user navigates (see docs on the renderEvent method),
			color: $(this).data('color')
		});

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});

	});


	/* initialize the calendar
	-----------------------------------------------------------------*/

	$('#calendar').fullCalendar({
		events: JSON.parse(json_events),
		//events: [{"id":"14","title":"New Event","start":"2015-01-24T16:00:00+04:00","allDay":false}],
		utc: true,
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: true,
		droppable: true, 
		slotDuration: '00:30:00',
		allDay: false,
		eventReceive: function(event){
			var title = event.title;
			var start = event.start.format("YYYY-MM-DD[T]HH:mm:SS");
			var color = event.color;
			$.ajax({
				url: 'process',
				data: 'type=new&title='+title+'&startdate='+start+'&zone='+zone+'&color='+color+'&user_name=<?php echo $user_name; ?>&course_id=<?php echo $course_id; ?>',
				type: 'POST',
				dataType: 'json',
				success: function(response){
					event.id = response.eventid;
					$('#calendar').fullCalendar('updateEvent',event);
				},
				error: function(e){
					console.log(e.responseText);

				}
			});
			$('#calendar').fullCalendar('updateEvent',event);
			console.log(event);
		},
		eventDrop: function(event, delta, revertFunc) {
			var title = event.title;
			var start = event.start.format();
			var end = (event.end == null) ? start : event.end.format();
			$.ajax({
				url: 'process',
				data: 'type=resetdate&title='+title+'&start='+start+'&end='+end+'&eventid='+event.id,
				type: 'POST',
				dataType: 'json',
				success: function(response){
					if(response.status != 'success')		    				
						revertFunc();
				},
				error: function(e){		    			
					revertFunc();
					alert('Error processing your request: '+e.responseText);
				}
			});
		},
		eventClick: function(event, jsEvent, view) {
			console.log(event.id);
			var title = prompt('Event Title:', event.title, { buttons: { Ok: true, Cancel: false} });
			if (title){
				event.title = title;
				console.log('type=changetitle&title='+title+'&eventid='+event.id);
				$.ajax({
					url: 'process',
					data: 'type=changetitle&title='+title+'&eventid='+event.id,
					type: 'POST',
					dataType: 'json',
					success: function(response){	
						if(response.status == 'success')			    			
							$('#calendar').fullCalendar('updateEvent',event);
					},
					error: function(e){
						alert('Error processing your request: '+e.responseText);
					}
				});
			}
		},
		eventResize: function(event, delta, revertFunc) {
			console.log(event);
			var title = event.title;
			var end = event.end.format();
			var start = event.start.format();
			var color = event.color;
			$.ajax({
				url: 'process',
				data: 'type=resetdate&title='+title+'&start='+start+'&end='+end+'&eventid='+event.id+'&color='+color,
				type: 'POST',
				dataType: 'json',
				success: function(response){
					if(response.status != 'success')		    				
						revertFunc();
				},
				error: function(e){		    			
					revertFunc();
					alert('Error processing your request: '+e.responseText);
				}
			});
		},
		eventDragStop: function (event, jsEvent, ui, view) {
			if (isElemOverDiv()) {
				var con = confirm('Are you sure to delete this event permanently?');
				if(con == true) {
					$.ajax({
						url: 'process',
						data: 'type=remove&eventid='+event.id,
						type: 'POST',
						dataType: 'json',
						success: function(response){
							console.log(response);
							if(response.status == 'success'){
								$('#calendar').fullCalendar('removeEvents');
								getFreshEvents();
							}
						},
						error: function(e){	
							alert('Error processing your request: '+e.responseText);
						}
					});
				}   
			}
		}
	});

	$('#calendar').fullCalendar('gotoDate', JSON.parse(json_events)[0].start);

	function getFreshEvents(){
		$.ajax({
			url: 'process',
        type: 'POST', // Send post data
        data: 'type=fetch&user_name=<?php echo $user_name; ?>&course_id=<?php echo $course_id ?>',
        async: false,
        success: function(s){
        	freshevents = s;
        }
    });
		$('#calendar').fullCalendar('addEventSource', JSON.parse(freshevents));
	}


	function isElemOverDiv() {
		var trashEl = jQuery('#trash');

		var ofs = trashEl.offset();

		var x1 = ofs.left;
		var x2 = ofs.left + trashEl.outerWidth(true);
		var y1 = ofs.top;
		var y2 = ofs.top + trashEl.outerHeight(true);

		if (currentMousePos.x >= x1 && currentMousePos.x <= x2 &&
			currentMousePos.y >= y1 && currentMousePos.y <= y2) {
			return true;
	}
	return false;
}

});
</script>
<div id='wrap' class="container">
	<div >	
		<div class="list-group">
			<a href="#" class="list-group-item active text-center">
			ATTENDANCE STATUS
			</a>
			<a href="#" class="list-group-item">Name : <?php echo $full_name; ?></a>
			<a href="#" class="list-group-item">Group : <?php echo $course->name; ?></a>
			<a href="#" class="list-group-item">Starting date : <?php echo $course->start_date; ?></a>
			<a href="#" class="list-group-item">Total day : <?php echo $course->total_day; ?></a>
			<a href="#" class="list-group-item">Day spent : <?php echo $days_spent; ?> - Day remaining : <?php echo $days_remaining; ?></a>	
		</div>
	</div>
	
	<div id='calendar'></div>
</div>
<style>

	#external-events {
		float: left;
		width: 190px;
		padding: 0 10px;
		border: 1px solid #ccc;
		background: #eee;
		text-align: left;
	}

	#external-events h4 {
		font-size: 16px;
		margin-top: 0;
		padding-top: 1em;
		text-align: center;
	}

	#external-events .fc-event {
		margin: 10px 0;
		cursor: pointer;
	}

	#external-events p {
		margin: 1.5em 0;
		font-size: 11px;
		color: #666;
	}

	#external-events p input {
		margin: 0;
		vertical-align: middle;
	}


</style>