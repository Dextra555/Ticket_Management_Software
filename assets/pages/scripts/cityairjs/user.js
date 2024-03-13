var save_user = '../user/save_user_details',
	create_new_role = '../user/create_new_role',
	clicked_user_delete_action = '../user/clicked_user_delete_action',
	clicked_user_password_updations = '../user/clicked_user_password_updations',
	view_user_details = '../user/clicked_view_edit_user_details',
	update_user_details = '../user/clicked_user_details_updations';
	clicked_role_delete_action = '../user/clicked_role_delete_action';
	clicked_edit_role_details = '../user/clicked_edit_role_details';
	update_edit_role_details = '../user/update_edit_role_details';
	clicked_role_give_permission = '../user/clicked_role_give_permission';
	clicked_role_permission_edit = '../user/clicked_role_permission_edit';
	get_edit_permissions = '../user/get_edit_permissions';
	check_name = '../user/check_name';
	
$("input[name=name]").keyup(function(){
    	var regex = /^[0-9a-zA-Z\-\s]+$/;
       // this.value = this.value.replace(/\D/g,'');
       var name = this.value;
       if(regex.test(name)== false)
	{
          this.value = "";
       }

});
$("input[name=company]").keyup(function(){
    	var regex = /^[0-9a-zA-Z\-\s]+$/;
       // this.value = this.value.replace(/\D/g,'');
       var company = this.value;
       if(regex.test(company)== false)
	{
          this.value = "";
       }

});
$("input[name=mobile]").keyup(function(){
        this.value = this.value.replace(/\D/g,'');
});
	
