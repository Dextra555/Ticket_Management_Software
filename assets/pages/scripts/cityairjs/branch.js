var save_branch = '../branch/save_branch_details',
    save_location= '../admin/save_location_details',
	create_new_role = '../branch/create_new_role',
	clicked_branch_delete_action = '../branch/clicked_branch_delete_action',
	clicked_branch_password_updations = '../branch/clicked_branch_password_updations',
	view_branch_details = '../branch/clicked_view_edit_branch_details',
	update_branch_details = '../branch/clicked_branch_details_updations';
	clicked_role_delete_action = '../branch/clicked_role_delete_action';
	clicked_edit_role_details = '../branch/clicked_edit_role_details';
	update_edit_role_details = '../branch/update_edit_role_details';
	clicked_role_give_permission = '../branch/clicked_role_give_permission';
	clicked_role_permission_edit = '../branch/clicked_role_permission_edit';
	get_edit_permissions = '../branch/get_edit_permissions';
	check_branch = '../branch/check_branch';
$("input[name=branch_name]").keyup(function(){
    	var regex = /^[0-9a-zA-Z\-\s]+$/;
       // this.value = this.value.replace(/\D/g,'');
       var branch_name = this.value;
       if(regex.test(branch_name)== false)
	{
          this.value = "";
       }

});
// For save the branch details to the data base:

$("input[name=branch_name]").change(function(){
		var branch = $('input[name=branch_name]').val();
		 var fd = new FormData();
		fd.append('branch_name', branch);
		$.ajax({
				  url: check_branch,
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
								
							 	alert('Branch is Already Exists!');
							 	$('input[name=branch_name]').val('');
							 	$('input[name=branch_name]').focus();
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
	
$('#save_branch').click(function()
	{
	var branch_name = $("input[name=branch_name]").val();
	var branch_address = $('textarea[name=branch_address]').val();
	var branch_master = $("select[name=branch_master]").val();

	if(branch_name == '')
	{
		alert('Enter Branch Name!')
		 $('input[name=branch_name]').focus();
	}

	else
	{
		$.LoadingOverlay("show");
		var data = 
				{
					  branch_name: branch_name,
					  branch_address: branch_address,
					  branch_master: branch_master,
				};  
		   var fd = new FormData();
			   fd.append('branch_name', data.branch_name);
			   fd.append('branch_address', data.branch_address);
			   fd.append('branch_master', data.branch_master);

			$.ajax({
					  url: save_branch,
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
									var add_new_row =  $('#branch_det tbody');

								}
							$.LoadingOverlay("hide");
								swal({
										  title: "New branch Created Successfully!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										 
									});
							 //alert("Information is Updated!");
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



//save Location





//branch going to be deleted here:

		$('body').delegate('.branch_delete ', 'click', function(e) 
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
					  url: clicked_branch_delete_action,
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
									  title: "branch Deleted Successfully!",
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



$('body').delegate('.view_branch_details ', 'click', function(e) 
	{	
		
		$.LoadingOverlay("show");
		var get_cliked_id_value = $(this).data("id");
		// alert(get_cliked_id_value)
		var fd = new FormData();
			     fd.append('id', get_cliked_id_value);
		$.ajax({
				  url: view_branch_details,
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
									$("input[name=vbranch_name]").val(obj[i].branch_name);
									$("textarea[name=vbranch_address]").val(obj[i].address);
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
	
$("input[name=ebranch_name]").change(function(){
		var branch = $('input[name=ebranch_name]').val();
		 var fd = new FormData();
		fd.append('branch_name', branch);
		$.ajax({
				  url: check_branch,
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
								
							 	alert('Branch is Already Exists!');
							 	$('input[name=ebranch_name]').val('');
							 	$('input[name=ebranch_name]').focus();
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
$('body').delegate('.edit_branch_details ', 'click', function(e) 
	{
		event.preventDefault();
		var get_cliked_id_value = $(this).data("id");
		$.LoadingOverlay("show");
		var fd = new FormData();
			     fd.append('id', get_cliked_id_value);
		$.ajax({
				  url: view_branch_details,
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
								$("input[name=edit_branch_id]").val(obj[i].branch_id);
								$("input[name=ebranch_name]").val(obj[i].branch_name);
								$("textarea[name= ebranch_address]").val(obj[i].address);
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

	$('#update_branch_details').click(function(event)
	{
	var edit_branch_id = $("input[name=edit_branch_id]").val();
	var branch_name = $("input[name=ebranch_name]").val();
	var branch_address = $('textarea[name=ebranch_address]').val();
	var branch_master = $("select[name=ebranch_master]").val();

	if(branch_name == '')
	{
		alert('Enter Branch Name!')
		 $('input[name=branch_name]').focus();
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
					  edit_branch_id:edit_branch_id,
					  branch_name: branch_name,
					  branch_address: branch_address,
					  branch_master: branch_master,
				};  
		   var fd = new FormData();
			   fd.append('edit_branch_id', data.edit_branch_id);
			   fd.append('branch_name', data.branch_name);
			   fd.append('branch_address', data.branch_address);
			   fd.append('branch_master', data.branch_master);

			$.ajax({
					  url: update_branch_details,
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
										  title: "branch Information Updated Successfully!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										 
									});
								$('#edit_branch_details').modal('hide');
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

