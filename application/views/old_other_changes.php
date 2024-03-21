<?php include "header.php";
$user_id = $this->session->userdata('USER_ID');
$role = $this->session->userdata('USER_ROLE');
?>

<body class="page-container-bg-solid">
    <div class="page-wrapper">

        <div class="page-wrapper-row">
            <div class="page-wrapper-top">
                <div class="page-header">
                    <div class="page-header-top">
                        <div class="container">
                            <div class="page-logo"></div>
                            <a href="javascript:;" class="menu-toggler"></a>
                            <div class="top-menu">
                                <ul class="nav navbar-nav pull-right">
                                    <li class="dropdown dropdown-user dropdown-dark">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"
                                            data-hover="dropdown" data-close-others="true">
                                            <img alt="" class="img-circle" id="profile_image"
                                                src="../assets/layouts/layout3/img/avatar3_small.png">
                                            <span><?php echo $name; ?></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-default">
                                            <li>
                                                <a href="../login/logout"><i class="icon-key"></i> Log Out </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   <?php $this->load->view('navigation');?>
                </div>
            </div>
        </div>
<!-- location code -->
        <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <div class="page-container">
                    <div class="page-content-wrapper">
                        <div class="page-head">
                            <div class="container">
                                <div class="page-title">
                                    <h1>Admin<small></small></h1>
                                </div>
                            </div>
                        </div>

                        <div class="page-content">
                            <div class="container">
                               <div class="page-content-inner">
                                    <div class="mt-content-body">
                                        <div class="se-pre-con"></div>
                                        <div class="row">
                                            <div class="portlet box green">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-gift"></i>Location Master
                                                    </div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tabbable-line">
                                                        <ul class="nav nav-tabs ">
                                                            <li id="location-tab" class="active">
                                                                <a href="#location-master" data-toggle="tab">Location Master </a>
                                                            </li>
                                                            <li id="department-tab">
                                                                <a href="#department-master" data-toggle="tab">Department Master </a>
                                                            </li> 
                                                            <li id="department-tab">
                                                                <a href="#view_user_manage" data-toggle="tab">User Master Device</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="location-master">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                                        <div class="portlet light bordered">
                                                                            <div class="portlet-title">
                                                                                <div class="caption font-dark">
                                                                                    <i class="icon-settings font-dark"></i>
                                                                                    <span class="caption-subject">Create / Edit Location </span>
                                                                                </div>
                                                                                <div class="actions"></div>
                                                                            </div>

                                                                            <div class="portlet-body">
                                                                                <div class="table-toolbar">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <?php if ($role != "3") {?>
                                                                                            <div class="btn-group">
                                                                                                <button data-target="#static" data-toggle="modal" class="btn sbold green ">Create New Location <i class="fa fa-plus"></i></button>
                                                                                            </div>
                                                                                            <?php }?>
                                                                                        </div>
                                                                                        <div class="pull-right">
                                                                                            <div class="actions"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </br></br>
                                                                                    <table class="table table-striped table-bordered table-checkable order-column" id="sample_3">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th> S.No </th>
                                                                                                <th>Location Name</th>
                                                                                                <th>Location id</th>
                                                                                                <th> Actions </th>
                                                                                            </tr>
                                                                                        </thead>

                                                                                        <tbody>
                                                                                            <?php for ($i = 0; $i < count($location_details); $i++) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $i + 1; ?> </td>
                                                                                                <td><?php echo $location_details[$i]['location']; ?></td>
                                                                                                <td><?php echo $location_details[$i]['location_id']; ?></td>
                                                                                                <td class="align_changepass">
                                                                                                    <a href="#" data-target="#view_location_details" data-toggle="modal" class="view_location_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $location_details[$i]['id']; ?>' title="view"><i class="fa fa-eye"></i></a>
                                                                                                    <a href="#" data-target="#edit_location_details" data-toggle="modal" class="edit_location_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $location_details[$i]['id']; ?>' title="edit"><i class="fa fa-edit"></i></a>
                                                                                                    <a href="javascript:;" data-id ='<?php echo $location_details[$i]['id']; ?>' class="location_delete btn btn-sm btn-outline grey-salsa " title="delete"><i class="fa fa-trash-o"></i></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
