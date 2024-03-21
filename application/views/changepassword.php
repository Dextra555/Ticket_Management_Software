<!DOCTYPE html>
<?php

$navigation_no = "";
$navigation_no  = (string)$menu_list;
$navigation_no = explode(',', $navigation_no);

?>
<html lang="en">
	<head>
        <meta charset="utf-8" />
        <title>Password Changes</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Admin Theme #3 for dashboard & statistics" name="description" />
        <meta content="" name="author" />
       <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <link href="../assets/pages/css/sweetalert.css" rel="stylesheet" type="text/css" />
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
		<!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="../uploads/favicon.png" type="image/gif" alt="favicon" />
          <style type="text/css">
               
            img.logo-default
                {
                    width: 200px !important;
                    margin: 12.5px 0 0 !important;
                }
            <?php

              if(in_array(31, $navigation_no))
                  {
            ?>
                div.dt-buttons 
                    {
                       display: block !important;
                    }
            <?php 
                }  
            else 
                {
            ?>
                   div.dt-buttons 
                    {
                       display: none !important;
                    }
            <?php
                }
            ?>
                .no-js #loader { display: none;  }
                .js #loader { display: block; position: absolute; left: 100px; top: 0; }
                .se-pre-con {
                    position: fixed;
                    left: 0px;
                    top: 0px;
                    width: 100%;
                    height: 100%;
                    z-index: 9999;
                    background: url(../assets/pages/img/images/loader-64x/Preloader_2.gif) center no-repeat #fff;
                    }  
        </style>

        </head>
    <!-- END HEAD -->

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
                                                <img alt="" class="img-circle" id="profile_image" src="../assets/layouts/layout3/img/avatar3_small.png">

                                                <span class="profile_name username-hide-mobile"> </span>
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
                                        <!-- BEGIN QUICK SIDEBAR TOGGLER -
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
                                        <h1>  Change your login password
                                            <small></small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                    <!-- BEGIN PAGE TOOLBAR -->
                                   
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
													   <div class="portlet box blue">
																<div class="portlet-title">
																	<div class="caption">
																		<i class="fa fa-gift"></i>Change Your Password Here! </div>
																	<div class="tools">
																		<a href="javascript:;" class="collapse"> </a>
																	</div>
																</div>
																<div class="portlet-body">
																	<div class="tabbable-line">
																		<ul class="nav nav-tabs">
			                                                                 <li class="active">
																				<a href="#tab_1_1_3" data-toggle="tab"> Change Password </a>
																			</li> 
																		</ul>
																		<div class="tab-content">
			                                                                       <div class="tab-pane active" id="tab_1_1_3">
                                                                                   <form id="reset_password" action="javascript:;">
                                                                                   <div class="form-group">
                                                                                    <label class="control-label">Current Password</label>
                                                                                    <input type="password" name="curent_pass" class="form-control" /> </div>
                                                                                   <div class="form-group">
                                                                                    <label class="control-label">New Password</label>
                                                                                    <input type="password" name="new_pass" class="form-control" /> </div>
                                                                                   <div class="form-group">
                                                                                    <label class="control-label">Re-type New Password</label>
                                                                                    <input type="password" name="re_pass" class="form-control" /> </div>
                                                                                   <div class="margin-top-10">
                                                                                        <button type="submit" id="staff_password_change" class="btn green">Change Password</button>
                                                                                        <button type="reset" class="btn default">Reset</button>
                                                                                    </div>
                                                                                  </form>
                                                                                </div>
																		</div>
																	</div>
																</div>
														</div>
													</div>
												<div class="clearfix"></div>
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
                                            <h3 class="list-heading">Customers</h3>
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
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12 footer-block">
                                    <h2>About</h2>
                                    <p> City Ice Air Conditioning serving Companies and homes since 2011 have received several accolades from our customers. </p>
                                </div>
                                <!-- <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                     <h2>Subscribe Email</h2>
                                    <div class="subscribe-form">
                                        <form action="javascript:;">
                                            <div class="input-group">
                                                <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div> 
                                </div> -->
                                <div class="col-md-4 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacts</h2>
                                    <address class="margin-bottom-40"> Phone: 97687248 / 97484712
                                                <br>
                                                     Address: 7030 Ang Mo Kio Avenue 5 #02-27, S569880
                                        <br> Email:
                                         <a href="mailto:admin@cityiceairconditioning.com">admin@cityiceairconditioning.com</a>
                                    </address>
                                </div>
                                 <div class="col-md-4 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="https://www.facebook.com/cityiceairconditioning539215/" data-original-title="facebook" class="facebook" target="_blank"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2019 © Copyright 2019 | All rights reserved. 
                            <a target="_blank" href="http://cityiceairconditioning.com">Cityiceaircon</a>
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
       <!-- Modals starts here!--> 
		<!-- static -->
		  <div id="new_staff_form" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i> Add new staff Account here </div>
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
                                                            <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Name">
                                                            <label for="form_control_1">Name
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Name...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="username" id="form_control_1" placeholder="User name">
                                                            <label for="form_control_1">User name
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type User name...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <input type="password" class="form-control" name="password" id="form_control_1" placeholder="Password">
                                                            <label for="form_control_1">Password
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Password ...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" name="email" placeholder="Staff email">
                                                            <label for="form_control_1">Email
                                                                <!-- <span class="required">*</span> -->
                                                            </label>
                                                            <span class="help-block">Type email...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <select class="form-control" name="role">
                                                                <option value="">Select</option>
                                                                <option value="tl">TeamLead</option>
                                                                <!-- <option value="js">Junior Service Engineer</option>
                                                                <option value="ss">Senior Service Engineer</option> -->
                                                            </select>
                                                            <label for="form_control_1">Role
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Select staff Role here...</span>
                                                        </div> 
                                                        
                                                        <div class="form-group form-md-line-input has-success">
                                                            <input type="number" class="form-control" name="contact_number" onchange="contact_validate()" minlength="8" maxlength="12" id="form_control_1" placeholder="+651234567,12345678,1234567890">
                                                            <label for="form_control_1">Contact Number
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Contact Number between 8 or 10 Digits Only (ex.+651234567)</span>
                                                        </div>
                                                            
                                                         
                                                    </div>
                                                    <div class="col-md-12">
                                                         <div class="form-group form-md-line-input">
                                                                <textarea class="form-control" name="address" rows="3"></textarea>
                                                                <label for="form_control_1">Address
                                                                <span class="required">*</span></label>
                                                                <span class="help-block">Type Address here...</span>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" id="save_new_staff" class="btn green">Add Staff</button>
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
            <div id="staff_edit_details" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
                <div class="modal-body">
                    <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i> Edit Staff Details</div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                        <form action="#" id="form_sample_3">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="edit_name" id="form_control_1" placeholder="Name">
                                                            <label for="form_control_1">Name
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Name...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="edit_username" id="form_control_1" placeholder="User name">
                                                            <label for="form_control_1">User name
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type User name...</span>
                                                            <input type="text" class="form-control hide" name="got_id_value_here" id="form_control_1" placeholder="id values here">
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <input type="password" class="form-control" name="edit_password" id="form_control_1" placeholder="Password">
                                                            <label for="form_control_1">Password
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Password ...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" name="edit_email" placeholder="Staff email">
                                                            <label for="form_control_1">Email
                                                                <!-- <span class="required">*</span> -->
                                                            </label>
                                                            <span class="help-block">Type email...</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <select class="form-control" name="edit_role">
                                                                <option value="">Select</option>
                                                                <option value="tl">TeamLead</option>
                                                               <!--  <option value="js">Junior Service Engineer</option>
                                                               <option value="ss">Senior Service Engineer</option> -->
                                                            </select>
                                                            <label for="form_control_1">Role
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Select staff Role here...</span>
                                                        </div> 
                                                        
                                                        <div class="form-group form-md-line-input has-success">
                                                            <input type="number" class="form-control" name="edit_contact_number" onchange="contact_validate()" minlength="8" maxlength="12" id="form_control_1" placeholder="+651234567,12345678,1234567890">
                                                            <label for="form_control_1">Contact Number
                                                                <span class="required">*</span>
                                                            </label>
                                                            <span class="help-block">Type Contact Number between 8 or 10 Digits Only (ex.+651234567)</span>
                                                        </div>
                                                            
                                                         
                                                    </div>
                                                    <div class="col-md-12">
                                                         <div class="form-group form-md-line-input">
                                                                <textarea class="form-control" name="edit_address" rows="3"></textarea>
                                                                <label for="form_control_1">Address
                                                                <span class="required">*</span></label>
                                                                <span class="help-block">Type Address here...</span>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-9">
                                                        <button type="submit" id="update_staff_details" class="btn green">Update Staff Information</button>
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
            <div id="staff_view_details" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="600">
				<div class="modal-body">
					<div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>View Staff Detils</div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         <!-- BEGIN FORM-->
                                        <form action="#" id="form_sample_2">
                                            <div class="form-body">
                                              <div class="row">
													<div class="col-md-12">
                                                        <div class="col-md-5">
                                                            <label for="">Name : </label><br/>
                                                            <label for="">User Name : </label><br/>
                                                            <label for="">User Password : </label><br/>
                                                            <label for="">User Email: </label><br/>
                                                             <label for="">User Role: </label><br/>
                                                             <label for="">User Contract Number: </label><br/>
                                                        </div>
                                                        <div class="col-md-7">
                                                             <label for="staff_name">name </label><br/>
                                                             <label for="staff_user_name">name </label><br/>
                                                             <label for="staff_password">Password </label><br/>
                                                             <label for="staff_email">Email </label><br/>
                                                             <label for="staff_role">Role </label><br/>
                                                             <label for="staff_contact_number">Contact Number </label><br/>
                                                        </div>
                                                       
													</div>
													<div class="col-md-12">
                                                        <div class="col-md-5">
                                                            <label for="">User Address: </label>
                                                        </div>
														<div class="col-md-7">
                                                            <label for="staff_address">Address </label><br/>
                                                        </div> <br/>    
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
		<!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
		
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
		<script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-table/bootstrap-table.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/form-validation-md.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<!-- BEGIN THEME LAYOUT SCRIPTS -->
		<script src="../assets/pages/scripts/cityairjs/admin.js" type="text/javascript"></script>
		<!-- End THEME LAYOUT SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- Begin loader pages here -->
        <script src="../assets/pages/scripts/spinner.js"></script>
        <script src="../assets/pages/scripts/spinner_progress.js"></script>
        <script src="../assets/pages/scripts/spinner_page_lodar.js"></script>
        <!-- End loader pages here -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
              function contact_validate()
            {
                var contact_number = $("input[name=contact_number]").val();
                if( !/^([\d]{8}|0)?[\+]?([\d]{10}|0)?$/.test(contact_number) )
                {
                    alert( "Enter Contact Number Correct Format!" );
                    $('input[name=contact_number]').focus();
                }
            }
        </script>
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