<?php include("header.php");
	    $user_id = $this->session->userdata('USER_ID');
        $role = $this->session->userdata('USER_ROLE');
?><body class="page-container-bg-solid">
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
                                     
                                        <!-- END INBOX DROPDOWN -->
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" id="profile_image"  src="../assets/layouts/layout3/img/avatar3_small.png">
                                                <span><?php echo $name; ?></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">

                                              
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
                                        <h1>Create Users
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
                                   <!-- <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="../super_admin/super_admin_homepage">Home</a>
											<i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Dashboard</span>
                                        </li>
                                    </ul>-->
                                <!-- <input type='text' id='date' /> -->
               <!--   <div class="form-group form-md-line-input">
                                       <div class="form-group">
                                              <input class="input-group form-control input-medium date att_date"  id="surya_check_date" name="ticket_date" placeholder="Pick date"  data-date-start-date="+0d"/>
                                              <label for="form_control_1">Preferred Dateslot
                                              <span class="required">*</span></label>
                                              <span class="help-block">Select date...</span>
                                       </div>
                                    </div> -->
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="mt-content-body">
                                            <div class="se-pre-con"></div>
													<div class="row">
														<div class="portlet box green">
															<div class="portlet-title">
																<div class="caption">
																     <i class="fa fa-gift"></i>Create New User</div>
																<div class="tools">
																	<a href="javascript:;" class="collapse"> </a>
																</div>
															</div>
															<div class="portlet-body">
																<div class="tabbable-line">
																	<ul class="nav nav-tabs ">
																		<li class="active">
																			<a href="#tab_15_1" data-toggle="tab">Users </a>
																		</li>
																	</ul>
																	<div class="tab-content">
																		<div class="tab-pane active" id="tab_15_1">
																			 <div class="row">
																				<div class="col-md-12">
																					<!-- BEGIN EXAMPLE TABLE PORTLET-->
																					<div class="portlet light bordered">
																						<div class="portlet-title">
																							<div class="caption font-dark">
																								<i class="icon-settings font-dark"></i>	<span class="caption-subject">  Create / Edit Users </span>
																							</div>
																							<div class="actions">
																							</div>
																						</div>
																						<div class="portlet-body">
																							<div class="table-toolbar">
																								<div class="row">
																									<div class="col-md-6">
																									    <?php if($role !="3") { ?>
																										<div class="btn-group">

																											<button data-target="#static" data-toggle="modal" class="btn sbold green ">Create New User
																												<i class="fa fa-plus"></i>
																											</button> 
																											<?php } ?>
     
																										</div>
																										 
																									</div>
                                                                                                    	<div class="pull-right">
                                                                                                             <div class="actions">
                                                        </div>
                                                                                                        </div>																								
																									
																								</div>
                                                                                                </br>

                                                                                            </br>
                                                                                            <table class="table table-striped table-bordered table-checkable order-column" id="sample_2">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th> S.No </th>
                                                                                                        <th> Name </th>
                                                                                                        <th> Mobile No </th>
                                                                                                        <th> Username / Email </th>
                                                                                                        <th> Company </th>
                                                                                                        <th> Role </th>
                                                                                                       <th> Actions </th>
                                                                                                    
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                <?php
                                                                                                for ($i=0;$i<count($user_details);$i++)
                                                                                                {
                                                                                                   if($user_details[$i]['role'] == 1){
                                                                                                       continue;
                                                                                                   }
                                                                                                ?>
                                                                                                <tr>
                                                                                                    <!-- <td><?php echo $user_details[$i]['id']; ?></td> -->
                                                                                                    <td><?php echo $i; ?> </td>
                                                                                                    <td><?php echo $user_details[$i]['name']; ?></td>
                                                                                                    <td><?php echo $user_details[$i]['mobile']; ?></td>
                                                                                                    <td><?php echo $user_details[$i]['email']; ?></td>
																									<td class=""><?php echo $user_details[$i]['company']; ?></td>
                                                                                                    <td class=""><?php
																									$role_name = $this->db->query("SELECT role_name FROM `user_roles` where role_id=".$user_details[$i]['role'])->row();
																									echo $role_name->role_name;?></td>
                                                                                                    <td class="align_changepass"><a href="#" data-target="#changepassword" data-toggle="modal" data-name = '<?php echo $user_details[$i]['username'];?>' data-fname = '<?php echo $user_details[$i]['name'];?>' data-id ='<?php echo $user_details[$i]['user_id'];?>' class="change_password btn btn-sm btn-outline grey-salsa" title="change password"><i class="fa fa-exchange" align="center"></i></a>
                                                                                                    
                                                                                                            <a href="#" data-target="#view_user_details" data-toggle="modal" class="view_user_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $user_details[$i]['user_id'];?>' title="view"><i class="fa fa-eye"></i></a>

                                                                                                    <a href="#" data-target="#edit_user_details" data-toggle="modal" class="edit_user_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $user_details[$i]['user_id'];?>' title="edit"><i class="fa fa-edit"></i></a>
																									<!--<a href="javascript:;" data-id ='<?php echo $user_details[$i]['user_id'];?>' class="user_delete btn btn-sm btn-outline grey-salsa " title="delete"><i class="fa fa-trash-o"></i></a>-->
                                                                                                    
                                                                                                    </td>

                                                                                                </tr>
                                                                                                <?php
                                                                                                }
                                                                                                ?>
                                                                                              </tbody>
                                                                                            </table>
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
											   
												<div class="clearfix"></div>
												<!-- END DASHBOARD STATS 1-->
												
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
		<div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
				<div class="modal-body">
					<div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i> Add New User Here </div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                        <form action="#" id="form_sample_2">
                                            <div class="form-body">
												<div class="row">
													<div class="col-md-6">
													<div class="form-group form-md-line-input">
															<input type="text" class="form-control" name="name" maxlength="50" id="form_control_1" placeholder="Full Name" tabindex="1">
															<label for="form_control_1">Name
																<span class="required">*</span>
															</label>
															<span class="help-block">Enter Full Name ...</span>
														</div>
														
                                                       <div class="form-group form-md-line-input">
															<input type="password" class="form-control" name="pass"  maxlength="20" id="form_control_1" placeholder="Password" tabindex="3" >
															<label for="form_control_1">Password
																<span class="required">*</span>
															</label>
															<span class="help-block">Enter Password ...</span>
														</div>
														  <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" name="mobile" maxlength="10" placeholder="Mobile No" tabindex="5">
                                                            <label for="form_control_1">Mobile No
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Enter Mobile No...</span>
                                                        </div>
														<div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" name="company"  placeholder="Company name" maxlength="50" tabindex="7">
                                                            <label for="form_control_1">Company
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Enter Company Name...</span>
                                                        </div>
														 <div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="address" rows="1"  tabindex="9"></textarea>
                                                            <label for="form_control_1">Address
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type contact address here...</span>
                                                        </div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-md-line-input">
															<input type="text" class="form-control" name="uname" id="form_control_1" placeholder="User name"  maxlength="50" tabindex="2">
															<label for="form_control_1">User Name/Email
																<span class="required">*</span>
															</label>
															<span class="help-block">Enter User Name...</span>
														</div>
                                                        <div class="form-group form-md-line-input">
                                                            <input type="password" class="form-control" name="repass" id="form_control_1" placeholder="Confirm Password" tabindex="4"  maxlength="20">
                                                            <label for="form_control_1">Confirm Password
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Enter Confirm Password ...</span>
                                                        </div>
													<!--<div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="uemail" id="form_control_1" placeholder="Email id" tabindex="5">
                                                            <label for="form_control_1">Email
                                                            </label>
                                                            <span class="help-block">Type Email Id...</span>
                                                        </div>-->
														<div class="form-group form-md-line-input">
															<select class="form-control" name="role" tabindex="6">
																<option value="">Select</option>
																<?php $user_roles = $this->db->query("select * from user_roles")->result_array();
																	foreach($user_roles as $role){
																	if($role['role_id'] == 1){
																	        continue;
																	}
																	?>
																	<option value="<?php echo $role['role_id']; ?>"><?php echo $role['role_name']; ?></option>
																		
																<?php	}
																?>
															</select>
															<label for="form_control_1">Role
																<span class="required">*</span>
															</label>
															<span class="help-block">Select Role here...</span>
														</div>
														<div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="notes" rows="1" tabindex="10"></textarea>
                                                            <label for="form_control_1">Notes
                                                                <!--<span class="required">*</span>-->
                                                            </label>
                                                            <span class="help-block">Enter user notes here...</span>
                                                        </div>
													</div>
												</div>
                                            </div>
											
											<div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" id="save_user" class="btn green" tabindex="11">Add User</button>
                                                        <button type="reset" class="btn default" tabindex="12">Reset</button>
														<button type="button" data-dismiss="modal" class="btn btn-outline dark" tabindex="13">Close</button>
                                                    </div>
                                                </div>
                                            </div>
											
										</form>
									</div>
                                </div>
						</div>
			</div>

            <div id="changepassword" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Change Password for User </div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                       <form action="javascript:;" id="new_form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="user_name" id="form_control_1" placeholder="User name" disabled>
                                                            <label for="form_control_1">User Name / Email
                                                            </label>
                                                            <span class="help-block">User name...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="full_name" id="form_control_1" placeholder="Password" disabled>
                                                            <label for="form_control_1">Full Name
                                                            </label>
                                                            <span class="help-block">Type Full name ...</span>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control hide" name="id_value_stored" id="form_control_1" placeholder="User name">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input">
                                                            <input type="password" class="form-control" name="change_password_user" id="form_control_1" placeholder="New Password">
                                                            <label for="form_control_1">New Password
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type New Password ...</span>
                                                        </div> 
                                                        <div class="form-group form-md-line-input">
                                                            <input type="password" class="form-control" name="change_repass_user" id="form_control_1" placeholder="Confirm Password">
                                                            <label for="form_control_1">Confirm Password
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Confirm Password ...</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" id="change_user_password" class="btn green">Update Password</button>
                                                        <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                        </div>
            </div>
            <div id="view_user_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>View Selected User details</div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                        <form action="javascript:;" id="view_details">
                                             <div class="form-body">
												<div class="row">
													<div class="col-md-6">
													 <input type="text" class="form-control hide" name="vid_value_stored" id="form_control_1" >
													<div class="form-group form-md-line-input">
															<input type="text" class="form-control" name="vname" maxlength="50" id="form_control_1" placeholder="Full Name" tabindex="2" disabled>
															<label for="form_control_1">Name
																<span class="required">*</span>
															</label>
														</div>
														
														  <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" name="vmobile" maxlength="10" placeholder="Mobile No" tabindex="5" disabled>
                                                            <label for="form_control_1">Mobile No
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
														<div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" name="vcompany"  placeholder="Company name" maxlength="50" tabindex="5" disabled>
                                                            <label for="form_control_1">Company
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
														 <div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="vaddress" rows="1" disabled></textarea>
                                                            <label for="form_control_1">Address
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type contact address here...</span>
                                                        </div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-md-line-input">
															<input type="text" class="form-control" name="vuname" id="form_control_1" placeholder="User name"  maxlength="50" tabindex="1" disabled>
															<label for="form_control_1">User Name/Email
																<span class="required">*</span>
															</label>
														</div>

													<!--	<div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="vuemail" id="form_control_1" placeholder="Email id" tabindex="5" disabled>
                                                            <label for="form_control_1">Email
                                                            </label>
                                                        </div>-->
														<div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="vrole" id="form_control_1" tabindex="5" disabled>
                                                            <label for="form_control_1">Role
                                                            </label>
                                                        </div>
														<div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="vnotes" rows="1" disabled></textarea>
                                                            <label for="form_control_1">Notes
                                                            </label>
                                                        </div>
													</div>
												</div>
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                        </div>
            </div>
            <div id="edit_user_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Edit Selected User details And Update It Here!</div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                        <form action="javascript:;" id="edit_user">
                                             <div class="form-body">
												<div class="row">
													<div class="col-md-6">
													 <input type="text" class="form-control hide" name="edit_id_value" id="form_control_1" >
													<div class="form-group form-md-line-input">
															<input type="text" class="form-control" name="ename" maxlength="50" id="form_control_1" placeholder="Full Name" tabindex="2" disabled>
															<label for="form_control_1">Name
																<span class="required">*</span>
															</label>
															<span class="help-block">Enter Full Name ...</span>
														</div>

														  <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" name="emobile" maxlength="10" placeholder="Mobile No" tabindex="5" >
                                                            <label for="form_control_1">Mobile No
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Enter Mobile No...</span>
                                                        </div>
														<div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" name="ecompany"  placeholder="Company name" maxlength="50" tabindex="5" disabled>
                                                            <label for="form_control_1">Company
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Enter Company Name...</span>
                                                        </div>
														 <div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="eaddress" rows="1"></textarea>
                                                            <label for="form_control_1">Address
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type contact address here...</span>
                                                        </div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-md-line-input">
															<input type="text" class="form-control" name="euname" id="form_control_1" placeholder="User name"  maxlength="50" tabindex="1" disabled>
															<label for="form_control_1">User Name/Email
																<span class="required">*</span>
															</label>
															<span class="help-block">Enter User Name...</span>
														</div>
														<!--<div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="euemail" id="form_control_1" placeholder="Email id" tabindex="5">
                                                            <label for="form_control_1">Email
                                                            </label>
                                                            <span class="help-block">Type Email Id...</span>
                                                        </div>-->
														<div class="form-group form-md-line-input">
															<select class="form-control" name="erole" tabindex="6" disabled>
																<option value="">Select</option>
																<?php $user_roles = $this->db->query("select * from user_roles")->result_array();
																	foreach($user_roles as $role){ 
																	    if($role['role_id'] == 1){
																	        continue;
																	}
																	?>
																	<option value="<?php echo $role['role_id']; ?>"><?php echo $role['role_name']; ?></option>
																		
																<?php	}
																?>
															</select>
															<label for="form_control_1">Role
																<span class="required">*</span>
															</label>
															<span class="help-block">Select Role here...</span>
														</div>
														<div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="enotes" rows="1"></textarea>
                                                            <label for="form_control_1">Notes
                                                                <!--<span class="required">*</span>-->
                                                            </label>
                                                            <span class="help-block">Enter user notes here...</span>
                                                        </div>
													</div>
												</div>
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" id="update_user_details" class="btn green">Update User details</button>
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
            </div>
		

        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/pages/scripts/cityairjs/user.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->



		<script type="text/javascript">

             function EditValidateEmail()
             {
                var got = $("input[name=edit_email]").val();
                    if(got == '')
                    {
                        alert("Please enter email!")  
                        $("input[name=edit_email]").focus(); 
                    }
                    if (/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/.test(got))  
                    {  
                        return(true)  
                    }  
                    //alert("You have entered an invalid email address!")  
                    $("input[name=edit_email]").focus();
                    return(false)  
             } 
		  </script>





    <script src="../assets/pages/scripts/spinner_page_lodar.js"></script>
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