<!-- user device -->
                                                            <div class="tab-pane active" id="view_user_manage">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                                        <div class="portlet light bordered">
                                                                            <div class="portlet-title">
                                                                                <div class="caption font-dark">
                                                                                    <i class="icon-settings font-dark"></i>
                                                                                    <span class="caption-subject">Create Device Status </span>
                                                                                </div>
                                                                                <div class="actions"></div>
                                                                            </div>

                                                                            <div class="portlet-body">
                                                                                <div class="table-toolbar">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <?php if ($role != "3") {?>
                                                                                            <div class="btn-group">
                                                                                                <button data-target="#view_user" data-toggle="modal" class="btn sbold green ">Create Device Status <i class="fa fa-plus"></i></button>
                                                                                            </div>
                                                                                            <?php }?>
                                                                                        </div>
                                                                                        <div class="pull-right">
                                                                                            <div class="actions"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </br></br>
                                                                                    <table class="table table-striped table-bordered table-checkable order-column" id="sample_3">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th> S.No </th>
                                                                                                <th>Device Status</th>
                                                                                                <th> Actions </th>
                                                                                            </tr>
                                                                                        </thead>

                                                                                        <tbody>
                                                                                            <?php for ($i = 0; $i < count($device_details); $i++) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $i + 1; ?> </td>
                                                                                                <td><?php echo $device_details[$i]['id']; ?></td>
                                                                                                <!-- <td><?php echo $device_details[$i]['device_name']; ?></td> -->
                                                                                                <td class="align_changepass">
                                                                                                    <!-- <a href="#" data-target="#view_location_details" data-toggle="modal" class="view_location_details btn btn-sm btn-outline grey-salsa" data-id ='</?php echo $device_details[$i]['id']; ?>' title="view"><i class="fa fa-eye"></i></a>
                                                                                                    <a href="#" data-target="#edit_location_details" data-toggle="modal" class="edit_location_details btn btn-sm btn-outline grey-salsa" data-id ='</?php echo $device_details[$i]['id']; ?>' title="edit"><i class="fa fa-edit"></i></a> -->
                                                                                                    <a href="javascript:;" data-id ='<?php echo $device_details[$i]['id']; ?>' class="device_delete btn btn-sm btn-outline grey-salsa " title="delete"><i class="fa fa-trash-o"></i></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
