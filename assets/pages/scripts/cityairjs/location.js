var save_location= '../admin/save_location_details',
	create_new_role = '../admin/create_new_role',
	clicked_location_delete_action = '../admin/clicked_location_delete_action',
	clicked_location_password_updations = '../admin/clicked_location_password_updations',
	view_location_details = '../admin/clicked_view_edit_location_details',
	update_branch_details = '../admin/clicked_location_details_updations';
	clicked_role_delete_action = '../admin/clicked_role_delete_action';
	clicked_edit_role_details = '../admin/clicked_edit_role_details';
	update_edit_role_details = '../admin/update_edit_role_details';
	clicked_role_give_permission = '../admin/clicked_role_give_permission';
	clicked_role_permission_edit = '../admin/clicked_role_permission_edit';
	get_edit_permissions = '../admin/get_edit_permissions';
	check_location = '../admin/check_location';
$("input[name=location]").keyup(function(){
    	var regex = /^[0-9a-zA-Z\-\s]+$/;
       // this.value = this.value.replace(/\D/g,'');
       var location = this.value;
       if(regex.test(location)== false)
	{
          this.value = "";
       }

});
$("input[name=location]").change(function(){
    var location = $('input[name=location]').val();
     var fd = new FormData();
    fd.append('location', location);
    $.ajax({
              url: check_location,
              type: 'POST',
              data: fd,
              contentType: false,
              processData: false,
              success: function(res) 
                   {
                        console.log(res);
                        var obj = JSON.parse(res);
                        var available_check = obj.length;
                         if(available_check > 0)
                         {
                            
                             alert('location is Already Exists!');
                             $('input[name=location]').val('');
                             $('input[name=location_id]').focus();
                         }
                         else
                         {

                         }
                         //  $('#create_new_customer').modal('hide');
                                                 
                      },
          error: function(err, ex) 
                {
                    alert('Unable to Save details! Please try again later.');
                    console.log(err.responseText, ex.message);
                }
            });
});
$('#save_location').click(function()
{
    alert('Please');

var location = $("input[name=location]").val();
var location_id = $('textarea[name=location_id]').val();

if(location == '')
{
    alert('Enter Location Name!')
     $('input[name=location]').focus();
}

else
{
    $.LoadingOverlay("show");
    var data = 
            {
                location: location,
                location_id: location_id,
            };  
       var fd = new FormData();
           fd.append('location', data.location);
           fd.append('location_id', data.location_id);

        $.ajax({
                  url: save_location,
                  type: 'POST',
                  data: fd,
                  contentType: false,
                  processData: false,
                  success: function(res) 
                      {
                         console.log(res);
                         var obj = JSON.parse(res);
                         for (var i=0; i<obj.length; i++)
                            {
                                var add_new_row =  $('#location_det tbody');

                            }
                        $.LoadingOverlay("hide");
                            swal({
                                      title: "New Location Created Successfully!",
                                      icon: "success",
                                      button: "Ok!",
                                     
                                });
                         $('#static').modal('hide');
                         window.location.reload(true);
                      },
          error: function(err, ex) 
                {
                    alert('Unable to Save details! Please try again later.');
                    console.log(err.responseText, ex.message);
                }
           });
    }

});

