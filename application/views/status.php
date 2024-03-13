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
                                                 <span><?php echo $name; ?></span>
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
                                        <h1>Status Master Details Here
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
																	<i class="fa fa-gift"></i>Status Master</div>
																<div class="tools">
																	<a href="javascript:;" class="collapse"> </a>
																</div>
															</div>
															<div class="portlet-body">
																<div class="tabbable-line">
																	<ul class="nav nav-tabs ">
																		<li class="active">
																			<a href="#tab_15_1" data-toggle="tab">Status Master</a>
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
																								<span class="caption-subject"> Use the form below to create status. </span>
																							</div>
																							<div class="actions">
																							</div>
																						</div>
																						<div class="portlet-body">
																							<div class="table-toolbar">
																								<div class="row">
																									<div class="col-md-6">
																										<div class="btn-group">

																											<button data-target="#create_new_status" data-toggle="modal" class="btn sbold green">New status
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
																										<th> status Name </th>
																										<!--<th> Actions Made </th>-->
																									</tr>
																								</thead>
																								<tbody>
																								 <?php
																								for ($i=0;$i<count($status_details);$i++)
																								{
																								?>
																									<tr class="odd gradeX">
																										
                                                                                                        <!-- <td><?php echo $status_details[$i]['status_id']; ?> </td> -->
																										<td><?php echo $i+1; ?> </td>
																										<td><?php echo $status_details[$i]['status_name']; ?> </td>
																									
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
			<div id="create_new_status" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="700">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Create New status</div>
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
                                                            <input type="text" class="form-control" name="status_name" id="form_control_1" placeholder="Status Name">
                                                            <label for="form_control_1">Status Name
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Status Name...</span>
                                                        </div>
                                                    </div>
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">

                                                        <button type="submit" id="new_status" class="btn green">Create status</button>
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
		<script src="../assets/pages/scripts/cityairjs/status.js" type="text/javascript"></script>
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