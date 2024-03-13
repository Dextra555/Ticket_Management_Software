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
                                                <span class="profile_name username-hide-mobile"></span>
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
                                        <h1>User Details Here
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
																	<i class="fa fa-gift"></i>Create New User</div>
																<div class="tools">
																	<a href="javascript:;" class="collapse"> </a>
																</div>
															</div>
															<div class="portlet-body">
																<div class="tabbable-line">
																	<ul class="nav nav-tabs ">
																		<li class="active">
																			<a href="#tab_15_1" data-toggle="tab"> User </a>
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
																								<span class="caption-subject"> Use the form below to create or edit User. </span>
																							</div>
																							<div class="actions">
																							</div>
																						</div>
																						<div class="portlet-body">
																							<div class="table-toolbar">
																								<div class="row">
																									<div class="col-md-6">
																										<div class="btn-group">
                                                                                                            <?php 
                                                                                                                if(in_array(19, $navigation_no))
                                                                                                                  {
                                                                                                                ?>
																											<button data-target="#create_new_customer" data-toggle="modal" class="btn sbold green">New User
																												<i class="fa fa-plus"></i>
																											</button> 
                                                                                                            <?php 
                                                                                                                } 
                                                                                                            ?>
																										</div>
																									</div>
																									
																								</div>
																							</div>
																							<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
																								<thead>
																									<tr>
																										
																										<th> S.No </th>
																										<th> User Name </th>
																										<th> Email </th>
																										<th> Address </th>
																										<th> Contact Number </th>
																										<th> Status </th>
																										<th> Actions Made </th>
																									</tr>
																								</thead>
																								<tbody>
																								 <?php
																								for ($i=0;$i<count($customer_details);$i++)
																								{
																								?>
																									<tr class="odd gradeX">
																										
                                                                                                        <!-- <td><?php echo $customer_details[$i]['id']; ?> </td> -->
																										<td><?php echo $i+1; ?> </td>
																										<td><?php echo $customer_details[$i]['name']; ?> </td>
																										<td><?php echo $customer_details[$i]['email']; ?></td>
																										<td><?php echo $customer_details[$i]['address']; ?></td>
																										<td><?php echo $customer_details[$i]['contact_number']; ?></td>
																										<td class="align_change_status"><span class="  label label-sm label-success"> Active </span></td>
																										<td>
                                                                                                        <?php 
                                                                                                        if(in_array(20, $navigation_no))
                                                                                                          {
                                                                                                        ?>
                                                                                                            <a href="#" data-target="#view_customer_details" data-toggle="modal" data-id="<?php echo $customer_details[$i]['customer_id']; ?>" class="view_customer_details btn btn-sm btn-outline grey-salsa" title="view"><i class="fa fa-eye"></i></a>
                                                                                                    <?php 
                                                                                                          }
                                                                                                          /*if(in_array(21, $navigation_no))
                                                                                                          {
                                                                                                        ?>
                                                                                                            <a href="#" data-target="#edit_customer_details" data-toggle="modal" data-id="<?php echo $customer_details[$i]['customer_id']; ?>" class="edit_customer_details btn btn-sm btn-outline grey-salsa" title="edit"><i class="fa fa-edit"></i></a>
                                                                                                            <?php 
                                                                                                          }*/
                                                                                                          if(in_array(23, $navigation_no))
                                                                                                          {
                                                                                                    ?>
                                                                                                            <a href="javascript:;" data-id='<?php echo $customer_details[$i]['customer_id']; ?>' class="delete_customer_details btn btn-sm btn-outline grey-salsa" title="delete"><i class="fa fa-trash-o"></i></a>
                                                                                                             <?php 
                                                                                                          }
                                                                                                    ?>
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
                       
                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->
                        <a href="javascript:;" class="page-quick-sidebar-toggler">
                            <i class="icon-login"></i>
                        </a>
                        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                            <div class="page-quick-sidebar">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                            <span class="badge badge-danger">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                            <span class="badge badge-success">7</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-bell"></i> Alerts </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-info"></i> Notifications </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-speech"></i> Activities </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-settings"></i> Settings </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                            <h3 class="list-heading">Staff</h3>
                                            <ul class="media-list list-items">
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-success">8</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Bob Nilson</h4>
                                                        <div class="media-heading-sub"> Project Manager </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Nick Larson</h4>
                                                        <div class="media-heading-sub"> Art Director </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-danger">3</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Deon Hubert</h4>
                                                        <div class="media-heading-sub"> CTO </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Ella Wong</h4>
                                                        <div class="media-heading-sub"> CEO </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <h3 class="list-heading">Users</h3>
                                            <ul class="media-list list-items">
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-warning">2</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Lara Kunis</h4>
                                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="label label-sm label-success">new</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                                        <div class="media-heading-sub"> Project Manager,
                                                            <br> SmartBizz PTL </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Lisa Stone</h4>
                                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-success">7</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Deon Portalatin</h4>
                                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Irina Savikova</h4>
                                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-danger">4</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Maria Gomez</h4>
                                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="page-quick-sidebar-item">
                                            <div class="page-quick-sidebar-chat-user">
                                                <div class="page-quick-sidebar-nav">
                                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                                        <i class="icon-arrow-left"></i>Back</a>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-messages">
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> When could you send me the report ? </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Alright. Thanks! :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:16</span>
                                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> No probs. Just take your time :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Alright. I just emailed it to you. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Please let me know if you have any comment. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-form">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn green">
                                                                <i class="icon-paper-clip"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                                        <div class="page-quick-sidebar-alerts-list">
                                            <h3 class="list-heading">General</h3>
                                            <ul class="feeds list-items">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-danger">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <h3 class="list-heading">System</h3>
                                            <ul class="feeds list-items">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-danger">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-warning">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-default "> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                                        <div class="page-quick-sidebar-settings-list">
                                            <h3 class="list-heading">General Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Enable Notifications
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Allow Tracking
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Log Errors
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Auto Sumbit Issues
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Enable SMS Alerts
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <h3 class="list-heading">System Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Security Level
                                                    <select class="form-control input-inline input-sm input-small">
                                                        <option value="1">Normal</option>
                                                        <option value="2" selected>Medium</option>
                                                        <option value="e">High</option>
                                                    </select>
                                                </li>
                                                <li> Failed Email Attempts
                                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                                <li> Secondary SMTP Port
                                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                                <li> Notify On System Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Notify On SMTP Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <div class="inner-content">
                                                <button class="btn btn-success">
                                                    <i class="icon-settings"></i> Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END QUICK SIDEBAR -->
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
			<div id="create_new_customer" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="700">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Create New User</div>
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
                                                            <input type="text" class="form-control" name="customer_name" id="form_control_1" placeholder="User Name">
                                                            <label for="form_control_1"> Name
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type User Name...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="email" id="form_control_1" placeholder="Email id">
                                                            <label for="form_control_1">Email
                                                            </label>
                                                            <span class="help-block">Type Email Id...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="customer_address" rows="3"></textarea>
                                                            <label for="form_control_1">Address
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type contact address here...</span>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                       <div class="form-group form-md-line-input has-success">
                                                            <input type="number" class="form-control" name="contact_number" id="form_control_1" placeholder="12345678">
                                                            <label for="form_control_1">Contact Number
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Contact Number between 8 Digits Only (ex.12345678)</span>
                                                        </div>
		                                              <div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="username" id="form_control_1" placeholder="User name">
                                                            <label for="form_control_1"> User Name
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type User name...</span>
                                                        </div>
														<div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="password" id="form_control_1" placeholder="User name">
                                                            <label for="form_control_1"> Password
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Password...</span>
                                                        </div>
                                                     </div>
													  

                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">

                                                        <button type="submit" id="new_customer" class="btn green">Create User</button>
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
            <div id="view_customer_details" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>View User Details</div>
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
                                                            <input type="text" class="form-control" name="view_customer_name" id="form_control_1" placeholder="User Name" disabled>
                                                            <label for="form_control_1"> Name</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <input type="text" class="form-control" name="view_email" id="form_control_1" placeholder="Email id" disabled>
                                                            <label for="form_control_1">Email</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <textarea class="form-control" name="view_customer_address" rows="3" disabled></textarea>
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
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="customer_invoice_view">
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
            <div id="edit_customer_details" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="700">
				<div class="modal-body">
					<div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Edit User Details</div>
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
															<input type="text" class="form-control" name="edit_customer_name" id="form_control_1" placeholder="Customer name">
															<label for="form_control_1"> Name
																<span class="required">*</span>
															</label>
															<span class="help-block">Type User name...</span>
														</div>
														<div class="form-group form-md-line-input has-success">
															<input type="text" class="form-control" name="edit_email" id="form_control_1" placeholder="Email id">
															<label for="form_control_1">Email
															</label>
															<span class="help-block">Type Email Id...</span>
														</div>
														<div class="form-group form-md-line-input has-success">
															<textarea class="form-control" name="edit_customer_address" rows="3"></textarea>
															<label for="form_control_1">Address
                                                            <span class="required">*</span></label>
															<span class="help-block">Type contact address here...</span>
														</div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <select class="form-control" name="edit_category_customer">
                                                                <option value="">Select</option>
                                                                <option value="1">Residential</option>
                                                                <option value="2">Companies</option>
                                                                <option value="3">Contract</option>
                                                                <option value="4">Agents</option>
                                                                <option value="7">Admin</option>
                                                                <option value="6">Others</option>
                                                            </select>
                                                            <label for="form_control_1">Category of User
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
                                                        <input type="text" class="form-control hide" name="edit_customer_id_value" id="form_control_1" placeholder="Contact number">
													 </div>
												</div>
												
                                            </div>
											
											<div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" id="update_customer_details" class="btn green">Update User Details</button>
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
            <div id="view_invoice_details" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
                  <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>View Invoice Details</div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                           <!--  <a href="#portlet-config" data-toggle="modal" class="config"> </a> -->
                                            <!-- <a href="" class="reload"> </a> -->
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM http://localhost/cityaircon/print_invoice.php   -->
                                        <form action="http://cityiceaircon.com.sg/staffportal/print_invoice.php" method="post" id="form_sample_4">
                                            <div class="form-body">
                                                <div class="row">
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="view_invoice_number" id="form_control_1" placeholder="Enter Name" readonly >
                                                            <!-- <input type="text" class="form-control hide" name="view_invoice_id" id="form_control_1" placeholder="Enter Name" readonly> -->
                                                            <label for="form_control_1">Invoice No 
                                                            </label>
                                                            <span class="help-block">Type Name...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="view_invoice_date" id="form_control_1" placeholder="Enter Name" readonly>
                                                            <input type="text" class="form-control hide" name="view_invoice_date_time" id="form_control_1" placeholder="Enter Name" readonly>
                                                                <label for="form_control_1">Invoice Date 
                                                                </label>
                                                            <span class="help-block">Type Name...</span>
                                                        </div>
                                                            <div id="line">
                                                              <hr style="" />
                                                            </div>
                                                    <div class="col-md-6">
                                                           
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="view_name" id="form_control_1" placeholder="Enter Name" readonly>
                                                            <input type="text" class="form-control hide" name="view_signature" id="form_control_1" placeholder="Enter Name" readonly>
                                                            <label for="form_control_1">Name 
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Name...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="view_contact_no" id="form_control_1" placeholder="Enter Contact Number" readonly>
                                                            <label for="form_control_1">Contact No 
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Contact Number...</span>
                                                        </div>
                                                         <div class="form-group form-md-line-input">
                                                                <textarea class="form-control" name="view_address" rows="3" readonly></textarea>
                                                                <label for="form_control_1">Address
                                                                <span class="required">*</span></label>
                                                                <span class="help-block">Enter address here...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="view_email" placeholder="Enter email" readonly>
                                                                <label for="form_control_1">Email</label>
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                             <div class="form-group">
                                                                    <input class="form-control form-control-inline input-medium" name="view_service_date" size="2" placeholder="Pick date" type="text" value="" readonly/>                                                                    <label for="form_control_1">Servicing Date
                                                                    <span class="required">*</span></label>
                                                                    <span class="help-block">Select date...</span>
                                                             </div>
                                                        </div>
                                                         <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="view_service_by" id="form_control_1" placeholder="Servicing by name" readonly>
                                                            <label for="form_control_1">Servicing By 
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Service by...</span>
                                                        </div>  
                                                    </div>
                                                                                                    
                                                    <div class="col-md-12">
                                                       <div id="line">
                                                         <hr style="" />
                                                       </div>
                                                                                                             
                                                <!-- <div class="add_service_headers"> -->
                                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="add_bulk_service_invoice">
                                                                    <thead>
                                                                        <tr>
                                                                            <th> Services </th>
                                                                            <th> No of Unit(s)</th>
                                                                            <th> Warranty </th>
                                                                            <th> Package Price($) </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    
                                                                    </tbody>
                                                                </table>  
                                                        <!-- </div> -->
                                                <div class="row">
                                                     <div class="col-md-6">
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="view_toal_amount" id="form_control_1" placeholder="Enter Total Amount" readonly>
                                                            <label for="form_control_1">Total Amount ($)</label>
                                                            <span class="help-block">Type Total Amount ($)...</span>
                                                        </div>
                                                       
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="view_pament_mode" id="form_control_1" placeholder="View Payment Mode" readonly>
                                                                <!-- <select class="form-control" name="view_pament_mode" readOnly >
                                                                    <option value="">Select</option>
                                                                    <option value="CASH">CASH</option>
                                                                    <option value="CHEQUE">CHEQUE</option>
                                                                    <option value="BANK TRANSFER">BANK TRANSFER</option>
                                                                </select> -->
                                                                <label for="form_control_1">Payment Mode
                                                                <span class="required">*</span></label>
                                                                <span class="help-block">Payment Mode</span>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-6">
                                                         <div class="form-group form-md-line-input" >
                                                            <input type="text" class="form-control" name="view_payment_remarks" id="form_control_1" placeholder="Enter Payment Remarks" readonly>
                                                            <label for="form_control_1">Payment Remarks</label>
                                                            <span class="help-block">Type Payment Remarks:...</span>
                                                        </div>  
                                                    </div>
                                                 </div> 
                                                 <input type="text" class="form-control hide" name="view_invoice_id_value" id="form_control_1" placeholder="Enter Payment Remarks" readonly>
                                                    <div id="line">
                                                      <hr style="" />
                                                    </div>
                                          </div>
                                                <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-md-line-input">
                                                                <textarea class="form-control" name="view_remarks" rows="2" readonly></textarea>
                                                                <label for="form_control_1">Remarks
                                                                </label>
                                                                <span class="help-block">Enter Remarks here...</span>
                                                            </div>
                                                        </div>
                                                </div>

                                                </div>
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" class="btn green">Print Invoice</button>
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
		<script src="../assets/pages/scripts/cityairjs/customer.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/cityairjs/invoice.js" type="text/javascript"></script>
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