<!-- location code -->

                                                            <div class="tab-pane active" id="location-master">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                                        <div class="portlet light bordered">
                                                                            <div class="portlet-title">
                                                                                <div class="caption font-dark">
                                                                                    <i class="icon-settings font-dark"></i>
                                                                                    <span class="caption-subject">Create / Edit Location </span>
                                                                                </div>
                                                                                <div class="actions"></div>
                                                                            </div>

                                                                            <div class="portlet-body">
                                                                                <div class="table-toolbar">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <?php if ($role != "3") {?>
                                                                                            <div class="btn-group">
                                                                                                <button data-target="#static" data-toggle="modal" class="btn sbold green ">Create New Location <i class="fa fa-plus"></i></button>
                                                                                            </div>
                                                                                            <?php }?>
                                                                                        </div>
                                                                                        <div class="pull-right">
                                                                                            <div class="actions"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </br></br>
                                                                                    <table class="table table-striped table-bordered table-checkable order-column" id="sample_3">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th> S.No </th>
                                                                                                <th>Location Name</th>
                                                                                                <th>Location id</th>
                                                                                                <th> Actions </th>
                                                                                            </tr>
                                                                                        </thead>

                                                                                        <tbody>
                                                                                            <?php for ($i = 0; $i < count($location_details); $i++) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $i + 1; ?> </td>
                                                                                                <td><?php echo $location_details[$i]['location']; ?></td>
                                                                                                <td><?php echo $location_details[$i]['location_id']; ?></td>
                                                                                                <td class="align_changepass">
                                                                                                    <a href="#" data-target="#view_location_details" data-toggle="modal" class="view_location_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $location_details[$i]['id']; ?>' title="view"><i class="fa fa-eye"></i></a>
                                                                                                    <a href="#" data-target="#edit_location_details" data-toggle="modal" class="edit_location_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $location_details[$i]['id']; ?>' title="edit"><i class="fa fa-edit"></i></a>
                                                                                                    <a href="javascript:;" data-id ='<?php echo $location_details[$i]['id']; ?>' class="location_delete btn btn-sm btn-outline grey-salsa " title="delete"><i class="fa fa-trash-o"></i></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <div class="tab-pane active" id="location-master">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                                        <div class="portlet light bordered">
                                                                            <div class="portlet-title">
                                                                                <div class="caption font-dark">
                                                                                    <i class="icon-settings font-dark"></i>
                                                                                    <span class="caption-subject">Create / Edit Location </span>
                                                                                </div>
                                                                                <div class="actions"></div>
                                                                            </div>

                                                                            <div class="portlet-body">
                                                                                <div class="table-toolbar">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <?php if ($role != "3") {?>
                                                                                            <div class="btn-group">
                                                                                                <button data-target="#static" data-toggle="modal" class="btn sbold green ">Create New Location <i class="fa fa-plus"></i></button>
                                                                                            </div>
                                                                                            <?php }?>
                                                                                        </div>
                                                                                        <div class="pull-right">
                                                                                            <div class="actions"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </br></br>
                                                                                    <table class="table table-striped table-bordered table-checkable order-column" id="sample_3">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th> S.No </th>
                                                                                                <th>Location Name</th>
                                                                                                <th>Location id</th>
                                                                                                <th> Actions </th>
                                                                                            </tr>
                                                                                        </thead>

                                                                                        <tbody>
                                                                                            <?php for ($i = 0; $i < count($location_details); $i++) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $i + 1; ?> </td>
                                                                                                <td><?php echo $location_details[$i]['location']; ?></td>
                                                                                                <td><?php echo $location_details[$i]['location_id']; ?></td>
                                                                                                <td class="align_changepass">
                                                                                                    <a href="#" data-target="#view_location_details" data-toggle="modal" class="view_location_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $location_details[$i]['id']; ?>' title="view"><i class="fa fa-eye"></i></a>
                                                                                                    <a href="#" data-target="#edit_location_details" data-toggle="modal" class="edit_location_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $location_details[$i]['id']; ?>' title="edit"><i class="fa fa-edit"></i></a>
                                                                                                    <a href="javascript:;" data-id ='<?php echo $location_details[$i]['id']; ?>' class="location_delete btn btn-sm btn-outline grey-salsa " title="delete"><i class="fa fa-trash-o"></i></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
