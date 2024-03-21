<style>
.form-group.form-md-line-input {
    margin: 0 0 25px !important;
    padding-top: 17px !important;
}
/* Arthy */
.form .form-body,
.portlet-form .form-body {
    padding: 12px !important;
}

label {
    font-weight: 400;
    word-break: break-word;
}
</style>
<?php include("header.php");
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

                                    <!-- END INBOX DROPDOWN -->
                                    <!-- BEGIN USER LOGIN DROPDOWN -->
                                    <li class="dropdown dropdown-user dropdown-dark">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"
                                            data-hover="dropdown" data-close-others="true">
                                            <img alt="" class="img-circle" id="profile_image"
                                                src="../assets/layouts/layout3/img/avatar3_small.png">
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
                                    <h1>Tickets
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
                                  <!-- <div class="form-group form-md-line-input">
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
                                                        <?php if($role !="3") { ?>
                                                        <i class="fa fa-gift"></i>Create New Ticket
                                                    </div>
                                                    <?php } else {?> <i class="fa fa-gift"></i>View Assigned Tickets
                                                </div><?php } ?>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tabbable-line">
                                                    <ul class="nav nav-tabs ">
                                                        <li class="active">
                                                            <a href="#tab_15_1" data-toggle="tab">Ticket </a>
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
                                                                                <i class="icon-settings font-dark"></i>
                                                                                <?php if($role !="3") { ?> <span
                                                                                    class="caption-subject"> Create /
                                                                                    Edit Tickets </span><?php } else {?>
                                                                                <span class="caption-subject"> Use the
                                                                                    below form to edit tickets.
                                                                                </span><?php } ?>
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

                                                                                            <button
                                                                                                data-target="#create_new_ticket"
                                                                                                data-toggle="modal"
                                                                                                class="btn sbold green create_new_ticket">Create
                                                                                                New Ticket
                                                                                                <i
                                                                                                    class="fa fa-plus"></i>
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


                                                                                <div class="row">
                                                                                    <form action="#" id="form_sample_2">

                                                                                        <div class="form-body">
                                                                                            <div class="col-md-3">
                                                                                                <label
                                                                                                    for="form_control_1">Ticket
                                                                                                    From Date </label>
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <input
                                                                                                        class="form-control form-control-inline input-medium"
                                                                                                        id="startdDate"
                                                                                                        name="ticket_from"
                                                                                                        size="2"
                                                                                                        placeholder="Ticket From Date"
                                                                                                        type="text" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <label
                                                                                                    for="form_control_1">Ticket
                                                                                                    To Date </label>
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <input
                                                                                                        class="form-control form-control-inline input-medium"
                                                                                                        id="enddDate"
                                                                                                        name="ticket_before"
                                                                                                        size="2"
                                                                                                        placeholder="Ticket To Date"
                                                                                                        type="text" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-2">
                                                                                                <label
                                                                                                    for="form_control_1">Ticket
                                                                                                    Status</label>
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <select
                                                                                                        class="form-control"
                                                                                                        name="ticket_status"
                                                                                                        id="ticket_status">
                                                                                                        <option
                                                                                                            value="">
                                                                                                            Select
                                                                                                            Status
                                                                                                        </option>
                                                                                                        <?php $status = $this->db->query("select * from status")->result_array();
																	foreach($status as $stat){
																	?>
                                                                                                        <option
                                                                                                            value="<?php echo $stat['status_id']; ?>">
                                                                                                            <?php echo $stat['status_name']; ?>
                                                                                                        </option>

                                                                                                        <?php	}
																?>

                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-4"><br>
                                                                                                <button
                                                                                                    id="search_result"
                                                                                                    class="btn green">Search
                                                                                                    Records</button>
                                                                                                <!-- <button type="reset" id="reset_results" class="btn default">Reset</button> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div></br>
                                                                                </br>
                                                                                </br>
                                                                                </br>
                                                                                <table
                                                                                    class="table-scrollable table table-striped table-bordered table-checkable order-column"
                                                                                    id="sample_1">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <!--<th> S.No </th>-->
                                                                                            <th> Ticket No </th>
                                                                                            <!--<th> Request Date </th>-->
                                                                                            <th> Customer Name </th>
                                                                                            <!-- <th> Company Name </th> -->
                                                                                            <!--<th> Contact Person </th>-->
                                                                                            <th> Contact No </th>
                                                                                            <th>Created Date</th>
                                                                                            <th> Modified Date</th>
                                                                                            <th> Turn arround time </th>
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
                                                                                            if(isset($_REQUEST['status']) && (!empty($_REQUEST['status']))){
                                                                                                if($ticket_details[$i]['issue_status'] != $_REQUEST['status']){
                                                                                                    continue;
                                                                                                    
                                                                                                }
                                                                                                
                                                                                            }
                                                                                    		
                                                                                    	?>
                                                                                        <tr class="odd gradeX">
                                                                                            <!-- <td>
                                                                                    				<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                    					<input type="checkbox" class="checkboxes" value="1" />
                                                                                    					<span></span>
                                                                                    				</label>
                                                                                    			</td> -->
                                                                                            <!--<td><?php echo $id = $ticket_details[$i]['ticket_id']; ?> </td> -->
                                                                                            <!--<td><?php echo $i+1; ?> </td>-->
                                                                                            <td><?php echo  $ticket_details[$i]['ticket_number']; ?>
                                                                                            </td>
                                                                                            <?php
                                                                                    				$req_date = date("Y-m-d",strtotime($ticket_details[$i]['request_date']));

                                                                                    			?>
                                                                                            <!--<td><?php echo $req_date; ?></td>-->
                                                                                            <td><?php echo $name = $ticket_details[$i]['name']; ?>
                                                                                            </td>
                                                                                            <!-- <td><?php echo $company_name = $ticket_details[$i]['company_name']; ?>
                                                                                            </td> -->
                                                                                            <!--<td ><?php echo $contact_person = $ticket_details[$i]['contact_person']; ?></td> -->
                                                                                            <td><?php echo $contact_number = $ticket_details[$i]['contact_number']; ?>
                                                                                            </td>
                                                                                            <td><?php echo $ticket_details[$i]['created_at']; ?>
                                                                                            </td>
                                                                                            <td><?php echo $updated_at = date('Y-m-d H:i:s',strtotime($ticket_details[$i]['updated_at'])); ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <?php

                                                                                                    $startDateString=$ticket_details[$i]['created_at'];
                                                                                                    $endDateString=$ticket_details[$i]['updated_at'];

                                                                                                    $startDate = new DateTime($startDateString);
                                                                                                    $endDate = new DateTime($endDateString);

                                                                                                    $dateInterval = $startDate->diff($endDate);
                                                                                                    $totalDays = $dateInterval->days;


                                                                                                    $totalSeconds = $dateInterval->s + ($dateInterval->i * 60) + ($dateInterval->h * 3600) + ($dateInterval->days * 86400);

                                                                                                    // Calculate total hours, minutes, and seconds
                                                                                                    $totalHours = floor($totalSeconds / 3600);
                                                                                                    $totalMinutes = floor(($totalSeconds % 3600) / 60);
                                                                                                    $totalSeconds = $totalSeconds % 60;
                                                                                                    
                                                                                                    echo  $totalDays ."days -". $totalHours .":". $totalMinutes .":". $totalSeconds;
                                                                                                    // echo "Total Time: " . $totalHours . " hours, " . $totalMinutes . " minutes, " . $totalSeconds . " seconds\n";
                                                                                                ?>
                                                                                                </td>
                                                                                            </td>
                                                                                            <td><?php echo $ticket_details[$i]['updated_by']; ?>
                                                                                            </td>
                                                                                           

                                                                                            <?php  
                                                                                    					$ticket_status = $ticket_details[$i]['issue_status'];
                                                                                    				if( $ticket_status == '1')
                                                                                    					{
                                                                                    				?>
                                                                                            <td><span class="label"
                                                                                                    style="background: blue;font-weight: 500;">
                                                                                                    New </span></td>

                                                                                            <?php 
                                                                                    					} else if( $ticket_status == '2'){?>

                                                                                            <td><span class="label"
                                                                                                    style="background: yellow;font-weight: 500;color:unset">
                                                                                                    In Progress </span>
                                                                                            </td>

                                                                                            <?php	} else if( $ticket_status == '3'){?>

                                                                                            <td><span class="label"
                                                                                                    style="background: green;font-weight: 500;">Resolved
                                                                                                </span></td>

                                                                                            <?php	} else if( $ticket_status == '4'){?>

                                                                                            <td><span class="label"
                                                                                                    style="background: magenta;font-weight: 500;">Amend</span>
                                                                                            </td>

                                                                                            <?php	}  else if( $ticket_status == '5'){?>

                                                                                            <td><span class="label"
                                                                                                    style="background: orange;font-weight: 500;">Hold</span>
                                                                                            </td>

                                                                                            <?php	}  else if( $ticket_status == '6'){?>
                                                                                            <td><span class="label"
                                                                                                    style="background: gray;font-weight: 500;">Cancelled</span>
                                                                                            </td>

                                                                                            <?php	} ?>
                                                                                            




                                                                                            <td><a href="#"
                                                                                                    data-target="#view_ticket_details"
                                                                                                    data-toggle="modal"
                                                                                                    class="view_ticket_details btn btn-sm btn-outline grey-salsa"
                                                                                                    data-id='<?php echo $ticket_details[$i]['ticket_id']; ?>'
                                                                                                    title="view completed ticket"><i
                                                                                                        class="fa fa-eye"></i></a>
                                                                                                <?php if( $ticket_status != '3'){ ?>
                                                                                                <a href="#"
                                                                                                    data-target="#edit_ticket_details"
                                                                                                    data-toggle="modal"
                                                                                                    class="edit_ticket_details btn btn-sm btn-outline grey-salsa"
                                                                                                    data-id='<?php echo $ticket_details[$i]['ticket_id']; ?>'
                                                                                                    title="edit"><i
                                                                                                        class="fa fa-edit"></i></a>
                                                                                            </td>

                                                                                            <?php } } ?>
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


    <!-- BEGIN QUICK NAV -->
    <div class="quick-nav-overlay"></div>
    <!-- Modals starts here!-->
    <!-- static -->
    <div id="create_new_ticket" class="modal fade" data-backdrop="static" data-keyboard="false" data-width="1000">
        <div class="modal-body">
            <div class="portlet box" style="background-color: #168d90 !important;">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Create Ticket Here
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                        <!-- <a href="" class="reload"> </a> -->
                    </div>
                </div>
                <div class="portlet-body form" style="background-color: #e0f8ff !important;">
                    <!-- BEGIN FORM-->
                    <form action="create_ticket" method="post" id="form_img" enctype="multipart/form-data"
                        accept-charset="utf-8">
                        <div class="form-body">
                            <div class="row">
                                <?php 
												$username=$contact_number=$email=$address=$company="";
												if($role == "4"){
												$result = $this->User1_model->user_info($user_id);
			                                          if (count($result) > 0){ 
			                                            $user_id =  $result[0]['user_id'];
	                                                    $username =  $result[0]['user_name'];
														$contact_number =  $result[0]['mobile'];
														$email =  $result[0]['email'];
														// $address =  $result[0]['address'];
														// $company =  $result[0]['company'];
															} 	?>
                                <!--hidden element-->
<!-- customer_id-->
                                <input type="text" class="form-control hide" name="customer_id" id="form_control_1"
                                    placeholder="Enter name" value="<?php echo $user_id; ?>">
<!-- customer_id-->

<!-- customer_name-->
                                <input type="text" class="form-control hide" name="name"
                                    value="<?php echo $username; ?>">
<!-- customer_name-->


<!-- contact_number-->
                                <input type="text" class="form-control hide" name="contact_number"
                                    value="<?php echo $contact_number; ?>">
<!-- contact_number-->
                    
                                <!-- <input type="text" class="form-control hide" name="company_name" value="<?php echo $company; ?>"> -->
                                <!-- <input type="text" class="form-control hide" name="address" value="<?php echo $address; ?>"> -->
<!-- email -->
                                <input type="text" class="form-control hide" name="email" value="<?php echo $email; ?>">
                                
<!-- email -->
<!---------------------------------->
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
<!-- user_name -->
                                        <input type="text" class="form-control" name="name" id="form_control_1"
                                            placeholder="Enter Name" value="<?php echo $username; ?>" disabled>
                                        <label for="form_control_1">Name
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Name...</span>
                                    </div>
<!-- user_name -->
                                    <div class="form-group form-md-line-input has-success">
                                        <input type="number" class="form-control" name="contact_number"
                                            onchange="contact_validate()" minlength="8" id="form_control_1"
                                            placeholder="+651234567,12345678,1234567890"
                                            value="<?php echo $contact_number; ?>" disabled>
                                        <label for="form_control_1">Contact Number
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Type Contact Number between 8 or 10 Digits Only
                                            (ex.+651234567)</span>
                                    </div>
                                    <!-- <div class="form-group form-md-line-input">
															<input type="text" class="form-control" name="company_name" id="form_control_1" placeholder="Enter company Name" value="<?php echo 	$company ?>" disabled>
															<label for="form_control_1">Company Name
															</label>
															<span class="help-block">Enter Company Name...</span>
														  </div> -->

                                    <!-- <div class="form-group form-md-line-input">
																<textarea class="form-control" name="address" rows="1" placeholder="Enter Address" disabled><?php echo $address; ?></textarea>
																<label for="form_control_1">Address
                                                                <span class="required">*</span></label>
																<span class="help-block">Enter Address Here...</span>
														  </div> -->
                                    <div class="form-group form-md-line-input">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" id=""
                                                placeholder="Enter your email" value="<?php echo $email; ?>" disabled>
                                            <label for="form_control_1">Email
                                                <span class="required"></span></label>
                                            <span class="help-block">Enter Email Here...</span>
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>


                                    <!-- Location -->
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" id="location" name="location">
                                            <option value="">Select</option>
                                            <?php $locations = $this->db->query("select * from location")->result_array();
																	foreach($locations as $location){
																	?>
                                            <option value="<?php echo $location['location_id']; ?>">
                                                <?php echo $location['location_id']; ?></option>

                                            <?php	}
																?>
                                        </select>
                                        <label for="form_control_1">Location
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Select Location Here...</span>
                                    </div>
                                    <!-- Location -->


                                    <!-- Technician -->
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" id="technician" name="technician">
                                        <?php $techs = $this->db->query("select * from users where role=3")->result_array();
                                                foreach($techs as $tech){
                                                ?>
                                            <option value="<?php echo $tech['user_id']; ?>">Select</option>
                                            <?php } ?>
                                        </select>
                                        <label for="form_control_1">Technician
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Select Technician Here...</span>
                                    </div>
                                    <!-- Technician -->

                                    <!-- <div class="form-group form-md-line-input">
															<div class="form-group">
                                                                <input type="text" class="form-control" name="contact_person" id="form_control_1" placeholder="Enter Contact Person">
                                                                <label for="form_control_1">Contact Person
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <span class="help-block">Enter Contact Person...</span>
															</div>
														</div> -->


                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <!-- <div class="form-group form-md-line-input">
																<input type="text" class="form-control" name="device_location" placeholder="Enter Device Location">
																<label for="form_control_1">Device Location
																  <span class="required">*</span></label>
																<span class="help-block">Enter Device Location Here...</span>
														 </div> -->
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <input class="form-control" name="system" rows="1"
                                                placeholder="Device/System" />
                                            <label for="form_control_1">Device/System
                                                <span class="required">*</span></label>
                                            <span class="help-block">Enter Device/System Here...</span>
                                        </div>
                                    </div> -->



<!-- device -->
                                     <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <select class="form-control" id="system" name="system">
                                                    <option value="">Select</option>
                                                    <?php $devices = $this->db->query("select * from device")->result_array();
																	foreach($devices as $device){
																	?>
                                                    <option value="<?php echo $device['device_name']; ?>">
                                                        <?php echo $device['device_name']; ?></option>
                                                    <?php	}
																?>
                                                    <option value="other">Others</option>

                                                </select>
                                                <label for="form_control_1">Device/System
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Select Device/System Here...</span>
                                            </div>
                                        </div>



                                        <div id="deviceTextBox" class="hidden col-md-12">
                                            <!-- <label for="otherOption">Enter Other Option:</label> -->
                                            <input type="text" name="otherOption" id="deviceOption" placeholder="Enter Other Option">
                                        </div>





                                        
<!-- /device -->




                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <select class="form-control" id="dept" name="dept">
                                                <option value="">Select</option>
                                                <?php $depts = $this->db->query("select * from department")->result_array();
																	foreach($depts as $dept){
																	?>
                                                <option value="<?php echo $dept['dept_id']; ?>">
                                                    <?php echo $dept['dept_id']; ?></option>

                                                <?php	}
																?>
                                            </select>
                                            <label for="form_control_1">Department
                                                <span class="required">*</span>
                                            </label>
                                            <span class="help-block">Select Location Here...</span>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="subject"
                                                placeholder="Subject" />
                                            <label for="form_control_1">Subject
                                                <span class="required">*</span></label>
                                            <span class="help-block">Enter Subject Here...</span>
                                        </div>
                                    </div> -->



<!-- Subject -->
                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <select class="form-control" id="subject" name="subject">
                                                <option value="">Select</option>
                                                <?php $subjects = $this->db->query("select * from subject")->result_array();
																	foreach($subjects as $subject){
																	?>
                                                <option value="<?php echo $subject['subject_issue']; ?>">
                                                    <?php echo $subject['subject_issue']; ?></option>

                                                <?php	}
																?>
                                            </select>
                                            <label for="form_control_1">Subject
                                                <span class="required">*</span>
                                            </label>
                                            <span class="help-block">Select Subject Here...</span>
                                        </div>
                                    </div>
<!-- Subject -->


                                    

                                    <!-- <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <textarea class="form-control" name="issue_desc" rows="1"
                                                placeholder="Issue Description"></textarea>
                                            <label for="form_control_1">Issue Description
                                                <span class="required">*</span></label>
                                            <span class="help-block">Enter Issue Description Here...</span>
                                        </div>
                                    </div> -->



<!-- Issue Description -->
                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input">
                                            <select class="form-control" id="issue_desc" name="issue_desc">
                                                <option value="">Select</option>
                                                <?php $descriptions = $this->db->query("select * from description")->result_array();
																	foreach($descriptions as $description){
																	?>
                                                <option value="<?php echo $description['issue_name']; ?>">
                                                    <?php echo $description['issue_name']; ?></option>

                                                <?php	}
																?>
                                            </select>
                                            <label for="form_control_1">Issue Description
                                                <span class="required">*</span>
                                            </label>
                                            <span class="help-block">Select Issue Description Here...</span>
                                        </div>
                                    </div>
<!-- Issue Description -->

                                    <div class="col-md-12">
                                        <!-- <div class="form-group form-md-line-input">
															<select class="form-control" name="status" tabindex="6">
																<option value="">Select</option>
																<?php $status = $this->db->query("select * from status")->result_array();
																	foreach($status as $stat){
																	?>
																	<option value="<?php echo $stat['status_id']; ?>"><?php echo $stat['status_name']; ?></option>
																		
																<?php	}
																?>
															</select>
															<label for="form_control_1">Status
																<span class="required">*</span>
															</label>
															<span class="help-block">Select status here...</span>
														</div>-->
                                    </div>
                                    <div class="col-md-12">

                                        <div class="form-group form-md-line-input">
                                            <input type="file" class="form-control" name="attachment[]" multiple />
                                            <label for="form_control_1">Attachment
                                                <!-- <span class="required">*</span>-->
                                            </label>
                                            <span class="help-block">Choose Attachement Here</span>
                                        </div>
                                    </div> <?php }  else { ?>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="name" id="form_control_1"
                                                placeholder="Enter Name">
                                            <input type="text" class="form-control hide" name="customer_id"
                                                id="form_control_1" placeholder="Enter name">
                                            <label for="form_control_1">Name
                                                <span class="required">*</span>
                                            </label>
                                            <span class="help-block">Enter Name...</span>
                                        </div>
                                        <div class="form-group form-md-line-input has-success">
                                            <input type="text" class="form-control" name="contact_number" maxlength="10"
                                                id="form_control_1" placeholder="Enter Contact Number">
                                            <label for="form_control_1">Contact Number
                                                <span class="required">*</span>
                                            </label>
                                            <span class="help-block">Type Contact Number</span>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <input type="text" class="form-control" name="company_name"
                                                id="form_control_1" placeholder="Enter Company Name">
                                            <label for="form_control_1">Company Name
                                            </label>
                                            <span class="help-block">Enter Company Name...</span>
                                        </div>

                                        <div class="form-group form-md-line-input">
                                            <textarea class="form-control" name="address" rows="1"
                                                placeholder="Enter Address"></textarea>
                                            <label for="form_control_1">Address
                                                <span class="required">*</span></label>
                                            <span class="help-block">Enter Address Here...</span>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" id=""
                                                    placeholder="Enter Your Email">
                                                <label for="form_control_1">Email
                                                    <span class="required"></span></label>
                                                <span class="help-block">Enter Email Here...</span>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="contact_person"
                                                    id="form_control_1" placeholder="Enter Contact Person">
                                                <label for="form_control_1">Contact Person
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter Contact Person...</span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="device_location"
                                                    placeholder="Enter your device location">
                                                <label for="form_control_1">Device Location
                                                    <span class="required">*</span></label>
                                                <span class="help-block">Enter Device Location Here...</span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <input class="form-control" name="system" rows="1"
                                                    placeholder="Device/System" />
                                                <label for="form_control_1">Device/System
                                                    <span class="required">*</span></label>
                                                <span class="help-block">Enter Device/System Here...</span>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                       



                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <select class="form-control" name="branch">
                                                    <option value="">Select</option>
                                                    <?php $branches = $this->db->query("select * from branch")->result_array();
																	foreach($branches as $branch){
																	?>
                                                    <option value="<?php echo $branch['branch_id']; ?>">
                                                        <?php echo $branch['branch_name']; ?></option>

                                                    <?php	}
																?>
                                                </select>
                                                <label for="form_control_1">Branch
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Select Branch Here...</span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="subject"
                                                    placeholder="Subject" />
                                                <label for="form_control_1">Subject
                                                    <span class="required">*</span></label>
                                                <span class="help-block">Enter Subject Here...</span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <textarea class="form-control" name="issue_desc" rows="1"
                                                    placeholder="Issue Description"></textarea>
                                                <label for="form_control_1">Issue Description
                                                    <span class="required">*</span></label>
                                                <span class="help-block">Enter Issue Description Here...</span>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-12">
														 <div class="form-group form-md-line-input">
															<select class="form-control" name="service_engineer" tabindex="6">
																<option value="">Select</option>
																<?php $users = $this->db->query("select * from users where role='3'")->result_array();
																	foreach($users as $user){
																	?>
																	<option value="<?php echo $user['user_id']; ?>"><?php echo $user['name']; ?></option>
																		
																<?php	}
																?>
															</select>
															<label for="form_control_1">Service Engineer
																<span class="required">*</span>
															</label>
															<span class="help-block">Select Service Engineer here...</span>
														</div>
															</div>
															
															<div class="col-md-12">
														 <div class="form-group form-md-line-input">
															<select class="form-control" name="status" tabindex="6">
																<option value="">Select</option>
																<?php $status = $this->db->query("select * from status")->result_array();
																	foreach($status as $stat){
																	?>
																	<option value="<?php echo $stat['status_id']; ?>"><?php echo $stat['status_name']; ?></option>
																		
																<?php	}
																?>
															</select>
															<label for="form_control_1">Status
																<span class="required">*</span>
															</label>
															<span class="help-block">Select status here...</span>
														</div>
															</div>-->
                                        <div class="col-md-12">

                                            <div class="form-group form-md-line-input">
                                                <input type="file" class="form-control" name="attachment[]" multiple />
                                                <label for="form_control_1">Attachment
                                                    <!-- <span class="required">*</span>-->
                                                </label>
                                                <span class="help-block">Choose Attachement Here</span>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>


                                </div>
                                <div class="form-actions" style="background-color: #e0f8ff !important;">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" id="new_ticket" class="btn green">Create
                                                ticket</button>
                                            <button type="reset" class="btn default">Reset</button>
                                            <button type="button" data-dismiss="modal"
                                                class="btn btn-outline dark">Close</button>
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
    <!-- Pending edit tickets -->
    <div id="edit_ticket_details" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false"
        data-width="1000">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Edit Ticket Here
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                        <!-- <a href="#portlet-config" data-toggle="modal" class="config"> </a> -->
                        <!-- <a href="" class="reload"> </a> -->
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="#" id="edit_ticket_form" style="background-color: #e0f8ff !important;"
                        enctype="multipart/form-data" accept-charset="utf-8">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for=""><strong>Name :</strong> </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="name"> </label>
                                </div>

                                <div class="col-md-2">
                                    <label for=""><strong>Contact Number :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="contact_number"></label>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-md-2">
                                    <label for=""><strong>Company Name :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="company"></label>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><strong>Address :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="address"></label>
                                </div>
                            </div> -->

                            <div class="row">
                                <div class="col-md-2">
                                    <label for=""><strong>E-mail :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="email"></label>
                                </div>

                                <!-- <div class="col-md-2">
                                    <label for=""><strong>Contact Person :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="contact_person"></label>
                                </div> -->
                            </div>

                            <div class="row">
                                <!-- <div class="col-md-2">
                                    <label for=""><strong>Device Location:</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="device_location"></label>
                                </div> -->

                                <div class="col-md-2">
                                    <label for=""><strong>Device :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="system"></label>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-2">
                                    <label for=""><strong>Branch :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="branch">-</label>
                                </div> -->
                                <div class="col-md-2">
                                    <label for=""><strong>Subject :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="subject"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for=""><strong>Issue Description :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="issue_desc"></label>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><strong>Attachment :</strong></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="attachment"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div id="line">
                                    <hr style="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">
                                        <h4><strong>View Comments:</strong></h4>
                                    </label>
                                    <div id="comments">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div id="line">
                                    <hr style="">
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="update_id" />
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="service_engineer" tabindex="6"
                                            <?php //if($role == 3){ echo "disabled"; } ?>>
                                            <option value="">Select</option>
                                            <?php $users = $this->db->query("select * from users where role='3'")->result_array();
																	foreach($users as $user){
																	?>
                                            <option value="<?php echo $user['user_id']; ?>"><?php echo $user['user_name']; ?>
                                            </option>

                                            <?php	}
																?>
                                        </select>
                                        <label for="form_control_1">Service Engineer
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Select Service Engineer here...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="status" tabindex="6"
                                        <?php if($role == 4){ echo "disabled"; } ?>>
                                            <option value="">Select</option>
                                            <?php $status = $this->db->query("select * from status")->result_array();
																	foreach($status as $stat){
																	?>
                                            <option value="<?php echo $stat['status_id']; ?>">
                                                <?php echo $stat['status_name']; ?></option>

                                            <?php	}
																?>
                                        </select>
                                        <label for="form_control_1">Status
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Select status here...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <textarea id="comment-field" name="description" cols="10" rows="1"
                                            class="form-control" spellcheck="false"></textarea>
                                        <label for="form_control_1">Comments</label>
                                        <span class="help-block">Enter Comments Here...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="file" class="form-control" name="attachment[]" multiple />
                                        <label for="form_control_1">Attachment
                                            <!-- <span class="required">*</span>-->
                                        </label>
                                        <span class="help-block">Choose Attachement Here</span>
                                    </div>
                                </div>
                                <input type="hidden" name="user_role" value="<?php echo $role; ?>">
                            </div>
                        </div>


                        <div class="form-actions" style="background-color: #e0f8ff !important;">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                   
                                <button type="submit" id="pending_edit_ticket_update" class="btn green" <?php if($role == 4){ echo "disabled"; } ?>>Update
                                        Ticket</button>

                                    <button type="reset" class="btn default">Reset</button>
                                    <button type="button" data-dismiss="modal"
                                        class="button_closed btn btn-outline dark">Close</button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>

            </div>
        </div>
    </div>

    <div id="view_ticket_details" class="modal fade" data-backdrop="static" data-keyboard="false" data-width="800">
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

                            <!-- <div class="row">
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
                            </div> -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for=""><strong>E-mail :</strong></label>
                                </div>
                                <div class="col-md-8">
                                    <label for="email"></label>
                                </div>
                            </div>

                            <!-- <div class="row">
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
                            </div> -->
                            <div class="row">
                                <div class="col-md-3">
                                    <label for=""><strong>Device/System :</strong></label>
                                </div>
                                <div class="col-md-8">
                                    <label for="system"></label>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-3">
                                    <label for=""><strong>Branch :</strong></label>
                                </div>
                                <div class="col-md-8">
                                    <label for="branch">-</label>
                                </div>
                            </div> -->
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


    <script src="../assets/pages/scripts/cityairjs/ticket.js" type="text/javascript"></script>

    <!-- End loader pages here -->
    <script>
    $("#startdDate").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });
    $("#enddDate").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });
    $(document).ready(function() {

        var now = new Date();

        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);

        var today = now.getFullYear() + "-" + (month) + "-" + (day);


        $('#startdDate').val(today);
        $('#enddDate').val(today);

    });


    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });




    // Location to contact pesrion
    $(document).ready(function() {
        $('#location').change(function() {
            var location_id = $(this).val();
            //alert(location_id);
            // var branch = $(this).val();
            $.ajax({
                url: "<?php echo base_url()?>Ticket/get_technicians",
                method: 'POST',
                data: {
                    location_id: location_id
                },
                dataType: 'json',
                success: function(response) {
                    $('#technician').empty();
                    // Add new options based on the response
                    $.each(response, function(index, technicians) {
                        $('#technician').append('<option value="' + technicians
                            .user_id + '">' + technicians.user_name +
                            '</option>');
                    });
                }
            });
        });
    });





                                    document.getElementById("system").addEventListener("change", function() {
                                        
                                        var selectedOption = this.value;

                                        
                                        var deviceTextBox = document.getElementById("deviceTextBox");
                                        var deviceOptionInput = document.getElementById("deviceOption");

                                        if (selectedOption === "other") {
                                        deviceTextBox.classList.remove("hidden");
                                        deviceOptionInput.setAttribute("required", "required"); // Add required attribute if needed
                                        } else {
                                        deviceTextBox.classList.add("hidden");
                                        deviceOptionInput.removeAttribute("required"); // Remove required attribute if not needed
                                        }
                                    });

    </script>
</body>

</html>