
 var ticket_new = '../ticket/create_ticket';
    ticket_pending_update = '../ticket/ticket_pending_update';
	search_ticket_status = '../ticket/search_ticket_status',
	view_ticket_details = '../ticket/view_ticket_details';
    check_name = '../user/check_name';
    get_search_result = '../ticket/get_search_result';

var ticket_creation = function() {

var initElements = function() {	
		var thisYear = (new Date()).getFullYear();   
		var start = "1/1/" + thisYear;
		var end = "31/12/" + thisYear;
		$("#startDate").datepicker("setDate",start);
		// $('input[name=ticket_from]').val(moment().format('DD-MM-YYYY'));
		var last = new Date(new Date().getFullYear(), 11, 31);
		$("#endDate").datepicker("setDate",last);
		 //$('input[name=ticket_before]').val(moment().format('DD-MM-YYYY'));
			// var date = new Date();
			// today_date =  (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear();
		
			var today = new Date();
			// var today = Date.today();
			$('.today_date_time').html("<strong>"+ today.toString('dddd, MMMM d, yyyy') +"</strong>");
		// $( ".date-picker" ).datepicker({dateFormat:"dd/mm/yyyy"}).datepicker("setDate",new Date());
		//$('.att_date').datepicker("setDate", '27/10/2017');
	// $( "#" ).datepicker({

		// dateFormat: "yy-mm-dd"
		  
	// 	});

		/*
		$("#date").datepicker({ 
			    dateFormat: 'dd, MM, yy', 
			    onClose: function(dateText) 
			    { 
			        dateVariable = dateText; 
			        alert(dateText); 
			        alert($("#date").val()) 
			    }
			});
		*/
	};
		


var ticket = function() 
{

$("input[name=name]").keyup(function(){
    	var regex = /^[0-9a-zA-Z\-\s]+$/;
       // this.value = this.value.replace(/\D/g,'');
       var name = this.value;
       if(regex.test(name)== false)
	{
          this.value = "";
       }

});
$("input[name=company_name]").keyup(function(){
    	var regex = /^[0-9a-zA-Z\-\s]+$/;
       // this.value = this.value.replace(/\D/g,'');
       var company = this.value;
       if(regex.test(company)== false)
	{
          this.value = "";
       }

});
$("input[name=contact_number]").keyup(function(){
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
							     var obj = JSON.parse(res);
							     console.log(obj);
							     	for (var i=0; i<obj.length; i++)
								{	
									$("input[name=name]").val(obj[i].name);
									$("input[name=contact_number]").val(obj[i].mobile);
									$("textarea[name=address]").val(obj[i].address);
									$("input[name=email]").val(obj[i].email);
									$("input[name=customer_id]").val(obj[i].user_id);
									$("input[name=company_name]").val(obj[i].company);
									// alert(obj[i].id)
								} 
							 
							 }
							 else
							 {
                                alert('This customer name is not exists!');
							 	$('input[name=name]').val('');
							 	$('input[name=name]').focus();
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
$("#form_img").submit(function(e){
	     e.preventDefault();
	var customer_id = $("input[name=customer_id]").val();
	var name = $("input[name=name]").val();
	var company_name = $("input[name=company_name]").val();
	var contact_person = $("input[name=contact_person]").val();
	var contact_number = $("input[name=contact_number]").val();
	var address = $("textarea[name=address]").val();
	var email = $("input[name=email]").val();
	var subject = $("input[name=subject]").val();
	var device_location = $("input[name=device_location]").val();
	var issue_desc = $("textarea[name=issue_desc]").val();
	var branch = $("select[name=branch]").val();
	var comments = $("textarea[name=comments]").val();
	var system = $("input[name=system]").val();
	var attachment = $("input[name=attachment]").val();
 	var clicked_date1 = "";
	var pattern = new RegExp("^[_A-Za-z0-9\-]+(\.[_A-Za-z0-9]+)*@[A-Za-z0-9\-]+(\.[A-Za-z0-9\-]+)*(\.[A-Za-z]{2,9})$");
	var result = pattern .test(email);

				if(name == '')
				{
					alert("Enter Customer Name!")
					$('input[name=name]').focus();
				}
			
				else if(contact_number == '')
				{
					alert("Enter Contact Number!");
					$('input[name=contact_number]').focus();	
				}
				else if(!/^[\+]?([\d]{9}|0)?([\d]{10}|0)?$/.test(contact_number))
		        {
		            alert( "Contact Should be 9 or 10 Digits Only!" );
		            $('input[name=contact_number]').focus().val('');
		        }
				else if(company_name == '')
				{
					alert("Enter Company Nmae!");
					$('input[name=company_name]').focus();	
				}
			
				else if(address == '')
				{
					alert("Enter Address!")
					$('textarea[name=address]').focus();
				}
				
				else if((email != '') && (!result))
				{
					alert( "Enter Correct E-mail Format!" );
					$('input[name=email1]').focus();
				}
					else if(contact_person == '')
				{
					alert("Enter Contact Person!");
					$('input[name=contact_person]').focus();	
				}
				
				else if(device_location == '')
				{
					alert("Enter Device Location!")
					$('input[name=device_location]').focus();
				}
				else if(system == '')
				{
					alert("Enter Device/System!")
					$('input[name=system]').focus();
				}
				else if(branch == '')
				{
					alert("Select Branch!")
					$('select[name=branch]').focus();
				}
				else if(subject == '')
				{
					alert("Enter Subject!")
					$('input[name=subject]').focus();
				}
					else if(issue_desc == '')
				{
					alert("Enter Issue Description!")
					$('textarea[name=issue_desc]').focus();
				}
				
				else
				{
					$.LoadingOverlay("show");

					    var formData = new FormData($("#form_img")[0]);
					$.ajax({
							  url: ticket_new,
							  type: 'POST',
							  data: formData,
							  contentType: false,
							  processData: false,
							  success: function(res) 
								  {
								     console.log(res);
								     var obj = JSON.parse(res);
									  for (var i=0; i<obj.length; i++)
										{

								} 
								$.LoadingOverlay("hide");
								swal({
										  title: "Ticket created successfully!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										 
									});
							 //alert("Information is Updated!");
							 $('#create_new_ticket').modal('hide');
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


// For save the user details to the data base:
$("#edit_ticket_form").submit(function(e){
	 e.preventDefault();
	var update_id = $('input[name=update_id]').val();
	var service_engineer = $("select[name=service_engineer]").val();
	var status = $("select[name=status]").val();
	var comment = $("textarea[name=description]").val();
    var user_role = $('input[name=user_role]').val();

     if(user_role != 4){
				
if(service_engineer == '')
				{
				   
					alert("Select Service Engineer!")
					$('select[name=service_engineer]').focus();

				}
				
				else
				{
					$.LoadingOverlay("show");


					    var formData = new FormData($("#edit_ticket_form")[0]);
					$.ajax({
							  url: ticket_pending_update,
							  type: 'POST',
							  data: formData,
							  contentType: false,
							  processData: false,
							  success: function(res) 
								  {
								    
								$.LoadingOverlay("hide");
								swal({
										  title: "Ticket details updated successfully!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										 
									});
							 //alert("Information is Updated!");
							 $('#edit_ticket_details').modal('hide');
							 window.location.reload(true);
						  },
			  error: function(err, ex) 
					{
						alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
		}
	}
	else{
	    	$.LoadingOverlay("show");


					   var formData = new FormData($("#edit_ticket_form")[0]);
					$.ajax({
							  url: ticket_pending_update,
							  type: 'POST',
							  data: formData,
							  contentType: false,
							  processData: false,
							  success: function(res) 
								  {
								     console.log(res);

								$.LoadingOverlay("hide");
								swal({
										  title: "Ticket details updated successfully!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										 
									});
							 //alert("Information is Updated!");
							 $('#edit_ticket_details').modal('hide');
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


	$('body').delegate('.view_ticket_details', 'click', function(e) 
	{
		var get_cliked_id_value = $(this).data("id");
		$.LoadingOverlay("show");

		e.preventDefault();
		var data = 
				{
					  get_cliked_id_value: get_cliked_id_value
				};
		   var fd = new FormData();
			   fd.append('id', data.get_cliked_id_value);
			  			   
			$.ajax({
					  url: view_ticket_details,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						    console.log(res)

			   				var data = JSON.parse(res);
			   				var obj = data.ticket_data;
						  for (var i=0; i<obj.length; i++)
							{
								jQuery("label[for='name']").html(obj[i].name);
								jQuery("label[for='contact_number']").html(obj[i].contact_number);
								jQuery("label[for='company']").html(obj[i].company_name);
								jQuery("label[for='address']").html(obj[i].address);
								jQuery("label[for='email']").html(obj[i].email);
								jQuery("label[for='contact_person']").html(obj[i].contact_person);
								jQuery("label[for='device_location']").html(obj[i].device_location);
								jQuery("label[for='system']").html(obj[i].system);
								jQuery("label[for='branch']").html(obj[i].branch_name);
								jQuery("label[for='subject']").html(obj[i].subject);
								jQuery("label[for='issue_desc']").html(obj[i].issue_desc);
								jQuery("label[for='comments']").html(obj[i].comments);
								jQuery("label[for='status']").html(obj[i].status_name);
								var file = obj[i].file_path;
								var id = obj[i].ticket_id;
								if(file){
								    var nameArr = file.split(',');
								    jQuery("label[for='attachment']").empty();
								    for (var j=0; j < nameArr.length; j++)
							{      
								    var file_path = '<a target="_blank" href="../uploads/ticket'+id+'/'+nameArr[j]+'";>'+nameArr[j]+'</a></br>';
								    jQuery("label[for='attachment']").append(file_path);
                                    
							}
														    

								
								}

							}
							$.LoadingOverlay("hide");
						  },
					 error: function(err, ex) 
					{
						//alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			    });
	
		});


};
$('body').delegate('.edit_ticket_details', 'click', function(e) 
	{
		
var get_cliked_id_value = $(this).data("id");
//alert(get_cliked_id_value);
		$.LoadingOverlay("show");

		e.preventDefault();
		var data = 
				{
					  get_cliked_id_value: get_cliked_id_value
				};
		   var fd = new FormData();
			   fd.append('id', data.get_cliked_id_value);
			  			   
			$.ajax({
					  url: view_ticket_details,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						   
			   				var data = JSON.parse(res);
			   				var obj = data.ticket_data;
			   				var comme_obj =data.comments_data;
			   				 console.log(comme_obj)

						  for (var i=0; i<obj.length; i++)
							{
								jQuery("label[for='name']").html(obj[i].name);
								jQuery("label[for='contact_number']").html(obj[i].contact_number);
								jQuery("label[for='company']").html(obj[i].company_name);
								jQuery("label[for='address']").html(obj[i].address);
								jQuery("label[for='email']").html(obj[i].email);
								jQuery("label[for='contact_person']").html(obj[i].contact_person);
								jQuery("label[for='device_location']").html(obj[i].device_location);
								jQuery("label[for='system']").html(obj[i].system);
								jQuery("label[for='branch']").html(obj[i].branch_name);
								jQuery("label[for='subject']").html(obj[i].subject);
								jQuery("label[for='issue_desc']").html(obj[i].issue_desc);
								jQuery("input[name='update_id']").val(obj[i].ticket_id);

								$("select[name='status'] option").each(function(){
								if ($(this).val() == obj[i].status_id)
									$(this).attr("selected","selected");
								});
									$("select[name='service_engineer'] option").each(function(){
								if ($(this).val() == obj[i].assigned_staff_id)
									$(this).attr("selected","selected");
								});
								var file = obj[i].file_path;
								var id = obj[i].ticket_id;
								if(file){
								    var nameArr = file.split(',');
								    jQuery("label[for='attachment']").empty();
								    for (var j=0; j < nameArr.length; j++)
							{      
								    var file_path = '<a target="_blank" href="../uploads/ticket'+id+'/'+nameArr[j]+'";>'+nameArr[j]+'</a></br>';
								    jQuery("label[for='attachment']").append(file_path);
                                    
							}
														    
            
								
								}

							}
							jQuery("#comments").empty();
							 for (var i=0; i< comme_obj.length; i++)
							{
							 var comments = '<div style="padding: 10px;box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.3);margin: 5px;"><h4>'+comme_obj[i].comment+'</h4> <p style="margin:5px 0 !important" class="smalltext">Comment by: <span>'+comme_obj[i].name+',</span> Created at: <span>'+comme_obj[i].created_at+'</span></p></div>'
							
							    jQuery("#comments").append(comments);
							}
							$.LoadingOverlay("hide");
						  },
					 error: function(err, ex) 
					{
						//alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			    });
	
		});

var initAjax = function() {
		

	};


	return {
			//main function to initiate the module
		   init: function() {
			  // init elements
			  ticket();
			  initElements();
			 // initAjax();
			}
		  };
}();

	$('#ticket_result').click(function()
	{
			var ticket_from = $("input[name=ticket_from]").val();
			var ticket_before = $("input[name=ticket_before]").val();
			var ticket_status = $("select[name=ticket_status]").val();
			if(ticket_from != '' && ticket_before != '')
			{
			    	        $.LoadingOverlay("show");

			var fd = new FormData();
			    fd.append('ticket_from', ticket_from);
			    fd.append('ticket_before', ticket_before);
			    fd.append('ticket_status', ticket_status);
			   
					$.ajax({
					  url: get_search_result,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
							 console.log(res);
							var obj = JSON.parse(res);
							 var t = $('#sample_1').DataTable();
										table = $('#sample_1').DataTable();
                                        table.clear();
                                        var j=1;
										for(var i=0; i<obj.length; i++)
										{
										    var ticket_status =obj[i].issue_status;
										   if(ticket_status == '1')
                        					{
                    					    var status = '<span class="label" style="background: blue;font-weight: 500;"> New </span>';
                    					  } else if(ticket_status == '2'){
                    					     var status ='<span class="label" style="background: yellow;font-weight: 500;color:unset"> In Progress </span>';
                    					    } else if(ticket_status == '3'){
                    					      var status='<span class="label" style="background: green;font-weight: 500;">Resolved </span>';
                    					    } else if(ticket_status == '4'){
                    					       var status ='<span class="label" style="background: magenta;font-weight: 500;">Amend</span>';
                    					    }  else if(ticket_status == '5'){
                    					        var status = '<span class="label" style="background: orange;font-weight: 500;">Hold</span>';
                    					        }  else if(ticket_status == '6'){
                    					           var status ='<span class="label" style="background: gray;font-weight: 500;">Cancelled</span>';
                    					            
                    					        } 
                    					         var updated = obj[i].updated_at;
                    					        var updated_at = formatDate(updated)
									table.row.add([j,obj[i].ticket_number,obj[i].request_date,obj[i].name,obj[i].company_name,obj[i].contact_person,obj[i].contact_number,updated_at,obj[i].updated_by,status,'<a href="#" data-target="#view_ticket_details" data-toggle="modal" data-id="'+obj[i].ticket_id+'" class="view_ticket_details btn btn-sm btn-outline grey-salsa" title="view"><i class="fa fa-eye"></i></a>']);	
									j++;
								}   
								table.draw();
							$.LoadingOverlay("hide");
						  },
			  error: function(err, ex) 
					{
						//alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
			}
			else if (ticket_from == '')
			{
				alert('Select the TicketFrom Date!')
				$("input[name=ticket_from]").focus();
			}			
			else if (ticket_before == '')
			{
				alert('Select the Ticket To Date!')
				$("input[name=ticket_before]").focus();
			}

	});

	$('#search_result').click(function()
	{
			var ticket_from = $("input[name=ticket_from]").val();
			var ticket_before = $("input[name=ticket_before]").val();


			var ticket_status = $("select[name=ticket_status]").val();
			if(ticket_from != '' && ticket_before != '')
			{
			    	        $.LoadingOverlay("show");

			var fd = new FormData();
			    fd.append('ticket_from', ticket_from);
			    fd.append('ticket_before', ticket_before);
			    fd.append('ticket_status', ticket_status);
			   
					$.ajax({
					  url: get_search_result,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
							 console.log(res);
							var obj = JSON.parse(res);
							 var t = $('#sample_1').DataTable();
										table = $('#sample_1').DataTable();
                                        table.clear();
                                        var j=1;
                                       
										for(var i=0; i<obj.length; i++)
										{
										    var ticket_status =obj[i].issue_status;
										   if(ticket_status == '1')
                        					{
                    					    var status = '<span class="label" style="background: blue;font-weight: 500;"> New </span>';
                    					  } else if(ticket_status == '2'){
                    					     var status ='<span class="label" style="background: yellow;font-weight: 500;color:unset"> In Progress </span>';
                    					    } else if(ticket_status == '3'){
                    					      var status='<span class="label" style="background: green;font-weight: 500;">Resolved </span>';
                    					    } else if(ticket_status == '4'){
                    					       var status ='<span class="label" style="background: magenta;font-weight: 500;">Amend</span>';
                    					    }  else if(ticket_status == '5'){
                    					        var status = '<span class="label" style="background: orange;font-weight: 500;">Hold</span>';
                    					        }  else if(ticket_status == '6'){
                    					           var status ='<span class="label" style="background: gray;font-weight: 500;">Cancelled</span>';
                    					        } 
                    					        if(ticket_status != '3'){
                    					       var edit ='<a href="#" data-target="#edit_ticket_details" data-toggle="modal" class="edit_ticket_details btn btn-sm btn-outline grey-salsa" data-id ="'+obj[i].ticket_id+'" title="edit"><i class="fa fa-edit"></i></a></td>';
                    					        }
                    					        else{
                    					          var edit ="";   
                    					        }
                    					        var updated = obj[i].updated_at;
                    					        var updated_at = formatDate(updated)
                    					        var view = '<a href="#" data-target="#view_ticket_details" data-toggle="modal" data-id="'+obj[i].ticket_id+'" class="view_ticket_details btn btn-sm btn-outline grey-salsa" title="view"><i class="fa fa-eye"></i></a>';
									table.row.add([j,obj[i].ticket_number,obj[i].request_date,obj[i].name,obj[i].company_name,obj[i].contact_person,obj[i].contact_number,updated_at,obj[i].updated_by,status,view+' '+edit]);	
									j++;
								}   
								table.draw();
							$.LoadingOverlay("hide");
						  },
			  error: function(err, ex) 
					{
						//alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
			}
			else if (ticket_from == '')
			{
				alert('Select the Ticket From Date!')
				$("input[name=ticket_from]").focus();
			}			
			else if (ticket_before == '')
			{
				alert('Select the Ticket To Date!')
				$("input[name=ticket_before]").focus();
			}

	});
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}
jQuery(document).ready(function() {
	var username = sessionStorage.getItem("logined_user_fname");
				$(".profile_name").text(username);
		/*var userprofile = sessionStorage.getItem("MyProfile");
		$("#profile_image").attr("src","../assets/uploads/files/"+userprofile+"");
		var user_id = sessionStorage.getItem("logined_user_id");*/
	ticket_creation.init();


 


	// alert('asdf')
});