$('body').delegate('.location_delete ', 'click', function(e) 
{
// alert($(this).attr("data-id"))
var result = confirm("Are you sure you Want to delete?");
  if (result) {
var get_cliked_id_value = $(this).data("id");
$.LoadingOverlay("show");
var data = 
            {
                get_cliked_id_value: get_cliked_id_value	
            };
   var fd = new FormData();
       fd.append('get_cliked_id_value', data.get_cliked_id_value);

    $.ajax({
              url: clicked_location_delete_action,
              type: 'POST',
              data: fd,
              contentType: false,
              processData: false,
              success: function(res) 
                  {
                     console.log(res);
                   
                     $('a[data-id='+get_cliked_id_value+']').parent().parent().hide();
                     //alert("branch Deleted Successfully!");
                     $.LoadingOverlay("hide");
                     swal({
                              title: "location Deleted Successfully!",
                              //text: "You clicked the button!",
                              icon: "error",
                              button: "Ok!",
                          });

                     window.location.reload(true);
                },
      error: function(err, ex) 
            {
                alert('Unable to Save details! Please try again later.');
                console.log(err.responseText, ex.message);
            }
       });
}

});
$('body').delegate('.view_location_details ', 'click', function(e) 
	{	
		
		$.LoadingOverlay("show");
		var get_cliked_id_value = $(this).data("id");
		// alert(get_cliked_id_value)
		var fd = new FormData();
			     fd.append('id', get_cliked_id_value);
		$.ajax({
				  url: view_location_details,
				  type: 'POST',
				  data: fd,
				  contentType: false,
				  processData: false,
				  success: function(res) 
					  {
					     console.log(res);
					     var obj = JSON.parse(res);
						 for (var i=0; i<obj.length; i++)
							{
									$("input[name=vlocation]").val(obj[i].location);
									$("textarea[name=vlocation_id]").val(obj[i].location_id);
									$("select option").each(function(){
									if ($(this).val() == obj[i].branch_master)
										$(this).attr("selected","selected");
							 		});
							 }
							$.LoadingOverlay("hide");
					  },
			  error: function(err, ex) 
					{
						alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
	});
    $("input[name=elocation]").change(function(){
		var location = $('input[name=elocation]').val();
		 var fd = new FormData();
		fd.append('location', location);
		$.ajax({
				  url: check_location,
				  type: 'POST',
				  data: fd,
				  contentType: false,
				  processData: false,
				  success: function(res) 
					   {
						    console.log(res);
							var obj = JSON.parse(res);
							var available_check = obj.length;
							 if(available_check > 0)
							 {
								
							 	alert('location is Already Exists!');
							 	$('input[name=elocation]').val('');
							 	$('input[name=elocation]').focus();
							 }
							 else
							 {

							 }
							 //  $('#create_new_customer').modal('hide');
 													
						  },
			  error: function(err, ex) 
					{
						alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
				});
	});	
    $('body').delegate('.edit_location_details ', 'click', function(e) 
	{
		event.preventDefault();
		var get_cliked_id_value = $(this).data("id");
		$.LoadingOverlay("show");
		var fd = new FormData();
			     fd.append('id', get_cliked_id_value);
		$.ajax({
				  url: view_location_details,
				  type:'POST',
				  data: fd,
				  contentType: false,
				  processData: false,
				  success: function(res) 
					  {
					     console.log(res);
					     var obj = JSON.parse(res);
						 for (var i=0; i<obj.length; i++)
							{
								$("input[name=edit_id]").val(obj[i].id);
								$("input[name=elocation]").val(obj[i].location);
								$("textarea[name= elocation_id]").val(obj[i].location_id);
								$("select option").each(function(){
								if ($(this).val() == obj[i].branch_master)
									$(this).attr("selected","selected");
								});
							}
								$.LoadingOverlay("hide");
					  },
			  error: function(err, ex) 
					{
						alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
	});

    $('#update_location_details').click(function(event)
	{
	var edit_id = $("input[name=edit_id]").val();
	var location = $("input[name=elocation]").val();
	var location_id = $('textarea[name=elocation_id]').val();
	//var branch_master = $("select[name=ebranch_master]").val();

	if(location == '')
	{
		alert('Enter lacation Name!')
		 $('input[name=location]').focus();
	}

/*	else if(branch_master == '')
	{
		alert('Branch Master is empty!')
		$('select[name="branch_master"]').focus();
	}
	else if(branch_address == '')
	{
		alert('Enter Branch Address!')
		$('textarea[name="branch_address"]').focus();
	} */
	else
	{
		$.LoadingOverlay("show");
		var data = 
				{
					  edit_id:edit_id,
					  location: lcation,
					  location_id: location,
					  //branch_master: branch_master,
				};  
		   var fd = new FormData();
			   fd.append('edit_id', data.edit_id);
			   fd.append('location', data.location);
			   fd.append('location_id', data.location_id);
			  // fd.append('branch_master', data.branch_master);

			$.ajax({
					  url: update_location_details,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						     console.log(res);
						     var obj = JSON.parse(res);		
								$.LoadingOverlay("hide");						
								//alert('branch Information Updated Successfully!')
								swal({
										  title: "location Information Updated Successfully!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										 
									});
								$('#edit_location_details').modal('hide');
								window.location.reload(true);
						},
			  error: function(err, ex) 
					{
						alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
		}
	});




