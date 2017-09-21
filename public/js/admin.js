function create_calendar(){
	var user_name = $('#user_name').val();
	var course_id = $('#course_id').val();
	if(user_name == "0"){
		BootstrapDialog.show({
            message: 'Please select Student !',
            type: BootstrapDialog.TYPE_WARNING,
        });
	}else if(course_id == "0"){
		BootstrapDialog.show({
            message: 'Please select Course Name',
            type: BootstrapDialog.TYPE_WARNING,
        });
	}else{
		window.location.replace(base_url+'admin/calendar/update?user_name='+user_name+'&course_id='+course_id);
	}
	
}

function handleChangeMediaType(value){
	if(value == 'audio'){
		$('#media_area').html('<input type="file" name="audio_file" class="form-control" id="audio">');	
	}else{
		$('#media_area').html('<input type="text" name="video" class="form-control" id="video" placeholder="Enter video link here">');		
	}                    

}