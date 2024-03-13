<!DOCTYPE html>
<?php
include('header.php');
 $user_id = $this->session->userdata('USER_ID');
 $role = $this->session->userdata('USER_ROLE');
?>
    <body class="page-container-bg-solid">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">

                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                                        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                                       
                                        <!-- END NOTIFICATION DROPDOWN -->
                                        <!-- BEGIN TODO DROPDOWN -->
                                       
                                        <!-- END TODO DROPDOWN -->
                                      
                                        <!-- BEGIN INBOX DROPDOWN -->
                                     
                                        <!-- END INBOX DROPDOWN -->
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" id="profile_image" src="../assets/layouts/layout3/img/avatar3_small.png">
                                                <span><?php echo $name; ?></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                              <!--   <li>
                                                  <a href="../welcome/come_soon_page">
                                                  <i class="icon-user"></i> My Profile </a>
                                              </li> -->
                                               
                                                <li>
                                                    <a href="../login/logout">
                                                        <i class="icon-key"></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                        <!-- BEGIN QUICK SIDEBAR TOGGLER 
                                        <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                            <span class="sr-only">Toggle Quick Sidebar</span>
                                            <i class="icon-logout"></i>
                                        </li>
                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                         <?php 
                                $this->load->view('navigation');
                          ?>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1>Ticket Details Here
                                            <small></small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                    
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
       
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="mt-content-body">
                                            <div class="se-pre-con"></div>
                                                <div class="row">
                                               <div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-gift"></i>Ticket Reports</div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                               <!--  <a href="#portlet-config" data-toggle="modal" class="config"> </a> -->
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="tabbable-custom">
                                                                <ul class="nav nav-tabs ">
                                                                    <li class="active">
                                                                        <a href="#tab_1_1_1" data-toggle="tab">Ticket Reports</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="tab_1_1_1">
                                                                            <div class="portlet light bordered">
                                                                                <div class="portlet-title">
                                                                                    <div class="caption font-dark">
                                                                                        <i class="icon-settings font-dark"></i>
                                                                                        <span class="caption-subject">Ticket Reports</span>
                                                                                    </div>
                                                                                    <div class="actions">
                                                                                               
                                                                                    </div>
                                                                                </div>
                                                                                <div class="portlet-body">
                                                                                    <div class="table-toolbar">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="btn-group">
                                                                                                            <!-- <button data-target="#create_new_customer" data-toggle="modal" class="btn sbold green">New Customer
                                                                                                                <i class="fa fa-plus"></i>
                                                                                                            </button> --> 
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    
                                                                                                </div>
                                                                                            </div>

               
                                                                                        <div class="row">
                                                                                                <form action="#" id="form_sample_2">
                                                                                                   
                                                                                                  <div class="form-body">
                                                                                                        <div class="col-md-3">
                                                                                                            <label for="form_control_1">Ticket From Date </label>
                                                                                                             <div class="input-group">
                                                                                                                    <input class="form-control form-control-inline input-medium" id="startdDate" name="ticket_from" size="2" placeholder="Ticket From Date " type="text"/>
                                                                                                             </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-3">
                                                                                                             <label for="form_control_1">Ticket To Date </label>
                                                                                                             <div class="input-group">
                                                                                                                    <input class="form-control form-control-inline input-medium" id="enddDate" name="ticket_before" size="2" placeholder="Ticket To Date " type="text"/>
                                                                                                             </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-2">
                                                                                                            <label for="form_control_1">Ticket Status</label>
                                                                                                             <div class="input-group">
                                                                                                                    <select class="form-control" name="ticket_status" id="ticket_status">
                                                                                                                       <option value="">Select Status</option>
																<?php $status = $this->db->query("select * from status")->result_array();
																	foreach($status as $stat){
																	?>
																	<option value="<?php echo $stat['status_id']; ?>"><?php echo $stat['status_name']; ?></option>
																		
																<?php	}
																?>

                                                                                                                    </select>
                                                                                                             </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-4"><br>
                                                                                                            <button id="ticket_result" class="btn green">Search Records</button>
                                                                                                              <!-- <button type="reset" id="reset_results" class="btn default">Reset</button> -->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>

                                                                                            </br>
                                                                                            </br>
                                                                                            </br>
                                                                                            </br>
                                                                                   	<table class="table-scrollable table table-striped table-bordered table-checkable order-column" id="sample_1">
																								<thead>
																									<tr>
																										<!--<th> S.No </th>-->
																										<th> Ticket No </th>
																										<!--<th> Request Date </th>-->
																										<th> Customer Name </th>
																										<th> Company Name </th>
																										<!--<th> Contact Person </th>-->
																										<th> Contact No </th>
																										<th> Modified Date</th>
																										<th> Modified User</th>
																										<!--<th> Preferred Date </th>
																										<th> Preferred Time</th>-->
																										<th> Status </th>
																										<th> Actions </th>
																									</tr>
																								</thead>
																								<tbody>
                                                        	 <?php
                                                        	for ($i=0;$i<count($ticket_details);$i++)
                                                        	{

                                                              if($role == 4){
                                                                        if($user_id != $ticket_details[$i]['user_id']){
                                                                            continue;
                                                                            
                                                                        }
                                                                        
                                                                    }
                                                                    else  if($role == 3){
                                                                        if($user_id != $ticket_details[$i]['assigned_staff_id']){
                                                                            continue;
                                                                            
                                                                        } 
                                                                    }
                                                        		
                                                             
                                                        	?>
                                                        		<tr class="odd gradeX">
                                                        
                                                        			<!--<td><?php echo $i+1; ?> </td>-->
                                                        	<td><?php echo  $ticket_details[$i]['ticket_number']; ?> </td>
                                                        			<!--<td><?php echo $ticket_details[$i]['request_date']; ?></td>-->
                                                        			 <td ><?php echo $name = $ticket_details[$i]['name']; ?></td> 
                                                        				<td ><?php echo $company_name = $ticket_details[$i]['company_name']; ?></td> 
                                                        				 <!--<td ><?php echo $contact_person = $ticket_details[$i]['contact_person']; ?></td>--> 
                                                        				 <td ><?php echo $contact_number = $ticket_details[$i]['contact_number']; ?></td>
                                                        				 <td ><?php echo $updated_at = date("Y-m-d",strtotime($ticket_details[$i]['updated_at'])); ?></td>
                                                                    	 <td ><?php echo $name = $ticket_details[$i]['updated_by']; ?></td>

                                                        				<?php  
                                                        					$ticket_status = $ticket_details[$i]['issue_status'];
                                                        				if( $ticket_status == '1')
                                                        					{
                                                        				?>
                                                        					  <td><span class="label" style="background: blue;font-weight: 500;"> New </span></td>
                                                        
                                                        				<?php 
                                                        					} else if( $ticket_status == '2'){?>
                                                        					    
                                                        					 <td><span class="label" style="background: yellow;font-weight: 500;color:unset"> In Progress </span></td>
                                                        					
                                                        				<?php	} else if( $ticket_status == '3'){?>
                                                        					    
                                                        					 <td><span class="label" style="background: green;font-weight: 500;">Resolved </span></td>
                                                        					
                                                        				<?php	} else if( $ticket_status == '4'){?>
                                                        					    
                                                        					 <td><span class="label" style="background: magenta;font-weight: 500;">Amend</span></td>
                                                        					
                                                        				<?php	}  else if( $ticket_status == '5'){?>
                                                        					    
                                                        					 <td><span class="label" style="background: orange;font-weight: 500;">Hold</span></td>
                                                        					
                                                        				<?php	}  else if( $ticket_status == '6'){?>
                                                        					    
                                                        					 <td><span class="label" style="background: gray;font-weight: 500;">Cancelled</span></td>
                                                        					
                                                        				<?php	} ?>
                                                        				<td><a href="#" data-target="#view_ticket_details" data-toggle="modal" class="view_ticket_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $ticket_details[$i]['ticket_id']; ?>' title="view completed ticket"><i class="fa fa-eye"></i></a>
                                                        <?php } ?>
                                                        						</tbody>
                                                        					</table>
                                                                             <br>

                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                     <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                       
                </div>
            </div>
            </div>
				<?php include("footer.php");?>
  <div id="view_ticket_details" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>View Ticket Status Details
                                    </div>
                                    <div class="tools">
                                        <a href="" class="collapse"> </a>
                                        <!-- <a href="" class="reload"> </a> -->
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                     <!-- BEGIN FORM-->
                                    <form action="#" id="form_sample_2">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for=""><strong>Name :</strong> </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="name"> </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                  <label for=""><strong>Contact Number :</strong></label>   
                                                </div>
                                                <div class="col-md-8">
                                                  <label for="contact_number"></label>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-3">
                                                     <label for=""><strong>Company Name :</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                     <label for="company"></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                 <label for=""><strong>Address :</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                  <label for="address"></label>
                                                </div>
                                            </div>
                                          <div class="row">
                                                <div class="col-md-3">
                                                  <label for=""><strong>E-mail :</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                   <label for="email"></label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                     <label for=""><strong>Contact Person :</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                     <label for="contact_person">-</label>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for=""><strong>Device Location</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="device_location"></label>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-md-3">
                                                    <label for=""><strong>Device/System :</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="system"></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for=""><strong>Branch :</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="branch">-</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for=""><strong>Subject :</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                   <label for="subject"></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for=""><strong>Issue Description :</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                   <label for="issue_desc"></label>
                                                </div>
                                            </div>
 
                                                <div class="row">
                                                    <div class="col-md-3">
                                                      <label for=""><strong>Attachment :</strong></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                       <label for="attachment"></label>
                                                    </div>
                                            
                                                </div> 
                                                 <div class="row">
                                                    <div class="col-md-3">
                                                      <label for=""><strong>Status :</strong></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                       <label for="status"></label>
                                                    </div>
                                            
                                                </div> 
                                            </div> 

                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-3 col-md-9">
                                                   <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
       <!-- Modals starts here!--> 
       
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/pages/scripts/cityairjs/ticket.js" type="text/javascript"></script>
        <!-- End THEME LAYOUT SCRIPTS -->

         <script>
          $("#startdDate").datepicker({
                    format: 'yyyy-mm-dd',
                    autoclose:true,
                    todayHighlight:true
                });
                 $("#enddDate").datepicker({
                    format: 'yyyy-mm-dd',
                    autoclose:true,
                    todayHighlight:true
                });
            $(document).ready(function()
            {
               
          var now = new Date();
         
            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);
        
            var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
        
        
           $('#startdDate').val(today);
            $('#enddDate').val(today);

            });
            
              $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>
    </body>

</html>