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
                                        <h1>Branch Master
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
																     <i class="fa fa-gift"></i>Branch Master</div>
																<div class="tools">
																	<a href="javascript:;" class="collapse"> </a>
																</div>
															</div>
															<div class="portlet-body">
																<div class="tabbable-line">
																	<ul class="nav nav-tabs ">
																		<li class="active">
																			<a href="#tab_15_1" data-toggle="tab">Branch Master </a>
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
																								<i class="icon-settings font-dark"></i>	<span class="caption-subject"> Create / Edit Branch </span>
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

																											<button data-target="#static" data-toggle="modal" class="btn sbold green ">Create New Branch
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
                                                                                            <table class="table table-striped table-bordered table-checkable order-column" id="sample_3">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th> S.No </th>
                                                                                                       <!-- <th> Branch name </th>-->
                                                                                                        <th>Branch Name</th>
                                                                                                        <th>Address</th>
                                                                                                       <th> Actions </th>
                                                                                                    
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                <?php
                                                                                                for ($i=0;$i<count($branch_details);$i++)
                                                                                                {
                                                                                                ?>
                                                                                                <tr>
                                                                                                    <!-- <td><?php echo $branch_details[$i]['branch_id']; ?></td> -->
                                                                                                    <td><?php echo $i+1; ?> </td>
                                                                                                    <td><?php echo $branch_details[$i]['branch_name']; ?></td>

                                                                                                    <td><?php echo $branch_details[$i]['address']; ?></td>
                                                                                                    <td class="align_changepass">
                                                                                                            <a href="#" data-target="#view_branch_details" data-toggle="modal" class="view_branch_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $branch_details[$i]['branch_id'];?>' title="view"><i class="fa fa-eye"></i></a>

                                                                                                    <a href="#" data-target="#edit_branch_details" data-toggle="modal" class="edit_branch_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $branch_details[$i]['branch_id'];?>' title="edit"><i class="fa fa-edit"></i></a>
																									<a href="javascript:;" data-id ='<?php echo $branch_details[$i]['branch_id'];?>' class="branch_delete btn btn-sm btn-outline grey-salsa " title="delete"><i class="fa fa-trash-o"></i></a>
                                                                                                    
                                                                                                    </td>

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
                                            <i class="fa fa-gift"></i> Add New Branch Here </div>
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
															<input type="text" class="form-control" name="branch_name" maxlength="50" id="form_control_1" placeholder="Branch Name" tabindex="2">
															<label for="form_control_1">Branch Name
																<span class="required">*</span>
															</label>
															<span class="help-block">Enter Branch Name ...</span>
														</div>

														 
													</div>
													<div class="col-md-6">
                                                            <div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="branch_address" rows="1"></textarea>
                                                            <label for="form_control_1">Address
                                                                <!--<span class="required">*</span>-->
                                                            </label>
                                                            <span class="help-block">Type Branch Address Here...</span>
                                                        </div>


													</div>
												</div>
                                            </div>
											
											<div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" id="save_branch" class="btn green">Add Branch</button>
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

            <div id="view_branch_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>View Selected Branch Master Details</div>
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
													<div class="form-group form-md-line-input">
															<input type="text" class="form-control" name="vbranch_name" maxlength="50" id="form_control_1" placeholder="Branch Name" tabindex="2">
															<label for="form_control_1">Branch Name
																<span class="required">*</span>
															</label>
															<span class="help-block">Enter Branch Name ...</span>
														</div>

														
													</div>
													<div class="col-md-6">

														 <div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="vbranch_address" rows="1"></textarea>
                                                            <label for="form_control_1">Address
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Branch Address Here...</span>
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
            <div id="edit_branch_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Edit Selected Branch Master And Update It Here!</div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                        <form action="javascript:;" id="edit_branch">
                                             <div class="form-body">
												<div class="row">
													<div class="col-md-6">
													<div class="form-group form-md-line-input">
													<input type="text" class="form-control hide" name="edit_branch_id">
															<input type="text" class="form-control" name="ebranch_name" maxlength="50" id="form_control_1" placeholder="Branch Name" tabindex="2">
															<label for="form_control_1">Branch Name
																<span class="required">*</span>
															</label>
															<span class="help-block">Enter Branch Name ...</span>
														</div>

														
													</div>
													<div class="col-md-6">

													 <div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="ebranch_address" rows="1"></textarea>
                                                            <label for="form_control_1">Address
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Branch Address Here...</span>
                                                        </div>

													</div>
												</div>
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" id="update_branch_details" class="btn green">Update Branch Master</button>
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
        <script src="../assets/pages/scripts/cityairjs/branch.js" type="text/javascript"></script>
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