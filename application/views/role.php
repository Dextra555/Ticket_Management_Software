<?php include("header.php");
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
                                    <a href="#">
                                        <img src="../assets/layouts/layout3/img/logo.png" alt="logo" class="logo-default">
                                    </a>
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
                                                <img alt="" id="profile_image" class="img-circle" src="../assets/layouts/layout3/img/avatar3_small.png">
                                                <spa><?php echo $name; ?></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <!-- <li>
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
                                        <h1>Role Details Here
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
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="../super_admin/super_admin_homepage">Home</a>
											<i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Dashboard</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="mt-content-body">
                                            <div class="se-pre-con"></div>
													<div class="row">
														<div class="portlet box green">
															<div class="portlet-title">
																<div class="caption">
																	<i class="fa fa-gift"></i>Create New Role</div>
																<div class="tools">
																	<a href="javascript:;" class="collapse"> </a>
																</div>
															</div>
															<div class="portlet-body">
																<div class="tabbable-line">
																	<ul class="nav nav-tabs ">
																		<li class="active">
																			<a href="#tab_15_1" data-toggle="tab"> ROLE </a>
																		</li>
																	</ul>
																	<div class="tab-content">
																		<div class="tab-pane active" id="tab_15_1">
                                                                            <div class="se-pre-con"></div>
																			 <div class="row">
																				<div class="col-md-12">
																					<!-- BEGIN EXAMPLE TABLE PORTLET-->
																					<div class="portlet light bordered">
																						<div class="portlet-title">
																							<div class="caption font-dark">
																								<i class="icon-settings font-dark"></i>
																								<span class="caption-subject"> Use the form below to create or edit role. </span>
																							</div>
																							<div class="actions">
																							</div>
																						</div>
																						<div class="portlet-body">
																							<div class="table-toolbar">
																								<div class="row">
																									<div class="col-md-6">
																										<div class="btn-group">

																											<button data-target="#create_new_role" data-toggle="modal" class="btn sbold green">New Role
																												<i class="fa fa-plus"></i>
																											</button> 

																										</div>
																									</div>
																									
																								</div>
																							</div>
																							<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
																								<thead>
																									<tr>
																										
																										<th> S.No </th>
																										<th> Role Name </th>
																										<th> Menu Permission </th>
																										<!--<th> Actions Made </th>-->
																									</tr>
																								</thead>
																								<tbody>
																								 <?php
																								for ($i=0;$i<count($role_details);$i++)
																								{
																								    if($role_details[$i]['role_id'] == 1){
                            																	        continue;
                            																    	}
																								?>
																									<tr class="odd gradeX">
																										
                                                                                                        <!-- <td><?php echo $role_details[$i]['role_id']; ?> </td> -->
																										<td><?php echo $i; ?> </td>
																										<td><?php echo $role_details[$i]['role_name']; ?> </td>
																										<td><?php echo $role_details[$i]['role_access']; ?></td>

																									</tr>
																								<?php
																								}
																								?>
																								</tbody>
																							</table>
																						</div>
																					</div>
																					<!-- END EXAMPLE TABLE PORTLET-->
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
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                       
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
<?php include('footer.php'); ?>

        </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
       <!-- Modals starts here!--> 
		<!-- static -->
			<div id="create_new_role" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="700">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Create New Role</div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                        <form action="javascript:;" id="form_sample_2">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="role_name" id="form_control_1" placeholder="Role Name">
                                                            <label for="form_control_1">Role Name
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type role name...</span>
                                                        </div>
                                                    </div>
													 <div class="col-md-6">
													 <div class="form-group form-md-line-input has-success">
													  
                                                      <select class="form-control" name="role_access" id="role_access">
															<option value="Custom Menu Access">Custom Menu Access</option>
															<option value="Custom Menu Access">All Menu Access</option>
														</select>
														<label for="form_control_1">Role Access 
                                                             <span class="required">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">

                                                        <button type="submit" id="new_role" class="btn green">Create role</button>
                                                        <button type="reset" class="btn default">Reset</button>
                                                        <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
            </div>
            <div id="view_role_details" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>View role Details</div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>                             
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                        <form action="javascript:;" id="form_sample_3">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="view_role_name" id="form_control_1" placeholder="role name" disabled>
                                                            <label for="form_control_1"> Name</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="view_email" id="form_control_1" placeholder="Email id" disabled>
                                                            <label for="form_control_1">Email</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="view_role_address" rows="3" disabled></textarea>
                                                            <label for="form_control_1">Address</label>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="view_contact_number" id="form_control_1" placeholder="Contact number" disabled>
                                                            <label for="form_control_1">Contact Number</label>
                                                        </div>
                                                         <div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="view_username" id="form_control_1" placeholder=" " disabled>
                                                            <label for="form_control_1">User name</label>
                                                        </div>
														<div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="view_password" id="form_control_1" placeholder="" disabled>
                                                            <label for="form_control_1">Password</label>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="table_hide">
                                            <div class="portlet-title">
                                                <div class="caption font-dark">
                                                    <span class="caption-subject" style="font-weight:bold;padding-bottom: 20px !important;padding-left: 10px;"> Past Services </span>
                                                </div>
                                            </div>                                   
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="role_invoice_view">
                                                    <thead>
                                                        <tr>                                                                                               
                                                            <th> No </th>
                                                            <th> Invoice No</th>
                                                            <th> Invoice Date </th>
                                                            <th> Name </th>
                                                            <th> Contact No </th>
                                                            <th> Servicing Date </th>
                                                            <th> Servicing By </th>
                                                            <th> Total Amount ($) </th>
                                                            <th> Action Made </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <div id=""></div>
                                                    </tbody>                                                                                  
                                                </table>
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
            <div id="edit_role_details" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="700">
				<div class="modal-body">
					<div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Edit role Details</div>
                                        <div class="tools"> 
                                            <a href="" class="collapse"> </a>                                           
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                        <form action="javascript:;" id="form_sample_4">
                                            <div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-md-line-input has-success">
															<input type="text" class="form-control" name="edit_role_name" id="form_control_1" placeholder="role name">
															<label for="form_control_1"> Name
																<span class="required">*</span>
															</label>
															<span class="help-block">Type role name...</span>
														</div>
														<div class="form-group form-md-line-input has-success">
															<input type="text" class="form-control" name="edit_email" id="form_control_1" placeholder="Email id">
															<label for="form_control_1">Email
															</label>
															<span class="help-block">Type Email Id...</span>
														</div>
														<div class="form-group form-md-line-input has-success">
															<textarea class="form-control" name="edit_role_address" rows="3"></textarea>
															<label for="form_control_1">Address
                                                            <span class="required">*</span></label>
															<span class="help-block">Type contact address here...</span>
														</div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <select class="form-control" name="edit_category_role">
                                                                <option value="">Select</option>
                                                                <option value="1">Residential</option>
                                                                <option value="2">Companies</option>
                                                                <option value="3">Contract</option>
                                                                <option value="4">Agents</option>
                                                                <option value="7">Admin</option>
                                                                <option value="6">Others</option>
                                                            </select>
                                                            <label for="form_control_1">Category of role
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Select Category here...</span>
                                                        </div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group form-md-line-input has-success">
															<input type="text" class="form-control" name="edit_contact_number" id="form_control_1" placeholder="Contact number">
															<label for="form_control_1">Contact Number
																<span class="required">*</span>
															</label>
															<span class="help-block">Type Contact Number...</span>
														</div>
														<div class="form-group form-md-line-input has-success">
															<select class="form-control" name="edit_reminder_months">
																<option value="">Select</option>
                                                                <option value="0">NONE</option>
																<option value="1">1 MONTH</option>
																<option value="2">2 MONTH</option>
																<option value="3">3 MONTH</option>
																<option value="4">4 MONTH</option>
																<option value="5">5 MONTH</option>
																<option value="6">6 MONTH</option>
															</select>
															<label for="form_control_1">Reminder(Months)
																<span class="required">*</span>
															</label>
															<span class="help-block">Select Months here...</span>
														</div>

														<div class="form-group form-md-line-input has-success">
															<textarea class="form-control" name="edit_service_history" rows="3"></textarea>
															<label for="form_control_1">Service History</label>
															<span class="help-block">Type Service History here...</span>
														</div>
                                                        <input type="text" class="form-control hide" name="edit_role_id_value" id="form_control_1" placeholder="Contact number">
													 </div>
												</div>
												
                                            </div>
											
											<div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" id="update_role_details" class="btn green">Update role Details</button>
                                                        <button type="reset" class="btn default">Reset</button>
														<button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
										</form>
									</div>
                                </div>
						</div>
			</div>


		<!-- BEGIN THEME LAYOUT SCRIPTS -->
		<script src="../assets/pages/scripts/cityairjs/role.js" type="text/javascript"></script>
		<!-- End THEME LAYOUT SCRIPTS -->


        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>
		
    </body>

</html>