<!-- department code -->
                                                            <div class="tab-pane" id="department-master">
                                                            <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="portlet light bordered">
                                                                            <div class="portlet-title">
                                                                                <div class="caption font-dark">
                                                                                    <i class="icon-settings font-dark"></i>
                                                                                    <span class="caption-subject">Create / Edit Department </span>
                                                                                </div>
                                                                                <div class="actions"></div>
                                                                            </div>

                                                                            <div class="portlet-body">
                                                                                <div class="table-toolbar">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <?php if ($role != "3") {?>
                                                                                            <div class="btn-group">
                                                                                                <button data-target="#new-department" data-toggle="modal" class="btn sbold green ">Create New Department <i class="fa fa-plus"></i></button>
                                                                                            </div>
                                                                                            <?php }?>
                                                                                        </div>
                                                                                        <div class="pull-right">
                                                                                            <div class="actions"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </br></br>
                                                                                    <table class="table table-striped table-bordered table-checkable order-column" id="sample_3">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th> S.No </th>
                                                                                                <th>Department Name</th>
                                                                                                <th>Department ID</th>
                                                                                                <th>Status</th>
                                                                                                <th> Actions </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                               
                                                                                        <tbody>
                                                                                            <?php if (isset($department_details) && is_array($department_details)) {
                                                                                                for ($i = 0; $i < count($department_details); $i++) {
                                                                                             ?>
                                                                                            <tr>
                                                                                                <td><?php echo $i + 1; ?> </td>
                                                                                                <td><?php echo $department_details[$i]['id']; ?></td>
                                                                                                <td><?php echo $department_details[$i]['dept_name']; ?></td>
                                                                                                <td><?php echo $department_details[$i]['dept_id']; ?></td>
                                                                                                <td><?php echo $department_details[$i]['status']; ?></td>
                                                                                                <td class="align_changepass">
                                                                                                    <a href="#" data-target="#view_departmnet_details" data-toggle="modal" class="view_department_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $department_details[$i]['id']; ?>' title="view"><i class="fa fa-eye"></i></a>
                                                                                                    <a href="#" data-target="#edit_department_details" data-toggle="modal" class="edit_department_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $department_details[$i]['id']; ?>' title="edit"><i class="fa fa-edit"></i></a>
                                                                                                    <a href="javascript:;" data-id ='<?php echo $department_details[$i]['id']; ?>' class="department_delete btn btn-sm btn-outline grey-salsa " title="delete"><i class="fa fa-trash-o"></i></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php
                                                                                            }
                                                                                        }
                                                                                         else {
                                                                                            // Output a message or perform an action if $department_details is not set or not an array
                                                                                            echo '<tr><td colspan="6">No department details available.</td></tr>';
                                                                                        }  ?>
                                                                                        </tbody>
                                                                                    </table>
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

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </div>
<!-- location code -->
    <div class="quick-nav-overlay"></div>
    
    <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i> Add New Location
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="#" id="form_sample_2">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="location" maxlength="50"
                                            id="form_control_1" placeholder="Location Name" tabindex="2">
                                        <label for="form_control_1">Location
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Location Name ...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <textarea class="form-control" name="location_id" rows="1"></textarea>
                                        <label for="form_control_1">Location Id
                                        </label>
                                        <span class="help-block">Type Location Id Here...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-4 col-md-9">
                                    <button type="submit" id="save_location" class="btn green">Add Location</button>
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



    <!-- User ticket management device -->

    <div id="view_user" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i> Add New Device status
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="#" id="form_sample_2">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="device_name" maxlength="50"
                                            id="form_control_1" placeholder="Device Name" tabindex="2">
                                        <label for="form_control_1">Device Name
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Device Name ...</span>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <textarea class="form-control" name="location_id" rows="1"></textarea>
                                        <label for="form_control_1">Location Id
                                        </label>
                                        <span class="help-block">Type Location Id Here...</span>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-4 col-md-9">
                                    <button type="submit" id="save_device_details" class="btn green">Add Device Name</button>
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

    <!-- location code -->

    <div id="view_location_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>View Selected Location  Details
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="javascript:;" id="view_details">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="vlocation" maxlength="50"
                                            id="form_control_1" placeholder="location Name" tabindex="2">
                                        <label for="form_control_1">Location Name
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Location Name ...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <textarea class="form-control" name="vlocation_id" rows="1"></textarea>
                                        <label for="form_control_1">Location id
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Type location Address Here...</span>
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

    <div id="edit_location_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Edit Selected Location Master And Update It Here!
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="javascript:;" id="edit_location">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control hide" name="edit_id">
                                        <input type="text" class="form-control" name="elocation" maxlength="50"
                                            id="form_control_1" placeholder="location Name" tabindex="2">
                                        <label for="form_control_1">Location Name
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter location Name ...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success">
                                        <textarea class="form-control" name="elocation_id" rows="1"></textarea>
                                        <label for="form_control_1">Location id
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Type location Address Here...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-4 col-md-9">
                                    <button type="submit" id="update_location_details" class="btn green">Update location Master</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- department code -->
    <div id="new-department" class="modal fade" tabindex="-1" data-backdrop="new-department" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i> Add New Department
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="#" id="new-department-form">
                        <div class="form-body">
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="dept_name" maxlength="50"
                                            id="form_control_1" placeholder="Department Name" tabindex="2">
                                        <label for="form_control_1">Department Name
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Department Name ...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="dept_id" maxlength="50"
                                            id="form_control_1" placeholder="Department ID" tabindex="2">
                                        <label for="form_control_1">department ID
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Department ID ...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="status">
                                            <option value="Active">Active</option>
                                            <option value="In-Active">Decline</option>
                                        </select>
                                        <label for="form_control_1">department Status
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Department status ...</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-4 col-md-9">
                                    <button type="submit" id="save_department" class="btn green">Add Department</button>
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

    <div id="view_departmnet_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>View Selected Department  Details
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="javascript:;" id="view_details">
                        <div class="form-body">
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="vdept_name" maxlength="50"
                                            id="form_control_1" placeholder="Department Name" tabindex="2">
                                        <label for="form_control_1">Department Name
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Department Name ...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="vdept_id" maxlength="50"
                                            id="form_control_1" placeholder="Department ID" tabindex="2">
                                        <label for="form_control_1">Department ID
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Department ID ...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="vstatus">
                                            <option value="Active">Active</option>
                                            <option value="In-Active">Decline</option>
                                        </select>
                                        <label for="form_control_1">Department Status
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Department status ...</span>
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

    <div id="edit_department_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Edit Selected Department Master And Update It Here!
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="javascript:;" id="edit_department">
                        <div class="form-body">
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control hide" name="edit_name">
                                        <input type="text" class="form-control" name="edept_name" maxlength="50"
                                            id="form_control_1" placeholder="Department name" tabindex="2">
                                        <label for="form_control_1">Department Name
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Department Name ...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control hide" name="edit_dept_id">
                                        <input type="text" class="form-control" name="edept_id" maxlength="50"
                                            id="form_control_1" placeholder="Department ID" tabindex="2">
                                        <label for="form_control_1">Department ID
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Department ID ...</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="estatus">
                                            <option value="Active">Active</option>         
                                            <option value="In-Active">Decline</option>
                                        </select>
                                        <label for="form_control_1">Department Status
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Department status ...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-4 col-md-9">
                                    <button type="submit" id="update_department_details" class="btn green">Update Department Master</button>
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
    <script src="../assets/pages/scripts/cityairjs/location.js" type="text/javascript"></script>
    <script src="../assets/pages/scripts/cityairjs/department.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL SCRIPTS -->

    <script type="text/javascript">
        function EditValidateEmail() {
            var got = $("input[name=edit_email]").val();
            if (got == '') {
                alert("Please enter email!")
                $("input[name=edit_email]").focus();
            }
            if (/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/.test(got)) {
                return (true)
            }
            //alert("You have entered an invalid email address!")
            $("input[name=edit_email]").focus();
            return (false)
        }
    </script>

    <script src="../assets/pages/scripts/spinner_page_lodar.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function() {
            $(".se-pre-con").fadeOut("fast");

            
            
            
var activeTab = sessionStorage.getItem('activeTab');
            if (activeTab) {
                $(`#${activeTab} a`).tab('show');
            }

            $('#location-tab').on('shown.bs.tab', function () {
                sessionStorage.setItem('activeTab', 'location-tab');
            });

            $('#department-tab').on('shown.bs.tab', function () {
                sessionStorage.setItem('activeTab', 'department-tab');
            });
        });







        //save device details
$('#save_device').click(function()
	{
        alert("Please enter");
	var device_name = $("input[name=device_name]").val();

	if(device_name == '')
	{
		alert('Enter Device Name!')
		 $('input[name=device_name]').focus();
	}

	else
	{
		$.LoadingOverlay("show");
		var data = 
				{
					device_name: device_name
				};  
		   var fd = new FormData();
			   fd.append('device_name', data.device_name);
			   
			$.ajax({
					  url: "save_device_details",
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
                            console.log(res);
							 var obj = JSON.parse(res);
							
							$.LoadingOverlay("hide");
								swal({
										  title: "New Device Name Created Successfully!",
										  //text: "You clicked the button!",
										  icon: "success",
										  button: "Ok!",
										 
									});
							 //alert("Information is Updated!");
							 $('#view_user').modal('hide');
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
    </script>
    