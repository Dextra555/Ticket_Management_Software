<?php include("header.php");
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
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                            <img alt="" class="img-circle" id="profile_image" src="../assets/layouts/layout3/img/avatar3_small.png">
                                            <span><?php echo $user_name; ?></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-default">
                                            <li>
                                                <a href="../login/logout"> <i class="icon-key"></i> Log Out </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php  $this->load->view('navigation'); ?>
                </div>
            </div>
        </div>

        <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <div class="page-container">
                    <div class="page-content-wrapper">
                        <div class="page-head">
                            <div class="container">
                                <div class="page-title">
                                    <h1>Create Users <small></small></h1>
                                </div>
                            </div>
                        </div>

                        <div class="page-content">
                            <div class="container">
                                <div class="page-content-inner">
                                    <div class="mt-content-body">
                                        <!-- <div class="se-pre-con"></div> -->
                                        <div class="row">
                                            <div class="portlet box green">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-gift"></i>Create New User
                                                    </div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tabbable-line">
                                                        <ul class="nav nav-tabs ">
                                                            <li class="active" id="it_user">
                                                                <a href="#tab_15_1" data-toggle="tab">IT Users </a>
                                                            </li>
                                                            <li id="nonit_user">
                                                                <a href="../employee/employee_homepage">Non IT Employees</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab_15_1">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="portlet light bordered">
                                                                            <div class="portlet-title">
                                                                                <div class="caption font-dark">
                                                                                    <i class="icon-settings font-dark"></i>
                                                                                    <span class="caption-subject">Create / Edit Users </span>
                                                                                </div>
                                                                                <div class="actions"></div>
                                                                            </div>
                                                                            <div class="portlet-body">
                                                                                <div class="table-toolbar">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <?php if($role !="3") { ?>
                                                                                            <div class="btn-group">
                                                                                                <button data-target="#static" data-toggle="modal" class="btn sbold green ">
                                                                                                    Create New User <i class="fa fa-plus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                            <button type="button" data-target="#excel-upload" data-toggle="modal" class="btn sbold blue ml-2">Upload Excel<i class="fa fa-upload"></i></button>
                                                                                            <?php } ?>
                                                                                        </div>
                                                                                        
                                                                                        <div class="pull-right">
                                                                                            <div class="actions"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </br></br>
                                                                                    <table class="table table-striped table-bordered table-checkable order-column " id="sample_2">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th> User Id </th>
                                                                                                <th> User Name </th>
                                                                                                <th> Department ID </th>
                                                                                                <th> Location ID</th>
                                                                                                <th> Email ID </th>
                                                                                                <th> Status </th>         
                                                                                                <th> Created Date </th>
                                                                                                <th> Role </th>
                                                                                                <th> Actions </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php
                                                                                                for ($i=0;$i<count($user_details);$i++) { if($user_details[$i]['role'] == 1) { continue; } ?>
                                                                                            <tr>
                                                                                                <td><?php echo $user_details[$i]['user_id']; ?></td>
                                                                                                <td><?php echo $user_details[$i]['user_name']; ?></td>
                                                                                                <td><?php echo $user_details[$i]['dept_id']; ?></td>
                                                                                                <td class=""><?php echo $user_details[$i]['location_id']; ?></td>
                                                                                                <td class=""><?php echo $user_details[$i]['email']; ?></td>
                                                                                                <td>
                                                                                                    <select id="statusSelect">
                                                                                                        <option style="background-color: green; color: white;" value="<?php echo $user_details[$i]['status']; ?>" selected><?php echo $user_details[$i]['status']; ?></option>
                                                                                                        <option value="Active" style="background-color: #337ab7; color: white;">Active</option>
                                                                                                        <option value="Decline" style="background-color: blue; color: white;">Decline</option>
                                                                                                    </select>
                                                                                                    <input type="hidden" id="userId" name="userId" value="<?php echo $user_details[$i]['user_id']; ?>">
                                                                                                </td>
                                                                                                <td><?php echo $user_details[$i]['created_at']; ?></td>
                                                                                                <td>
                                                                                                    <?php 
                                                                                                        if($user_details[$i]['role'] == 1){
                                                                                                        echo "Admin"; 
                                                                                                        }elseif ($user_details[$i]['role'] == 2) {
                                                                                                            echo "Employee"; 
                                                                                                        }elseif ($user_details[$i]['role'] == 3) {
                                                                                                            echo "Sub-Employee"; 
                                                                                                        }elseif ($user_details[$i]['role'] == 4) {
                                                                                                            echo "User"; 
                                                                                                        }
                                                                                                    ?>
                                                                                                </td>
                                                                                                <td class="align_changepass">
                                                                                                    <a href="#" data-target="#view_user_details" data-toggle="modal" class="view_user_details btn btn-sm btn-outline grey-salsa" data-id='<?php echo $user_details[$i]['user_id'];?>' title="view">
                                                                                                        <i class="fa fa-eye"></i>
                                                                                                    </a>
                                                                                                    <a href="#" data-target="#edit_user_details" data-toggle="modal" class="edit_user_details btn btn-sm btn-outline grey-salsa" data-id='<?php echo $user_details[$i]['user_id'];?>' title="edit">
                                                                                                        <i class="fa fa-edit"></i>
                                                                                                    </a>
                                                                                                    <a href="javascript:;" data-id ='<?php echo $user_details[$i]['user_id'];?>' class="user_delete btn btn-sm btn-outline grey-salsa " title="delete"><i class="fa fa-trash-o"></i></a>
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
        <?php include('footer.php'); ?>
    </div>

    <div class="quick-nav-overlay"></div>

    <div id="excel-upload" class="modal fade" tabindex="-1" data-backdrop="excel-upload" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i> Upload Excel
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="excel_upload" id="form-excel-upload" method="post" id="form_img" enctype="multipart/form-data" accept-charset="utf-8">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="file" class="form-control" name="file"
                                            id="file" required>
                                        <label for="form_control_1">File
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Upload Your File ...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-4 col-md-9">
                                    <button type="submit" id="upload-excel" class="btn green" tabindex="11">Upload</button>
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

    <!-- static -->
    <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i> Add New User Here
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
                                        <input type="text" class="form-control" name="user_id" maxlength="50" id="c_user_id" placeholder="User ID" tabindex="1">
                                        <label for="c_user_id">User ID <span class="required">*</span></label>
                                        <span class="help-block">Enter User ID ...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="uname" maxlength="20" id="c_username" placeholder="Username" tabindex="3">
                                        <label for="c_username">Username <span class="required">*</span></label>
                                        <span class="help-block">Enter Username ...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="dept_id" tabindex="6">
                                            <option value="">Select</option>
                                            <?php $department_id = $this->db->query("select * from department where status='Active'")->result_array(); foreach($department_id as $department) { ?>
                                            <option value="<?php echo $department['dept_name'] . ' (' . $department['dept_id'] . ')'; ?>"><?php echo $department['dept_id']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="c_department_id">Department ID <span class="required">*</span></label>
                                        <span class="help-block">Select Department ID...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="loc_id" tabindex="6">
                                            <option value="">Select</option>
                                            <?php $location_id = $this->db->query("select * from location where status='Active'")->result_array(); foreach($location_id as $location){ ?>
                                            <option value="<?php echo $location['location'] . ' (' . $location['location_id'] . ')'; ?>"><?php echo $location['location_id']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="c_location_id">Location ID <span class="required">*</span></label>
                                        <span class="help-block">Select Location ID...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="email" id="c_email" placeholder="Mail ID" maxlength="50" tabindex="2">
                                        <label for="c_email">Email <span class="required">*</span></label>
                                        <span class="help-block">Enter Email...</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="password" class="form-control" name="pass" id="c_password" placeholder="Password" tabindex="4" maxlength="20">
                                        <label for="c_password">Password <span class="required">*</span></label>
                                        <span class="help-block">Enter Password ...</span>
                                    </div>
                                    
                                    <div class="form-group form-md-line-input">
                                        <input type="password" class="form-control" name="repass" id="c_confirm_password" placeholder="Confirm Password" tabindex="4" maxlength="20">
                                        <label for="c_confirm_password">Confirm Password <span class="required">*</span></label>
                                        <span class="help-block">Enter Confirm Password ...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="mobile" id="c_mobile" placeholder="Mobile" tabindex="5">
                                        <label for="c_mobile">Mobile</label>
                                        <span class="help-block">Type Mobile Number...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="role" tabindex="6">
                                            <option value="">Select</option>
                                            <?php $user_roles = $this->db->query("select * from user_roles")->result_array(); foreach($user_roles as $role) { if($role['role_id'] == 1) { continue; } ?>
                                            <option value="<?php echo $role['role_id']; ?>"> <?php echo $role['role_name']; ?></option>
                                                <?php } ?>
                                        </select>
                                        <label for="c_role">Role <span class="required">*</span></label>
                                        <span class="help-block">Select Role here...</span>
                                    </div>

                                    <div class="form-group form-md-line-input has-success">
                                        <textarea class="form-control" name="notes" rows="1" tabindex="10"></textarea>
                                        <label for="c_notes">Notes</label>
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

    
    <div id="view_user_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false" data-width="800">
        <div class="modal-body">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>View Selected User details
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
                                    <input type="text" class="form-control hide" name="vid_value_stored" id="form_control_1">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="vname" maxlength="50"
                                            id="form_control_1" placeholder="Full Name" tabindex="2" disabled>
                                        <label for="form_control_1">Name
                                            <span class="required">*</span>
                                        </label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" id="form_control_1" name="vmobile"
                                            maxlength="10" placeholder="Mobile No" tabindex="5" disabled>
                                        <label for="form_control_1">Mobile No
                                            <span class="required">*</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="vuname" id="form_control_1"
                                            placeholder="User name" maxlength="50" tabindex="1" disabled>
                                        <label for="form_control_1">User Name/Email
                                            <span class="required">*</span>
                                        </label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="vrole" id="form_control_1"
                                            tabindex="5" disabled>
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
                        <i class="fa fa-gift"></i>Edit Selected User details And Update It Here!
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="javascript:;" id="edit_user">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control hide" name="edit_id_value" id="form_control_1">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="ename" maxlength="50"
                                            id="form_control_1" placeholder="Full Name" tabindex="2" disabled>
                                        <label for="form_control_1">Name
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Full Name ...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" id="form_control_1" name="emobile" maxlength="10" placeholder="Mobile No" tabindex="5">
                                        <label for="form_control_1">Mobile No
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter Mobile No...</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="euname" id="form_control_1" placeholder="User name" maxlength="50" tabindex="1" disabled>
                                        <label for="form_control_1">User Name/Email
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Enter User Name...</span>
                                    </div>
                                    
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="erole" tabindex="6" disabled>
                                            <option value="">Select</option>
                                            <?php  $user_roles = $this->db->query("select * from user_roles")->result_array(); foreach($user_roles as $role){  if($role['role_id'] == 1){ continue; } ?>
                                            <option value="<?php echo $role['role_id']; ?>"><?php  echo $role['role_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="form_control_1">Role
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Select Role here...</span>
                                    </div>

                                    <div class="form-group form-md-line-input has-success">
                                        <textarea class="form-control" name="enotes" rows="1"></textarea>
                                        <label for="form_control_1">Notes</label>
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

    <script src="../assets/pages/scripts/cityairjs/user.js" type="text/javascript"></script>

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
            $("input[name=edit_email]").focus();
            return (false)
        }
    </script>

    <script src="../assets/pages/scripts/spinner_page_lodar.js"></script>

    <script>
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
        });

        var it_user = true;

        function setActiveTab() {
            var it_user_tab = document.getElementsById('it_user');
            var nonit_user_tab = document.getElementById('nonit_user');

            it_user_tab.classList.remove('active');
            nonit_user_tab.classList.remove('active');

            if (it_user) {
                nonit_user_tab.classList.add('active');
            } else {
                it_user_tab.classList.add('active');
            }
        }

        $(document).ready(function() {
            $('#statusSelect').change(function() {
                var statusSelect = $(this).val(); // Retrieve the selected value of the select element
                var userId = $('#userId').val(); // Retrieve the value of the input element with id "userId"

                $.ajax({
                    type: "POST", // Using POST method for AJAX request
                    url: "storeStatus", // Target URL for the AJAX request
                    data: {
                        status: statusSelect, // Sending selected status as data to the server
                        userId: userId // Sending userId as data to the server
                    },
                    success: function(response) { // Function to handle successful response
                        var jsonResponse = JSON.parse(response);
                        
                        // Check if the operation was successful
                        if (jsonResponse.success) {
                            alert("Status updated successfully");
                        } else {
                            alert("Failed to update status");
                        }           
                    },
                    error: function(err) { // Function to handle errors
                        alert("err"); // Display a generic error message in an alert
                    }
                });
            });
        });
    </script>
</body>
</html>