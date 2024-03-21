var create_new_status = '../status/create_new_status',
	clicked_status_delete_action = '../status/clicked_status_delete_action',
	clicked_status_view_action = '../status/clicked_status_view_edit_action',
	clicked_edit_status_action = '../status/clicked_status_view_edit_action',
	update_edit_status_details = '../status/update_edit_status_details';
	check_contact_number_validation = '../status/check_contact_number_validation';
	check_email_validation = '../status/check_email_validation';
	clicked_status_view_invoice_action = '../invoice/clicked_status_view_invoice_action';
	check_status_contact_number_validation = '../status/check_contact_number_validation';
$("input[name=status_name]").keyup(function(){
    	var regex = /^[0-9a-zA-Z\s]+$/;
       // this.value = this.value.replace(/\D/g,'');
       var status_name = this.value;
       if(regex.test(status_name)== false)
	{
          this.value = "";
       }

});
var status_creation = function() {

	var create_status = function() {

// For save the Vendor details to the database:
$('#new_status').click(function()
	{
	var status_name = $("input[name=status_name]").val();
	var status_access = $("#status_access").val();
		if(status_name == '')
		{
			alert( "Enter status Name!" );
			$('input[name=status_name]').focus();
		}
		else
		{
			$.LoadingOverlay("show");	  

		var data = 
				{
				  status_name: status_name,
				  status_access: status_access,
				};  
		   var fd = new FormData();
			   fd.append('status_name', data.status_name);
			   fd.append('status_access', data.status_access);
			$.ajax({
					  url: create_new_status,
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
									var add_new_row =  $('#sample_1 tbody');
									var htm = '<tr class="odd gradeX">';
										htm += '<td>'+obj[i].status_id+'</td>';
										htm += '<td>'+obj[i].status_name+'</td>';
										htm += '<td>'+obj[i].status_access+'</td>';
										htm += '<td class="align_change_status"><span class="label label-sm label-success"> Active </span></td>';
										htm += '<td><a href="#" data-target="#view_status_details" data-toggle="modal" data-id="'+obj[i].status_id+'" class="view_status_details btn btn-sm btn-outline grey-salsa" title="view"><i class="fa fa-eye"></i></div></a></i></a><a href="javascript:;" data-id="'+obj[i].status_id+'" class="delete_status_details btn btn-sm btn-outline grey-salsa" title="delete"><i class="fa fa-trash-o"></i></a></td>';
										htm += '</tr>';
									add_new_row.append(htm);
								}  
									$.LoadingOverlay("hide");	
							 	swal({
										  title: "status Created Successfully!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										  
									});
								$("#form_sample_2").trigger("reset");
 								
 								$('#create_new_status').modal('hide');
 								location.reload();

						  },
			  error: function(err, ex) 
					{
						alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
			}
	});

	$('body').delegate('.view_status_details ', 'click', function(e) 
	{
		$.LoadingOverlay("show");
		var get_cliked_id_value = $(this).data("id");
		
		var data = 
					{
						get_cliked_id_value: get_cliked_id_value	
					};
		   var fd = new FormData();
			   fd.append('get_cliked_id_value', data.get_cliked_id_value);

			$.ajax({
					  url: clicked_status_view_action,
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
								 $("input[name=view_status_name]").val(obj[i].name);
								 $("input[name=view_email]").val(obj[i].email);
								 $("textarea[name=view_status_address]").val(obj[i].address);
								 $("select[name=view_category_status]").val(obj[i].category_status);
								 $("input[name=view_contact_number]").val(obj[i].contact_number);
								 $("input[name=view_username]").val(obj[i].username);
								 $("input[name=view_password]").val(obj[i].password);
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

$('body').delegate('.view_status_details ', 'click', function(e) 
 {
  var get_cliked_id_value = $(this).data("id");
  // alert(get_cliked_id_value)
  $('#status_invoice_view tbody').empty();
  var data = 
     {
      get_cliked_id_value: get_cliked_id_value 
     };
     var fd = new FormData();
      fd.append('get_cliked_id_value', data.get_cliked_id_value);

   $.ajax({
       url: clicked_status_view_invoice_action,
       type: 'POST',
       data: fd,
       contentType: false,
       processData: false,
       success: function(res) 
      {
          console.log(res);          
          var obj = JSON.parse(res);
          if(obj.length > 0)
          {
           for (var i=0; i<obj.length; i++)
		        {
		         $('.table_hide').css('display','block');
		         var add_new_row =  $('#status_invoice_view tbody');
		         var htm = '<tr class="odd gradeX">';
		          htm += '<td>'+(i+1)+'</td>';
		          htm += '<td>'+obj[i].new_invoice_number+'</td>';
		          htm += '<td>'+obj[i].created_date+'</td>';
		          htm += '<td>'+obj[i].name+'</td>';
		          htm += '<td>'+obj[i].contact_no+'</td>';
		          htm += '<td>'+obj[i].service_date+'</td>';
		          htm += '<td>'+obj[i].service_by+'</td>';
		          htm += '<td>'+obj[i].total_amount+'</td>'; 
		          htm += '<td><a href="#" data-target="#view_invoice_details" data-toggle="modal" data-id="'+obj[i].id+'" class="view_invoice_details btn btn-sm btn-outline grey-salsa" title="view"><i class="fa fa-eye"></i></div></a></td>';
		          htm += '</tr>';
		         add_new_row.append(htm);
		        }
	       }
	       else
	       {
	        $('.table_hide').css('display','none');
	       }  

      },
     error: function(err, ex) 
     {
      alert('Unable to Save details! Please try again later.');
      console.log(err.responseText, ex.message);
     }
      });

 });

	$('body').delegate('.edit_status_details ', 'click', function(e) 
	{
		$.LoadingOverlay("show");
		var get_cliked_id_value = $(this).data("id");
		// alert(get_cliked_id_value)
		$("input[name=edit_status_id_value]").val(get_cliked_id_value);
		var data = 
				{
					get_cliked_id_value: get_cliked_id_value	
				};
		   var fd = new FormData();
			   fd.append('get_cliked_id_value', data.get_cliked_id_value);

			$.ajax({
					  url: clicked_edit_status_action,
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
								 $("input[name=edit_status_name]").val(obj[i].name);
								 $("input[name=edit_email]").val(obj[i].email);
								 $('textarea[name=edit_status_address]').val(obj[i].address);
								 $('select[name=edit_category_status]').val(obj[i].category_status);
								 $("input[name=edit_contact_number]").val(obj[i].contact_number);
								 $("select[name=edit_reminder_months]").val(obj[i].reminder_months);
								 $("textarea[name=edit_service_history]").val(obj[i].service_history);

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


	$('body').delegate('#update_status_details ', 'click', function(e) 
	{
		var edit_id_vlaue = $("input[name=edit_status_id_value]").val();
		
			var name = $("input[name=edit_status_name]").val();
			var email_id = $("input[name=edit_email]").val();
			var address = $("textarea[name=edit_status_address]").val();
			var category = $("select[name=edit_category_status]").val();
			var contact_number = $("input[name=edit_contact_number]").val();
			var reminder_months = $('select[name=edit_reminder_months]').val();
			var service_history = $("textarea[name=edit_service_history]").val();
		   	var pattern = new RegExp("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$");
			var result = pattern .test(email_id);
			
		if(name == '')
		{
			alert( "Enter status Name!" );
			$('input[name=status_name]').focus();
		}
		else if((email_id != '') && (!result))
		{
			alert( "Enter Correct E-mail Format!" );
			$('input[name=edit_email]').focus();
		}
		else if(contact_number == '')
		{
			alert( "Enter Contact Number!" );
			$('input[name=edit_contact_number]').focus();
		}

		else if(!/^([\d]{10})$/.test(contact_number) )
		{
			alert( "Contact Number Must be 10 Character Only!" );
			$('input[name=edit_contact_number]').focus();
		}
		else if(address == '')
		{
			alert( "Enter Address!" );
			$('textarea[name=edit_status_address]').focus();
		}
		else if(category == '')
		{
			alert( "Select Category of status!" );
			$("select[name=edit_category_status]").focus();
		}

		else if(reminder_months == '')
		{
			alert( "Select Remainder Months!" );
			$('select[name=edit_reminder_months]').focus();
		}
		else
		{
				$.LoadingOverlay("show");

			/*var contact_length = contact_number.length;
				if(contact_length == 10 )
				{
					contact_number = '+'+contact_number;
				}
				else if(contact_length == 8)
				{
					contact_number = '+65'+contact_number;
				}*/
		var data = 
				{
				  edit_id_vlaue:edit_id_vlaue,
				  name: name,
				  email_id: email_id,
				  address: address,
				  category_status: category,
				  contact_number: contact_number,
				  reminder_months: reminder_months,
				  service_history: service_history
				};  
		   var fd = new FormData();
			   fd.append('edit_id_vlaue', data.edit_id_vlaue);
			   fd.append('name', data.name);
			   fd.append('email', data.email_id);
			   fd.append('address', data.address);
			   fd.append('category_status', data.category_status);
			   fd.append('contact_number', data.contact_number);
			   fd.append('reminder_months', data.reminder_months);
			   fd.append('service_history', data.service_history); 
			$.ajax({
					  url: update_edit_status_details,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						     var obj = JSON.parse(res);
							 //console.log(res);
							 var table = $('#sample_1').DataTable();
                               table.clear();
							  //$('a[data-id='+edit_id_vlaue+']').parent().parent().hide();
							 for (var i=0; i<obj.length; i++)
								{
									//var add_new_row =  $('#sample_1 tbody');
									
									 
										
									/*var htm  = '<tr class="odd gradeX">';
										htm += '<td>'+obj[i].id+'</td>';
										htm += '<td>'+obj[i].name+'</td>';
										htm += '<td>'+obj[i].email+'</td>';
										htm += '<td>'+obj[i].address+'</td>';
										htm += '<td>'+obj[i].contact_number+'</td>';
										htm += '<td>'+obj[i].service_history+'</td>';
										htm += '<td><span class="label label-sm label-success"> Active </span></td>';
										htm += '<td><a href="../status/status_document_page" class="" title="upload documents"><div class="fa-item"><i class="fa fa-upload"></i></div></td>';
										htm += '<td><a href="#" data-target="#view_status_details" data-toggle="modal" data-id="'+obj[i].id+'" class="view_status_details btn btn-sm btn-outline grey-salsa" title="view"><i class="fa fa-eye"></i></div></a><a href="#" data-target="#edit_status_details" data-toggle="modal" data-id="'+obj[i].id+'" class="edit_status_details btn btn-sm btn-outline grey-salsa" title="edit"><i class="fa fa-edit"></i></a><a href="javascript:;" data-id='+obj[i].id+' class="delete_status_details btn btn-sm btn-outline grey-salsa" title="delete"><i class="fa fa-trash-o"></i></a></td>';
										htm += '</tr>';

									add_new_row.append(htm);*/
								table.row.add([obj[i].id,obj[i].name,obj[i].email,obj[i].address,obj[i].contact_number,obj[i].service_history,'<span class="label label-sm label-success"> Active </span>','<a href="../status/status_document_page" class="" title="upload documents"><div class="fa-item"><i class="fa fa-upload"></i></div>','<a href="#" data-target="#view_status_details" data-toggle="modal" data-id="'+obj[i].status_id+'" class="view_status_details btn btn-sm btn-outline grey-salsa" title="view"><i class="fa fa-eye"></i></div></a><a href="#" data-target="#edit_status_details" data-toggle="modal" data-id="'+obj[i].status_id+'" class="edit_status_details btn btn-sm btn-outline grey-salsa" title="edit"><i class="fa fa-edit"></i></a><a href="javascript:;" data-id='+obj[i].status_id+' class="delete_status_details btn btn-sm btn-outline grey-salsa" title="delete"><i class="fa fa-trash-o"></i></a>']);		
									
								}   
								 table.draw();
							 //alert("status Details is Updated!");
								$.LoadingOverlay("hide");

							 swal({
										  title: "status Details Updated!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										  
										 
									});

							 $('#edit_status_details').modal('hide');
							 // window.location.reload();
						  },
			  error: function(err, ex) 
					{
						alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
			}

	});
  
 	$('body').delegate('.delete_status_details ', 'click', function(e) 
	{
		var result = confirm("Are you sure you Want to delete?");
  		if (result) {
		$.LoadingOverlay("show");

		var get_cliked_id_value = $(this).data("id");
		var data = 
				{
					get_cliked_id_value: get_cliked_id_value	
				};
		   var fd = new FormData();
			   fd.append('get_cliked_id_value', data.get_cliked_id_value);

			$.ajax({
					  url: clicked_status_delete_action,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						     console.log(res);
						   	 $('a[data-id='+get_cliked_id_value+']').parent().parent().hide();
							 //alert("Deleted status Successfully!");
		$.LoadingOverlay("hide");

							 swal({
										  title: "Deleted status Successfully!",
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




};

	return {
		//main function to initiate the module
	   init: function() {
		  // init elements
		  create_status();
		}
	  };
}();

jQuery(document).ready(function() {
		var username = sessionStorage.getItem("logined_user_fname");
			$(".profile_name").text(username);
			/*var userprofile = sessionStorage.getItem("MyProfile");
			$("#profile_image").attr("src","../assets/uploads/files/"+userprofile+"");
			var user_id = sessionStorage.getItem("logined_user_id");*/
	status_creation.init();

	// alert('asdf')
});