$("input[name=name]").change(function(){
		var name = $('input[name=name]').val();
		 var fd = new FormData();
		fd.append('name', name);
		$.ajax({
				  url: check_name,
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
								
							 	alert('Name is Already Exists!');
							 	$('input[name=name]').val('');
							 	$('input[name=name]').focus();
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
// For save the user details to the data base:
$('#save_user').click(function()
	{

	var name = $("input[name=name]").val();
	var user_name = $("input[name=uname]").val();
	var user_pass = $("input[name=pass]").val();
	var user_repass = $("input[name=repass]").val();
	var user_email =  $("input[name=uname]").val();
	var mobile = $('input[name=mobile]').val();
	var company = $('input[name=company]').val();
	var address = $('textarea[name=address]').val();
	var notes = $('textarea[name=notes]').val();
	var user_role = $('select[name=role]').val();
	var regex = /^[0-9a-zA-Z\_\s]+$/;
	var pattern = new RegExp("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$");
	var result = pattern .test(user_email);
	if(name == '')
	{
		alert('Enter User Full Name!')
		 $('input[name=name]').focus();
	}
	else if(regex.test(name)== false)
	{
		alert('Full Name is not valid!')
		 $('input[name=name]').focus();
	}
	else if(user_name == '')
	{
		alert('Enter User Name / Email!')
		 $('input[name=uname]').focus();
	}
	else if ((user_name != '') && (!result))
	{
		alert('Email Id is not valid!')
		$('input[name=uname]').focus();
	}
	else if(user_pass == '')
	{
		alert('Password is empty!')
		$('input[name=pass]').focus();
	}
	else if(user_pass.length<5)
	{
		alert('Password minimum length is 5!')
		$('input[name=pass]').focus();
	}
	else if(user_repass == '')
	{
		alert('Confirm password is empty!')
		$('input[name=repass]').focus();
	}
	else if(user_pass != user_repass)
	{
		alert('Password Missmatched!')
		$('input[name=pass]').val('').focus();
		$('input[name=repass]').val('');
	}

	else if(mobile == '')
		{
			alert( "Enter Mobile Number!" );
			$('input[name=mobile]').focus();
		}
	else if(!/^[\+]?([\d]{9}|0)?([\d]{10}|0)?$/.test(mobile))
	{
		alert( "Mobile Number should be 9 or 10 digits Only!" );
		$('input[name=mobile]').focus();
	}

	else if(company == '')
	{
		alert( "Enter user company!" );
		$('input[name=company]').focus();
	}
	else if(user_role == '')
	{
		alert('Role is empty!')
		$('select[name="role"]').focus();
	}
	else if(address == '')
	{
		alert('Enter user address!')
		$('textarea[name="address"]').focus();
	}
	else
	{
		$.LoadingOverlay("show");
		var data = 
				{
					  user_fname: name,
					  user_name: user_name,
					  user_pass: user_pass,
					  user_mobile: mobile,
					  user_email: user_email,
					  user_company: company,
					  user_address: address,
					  user_notes: notes,
					  user_role: user_role,
				};  
		   var fd = new FormData();
			   fd.append('user_name', data.user_name);
			   fd.append('user_pass', data.user_pass);
			   fd.append('user_fname', data.user_fname);
			   fd.append('user_mobile', data.user_mobile);
			   fd.append('user_email', data.user_email);
			   fd.append('user_role', data.user_role); 
			   fd.append('user_company', data.user_company); 
			   fd.append('user_address', data.user_address); 
			   fd.append('user_notes', data.user_notes); 
			$.ajax({
					  url: save_user,
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
									var add_new_row =  $('#user_det tbody');
									/*var htm  = '<tr class="odd gradeX">';
										htm += '<td>'+obj[i].id+'</td><td>'+obj[i].user_name+'</td><td>'+obj[i].user_fname+'</td><td>'+obj[i].user_email+'</td><span class="label label-sm label-success"> Active </span>';
										htm += '<td class="align_changepass"><span class="label label-sm label-success"> Active </span></td><td>'+obj[i].user_role+'</td>';
										htm += '<td class="align_changepass"><a href="#" class="Edit btn btn-sm btn-outline grey-salsa" title="change password"><i class="fa fa-exchange" align="center"></i></a></td>';
										htm += '<td class="align_changepass"><a href="#" class="Edit btn btn-sm btn-outline grey-salsa" title="view"><i class="fa fa-eye"></i></div></a><a href="#" class="Edit btn btn-sm btn-outline grey-salsa" title="edit"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-sm btn-outline grey-salsa user_delete" title="delete" data-id ='+obj[i].id+'><i class="fa fa-trash-o"></i></a></td>';
										htm += '</tr>';
										add_new_row.append(htm);*/
								}
							$.LoadingOverlay("hide");
								swal({
										  title: "New User Created Successfully!",
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

//User going to be deleted here:

		$('body').delegate('.user_delete ', 'click', function(e) 
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
					  url: clicked_user_delete_action,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						     console.log(res);
						   
							 $('a[data-id='+get_cliked_id_value+']').parent().parent().hide();
							 //alert("User Deleted Successfully!");
							 $.LoadingOverlay("hide");
							 swal({
									  title: "User Deleted Successfully!",
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

// Change password here to check

			$('.change_password ').click(function()
			{	
			var name = $(this).data("name");
			var fname = $(this).data("fname");
			
			var get_changepwd_id_value = $(this).data("id");
			$("input[name=user_name]").val(name);		
			$("input[name=full_name]").val(fname);	
			$("input[name=id_value_stored]").val(get_changepwd_id_value);	
		});
// Change the password here
		$('#change_user_password').click(function()
		{
			var user_name = $("input[name=user_name]").val();		
			var full_name = $("input[name=full_name]").val();	
			var id_value_stored = $("input[name=id_value_stored]").val();	
			var change_password_user = $("input[name=change_password_user]").val();
			var change_repass_user = $("input[name=change_repass_user]").val();

				if(change_password_user == '' )
				{
					alert('Password field is empty!')
					 $("input[name=change_password_user]").focus();	
				}
				else if(change_repass_user == '')
				{
					alert('Re-Password is empty!')
					$("input[name=change_repass_user]").focus();
				}
				else if(change_password_user != change_repass_user)
				{
					alert('Password Mismatched!')
					$("input[name=change_password_user]").focus();
				}
				else if(change_password_user.length<5)
				{
					alert('Password minimum length is 5!')
					$('input[name=change_password_user]').focus();		
				}
				else
				{
					$.LoadingOverlay("show");
		   var data = 
					{
						user_name: user_name,
						full_name: full_name,
						id_value_stored:id_value_stored,
						change_password_user:change_password_user						
					};

		   var fd = new FormData();
			   fd.append('user_name', data.user_name);
			   fd.append('full_name', data.full_name);
			   fd.append('id_value_stored', data.id_value_stored);
			   fd.append('change_password_user', data.change_password_user);			   

			$.ajax({
					  url: clicked_user_password_updations,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						     console.log(res);
						     alert('Password is changed Successfully!')
						     $('#changepassword').modal('hide');
						     $.LoadingOverlay("hide");
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

$('body').delegate('.view_user_details ', 'click', function(e) 
	{	
		
		$.LoadingOverlay("show");
		var get_cliked_id_value = $(this).data("id");
		// alert(get_cliked_id_value)
		var fd = new FormData();
			     fd.append('id', get_cliked_id_value);
		$.ajax({
				  url: view_user_details,
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
									$("input[name=vid_value_stored]").val(obj[i].user_id);
									$("input[name=vuname]").val(obj[i].username);
									$("input[name=vname]").val(obj[i].name);
									$("input[name=vmobile]").val(obj[i].mobile);
									$("input[name=vcompany]").val(obj[i].company);
									$("input[name=vuemail]").val(obj[i].email);
									$("input[name=vrole]").val(obj[i].role_name);
									$("textarea[name=vaddress]").val(obj[i].address);
									$("textarea[name=vnotes]").val(obj[i].notes);
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
$('body').delegate('.edit_user_details ', 'click', function(e) 
	{
		event.preventDefault();
		var get_cliked_id_value = $(this).data("id");
		$.LoadingOverlay("show");
		var fd = new FormData();
			     fd.append('id', get_cliked_id_value);
		$.ajax({
				  url: view_user_details,
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
								$("input[name=edit_id_value]").val(obj[i].user_id);
								$("input[name=euname]").val(obj[i].username);
								$("input[name=ename]").val(obj[i].name);
								$("input[name=emobile]").val(obj[i].mobile);
								$("input[name=ecompany]").val(obj[i].company);
								$("input[name=euemail]").val(obj[i].email);
								$("select option").each(function(){
								if ($(this).val() == obj[i].role)
									$(this).attr("selected","selected");
								});
								$("textarea[name=eaddress]").val(obj[i].address);
								$("textarea[name=enotes]").val(obj[i].notes);
								
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
$("input[name=ename]").change(function(){
		var name = $('input[name=ename]').val();
		 var fd = new FormData();
		fd.append('name', name);
		$.ajax({
				  url: check_name,
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
								
							 	alert('Name is Already Exists!');
							 	$('input[name=ename]').val('');
							 	$('input[name=ename]').focus();
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
	$('#update_user_details').click(function(event)
	{
	var edit_id_value = $("input[name=edit_id_value]").val();
	var name = $("input[name=ename]").val();
	var user_name = $("input[name=euname]").val();
	var user_email = $("input[name=euname]").val();
	var mobile = $('input[name=emobile]').val();
	var company = $('input[name=ecompany]').val();
	var address = $('textarea[name=eaddress]').val();
	var notes = $('textarea[name=enotes]').val();
	var user_role = $('select[name=erole]').val();
	var regex = /^[0-9a-zA-Z\_\s]+$/;
	var pattern = new RegExp("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$");
	var result = pattern .test(user_email);
	if(name == '')
	{
		alert('Enter User Full Name!')
		 $('input[name=ename]').focus();
	}
	else if(regex.test(name)== false)
	{
		alert('Full Name is not valid!')
		 $('input[name=ename]').focus();
	}
	else if(user_name == '')
	{
		alert('Enter User Name / Email!')
		 $('input[name=euname]').focus();
	}
	else if ((user_name != '') && (!result))
	{
		alert('Email is not valid!')
		$('input[name=euname]').focus();
	}
	
	else if(mobile == '')
		{
			alert( "Enter Mobile Number!" );
			$('input[name=emobile]').focus();
		}
	else if(!/^[\+]?([\d]{9}|0)?([\d]{10}|0)?$/.test(mobile))
	{
		alert( "Mobile Number should be 9 or 10 digits Only!" );
		$('input[name=emobile]').focus();
	}
	else if(user_email == '')
	{
		alert('Email is empty!')
		$('input[name=euemail]').focus();
	} 


	else if(company == '')
	{
		alert( "Enter user company!" );
		$('input[name=ecompany]').focus();
	}
	else if(user_role == '')
	{
		alert('Role is empty!')
		$('select[name="erole"]').focus();
	}
	else if(address == '')
	{
		alert('Enter user address!')
		$('textarea[name="eaddress"]').focus();
	}
	else
	{
		$.LoadingOverlay("show");
		var data = 
				{
				      edit_id_value:edit_id_value,
					  user_fname: name,
					  user_name: user_name,
					  user_mobile: mobile,
					  user_email: user_email,
					  user_company: company,
					  user_address: address,
					  user_notes: notes,
					  user_role: user_role,
				};  
		   var fd = new FormData();
			   fd.append('edit_id_value', data.edit_id_value);
			   fd.append('user_name', data.user_name);
			   fd.append('user_fname', data.user_fname);
			   fd.append('user_mobile', data.user_mobile);
			   fd.append('user_email', data.user_email);
			   fd.append('user_role', data.user_role); 
			   fd.append('user_company', data.user_company); 
			   fd.append('user_address', data.user_address); 
			   fd.append('user_notes', data.user_notes); 

			$.ajax({
					  url: update_user_details,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						     console.log(res);
						     var obj = JSON.parse(res);		
								$.LoadingOverlay("hide");						
								//alert('User Information Updated Successfully!')
								swal({
										  title: "User Information Updated Successfully!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										 
									});
								$('#edit_user_details').modal('hide');
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

