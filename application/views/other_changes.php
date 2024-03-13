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
                            <div class="page-logo">
                            </div>
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
                                                <a href="../login/logout">
                                                    <i class="icon-key"></i> Log Out </a>
                                            </li>
                                        </ul>
                                    </li>
                                   </ul>
                            </div>
                        </div>
                    </div>
                   <?php 
                                $this->load->view('navigation');
                          ?>
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
                                    <h1>Location Master
                                        <small></small>
                                    </h1>
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
                                                            <li class="active">
                                                                <a href="#tab_15_1" data-toggle="tab">Location Master </a>
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
                                                                                    <i
                                                                                        class="icon-settings font-dark"></i>
                                                                                    <span class="caption-subject">
                                                                                        Create / Edit Location </span>
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
                                                                                                    data-target="#static"
                                                                                                    data-toggle="modal"
                                                                                                    class="btn sbold green ">Create
                                                                                                    New Location
                                                                                                    <i class="fa fa-plus"></i>
                                                                                                </button>
                                                                                                <button
                                                                                                    data-target="#static"
                                                                                                    data-toggle="modal"
                                                                                                    class="btn sbold green "
                                                                                                    style="margin-left: 10px;">Create
                                                                                                    New Department
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
                                                                                    <table
                                                                                        class="table table-striped table-bordered table-checkable order-column"
                                                                                        id="sample_3">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th> S.No </th>
                                                                                                <!-- <th> Branch name </th>-->
                                                                                                <th>Location Name</th>
                                                                                                <th>Location id</th>
                                                                                                <th> Actions </th>

                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php
                                                                                                    for ($i=0;$i<count($location_details);$i++)
                                                                                                    {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <!-- <td><?php echo $location_details[$i]['id']; ?></td> -->
                                                                                                        <td><?php echo $i+1; ?> </td>
                                                                                                        <td><?php echo $location_details[$i]['location']; ?></td>
    
                                                                                                        <td><?php echo $location_details[$i]['location_id']; ?></td>
                                                                                                        <td class="align_changepass">
                                                                                                                <a href="#" data-target="#view_location_details" data-toggle="modal" class="view_location_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $location_details[$i]['id'];?>' title="view"><i class="fa fa-eye"></i></a>
    
                                                                                                        <a href="#" data-target="#edit_location_details" data-toggle="modal" class="edit_branch_details btn btn-sm btn-outline grey-salsa" data-id ='<?php echo $location_details[$i]['id'];?>' title="edit"><i class="fa fa-edit"></i></a>
                                                                                                        <a href="javascript:;" data-id ='<?php echo $location_details[$i]['id'];?>' class="location_delete btn btn-sm btn-outline grey-salsa " title="delete"><i class="fa fa-trash-o"></i></a>
                                                                                                        
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
                        <i class="fa fa-gift"></i> Add New Location
                    </div>
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
                                            <!--<span class="required">*</span>-->
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

    <div id="view_branch_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false"
        data-width="800">
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
                    <!-- BEGIN FORM-->
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











    <div id="edit_branch_details" class="modal fade" tabindex="-1" data-backdrop="" data-keyboard="false"
        data-width="800">
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
                    <!-- BEGIN FORM-->
                    <form action="javascript:;" id="edit_branch">
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
                                    <button type="submit" id="update_branch_details" class="btn green">Update location
                                        Master</button> 
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


    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="../assets/pages/scripts/cityairjs/location.js" type="text/javascript"></script>
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
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
