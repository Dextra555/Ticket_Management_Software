
<?php
include('header.php');
?>
    <!-- END HEAD -->
<?php 
$checkbox = $cookie_username = $cookie_password="";
//print_r($_SESSION);
if($_SESSION['REMEMBER'] == 'on'){
     $cookie_username = $_SESSION['USER_NAME'];
     $cookie_password = $_SESSION['PASSWORD'];
     $checkbox = "checked";
}
  $dataPoints = array( 
	array("label"=>"New", "symbol" => "New","y"=>$new_count1,"color"=>"blue"),
	array("label"=>"Inprogress", "symbol" => "Inprogress","y"=>$inprogress_count1,"color"=>"yellow"),
	array("label"=>"Amend", "symbol" => "Amend","y"=>$amend_count1,"color"=>"magenta"),
	array("label"=>"Hold", "symbol" => "Hold","y"=>$hold_count1,"color"=>"orange"),
	array("label"=>"Resolved", "symbol" => "Resolved","y"=>$resolved_count1,"color"=>"green"),
	array("label"=>"Cancelled", "symbol" => "Cancelled","y"=>$cancelled_count1,"color"=>"gray"),
);
?>
<style>
.canvasjs-chart-credit{
display:none;	
}
</style>
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
                                    <!--<a href="../super_admin/super_admin_homepage">
                                        <img src="../assets/layouts/layout3/img/logo.png" alt="logo" class="logo-default">
                                    </a>-->
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" id="profile_image" src="../assets/layouts/layout3/img/avatar3_small.png">
                                                <span><?php echo $name ?></php></span>
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
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <?php 
                           $this->load->view('navigation');
                        ?>
                        <!-- BEGIN HEADER MENU -->
                       
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
                                        <h1>Admin Dashboard
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
													<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<a class="dashboard-stat dashboard-stat-v2" style="background:blue;color: #fff;" href="../ticket/ticket_homepage?status=1">
															<div class="visual">
															</div>
															<div class="details">
																<div class="number">
																	<!-- <span data-counter="counterup" id="user_count" data-value="1349">0</span> -->
                                                                    <label id="user_count"><?php echo $new_count;?></label>
																</div>
																<div class="desc">  New  </div>
															</div>
														</a>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<a class="dashboard-stat dashboard-stat-v2" style="background:yellow;color: #333;" href="../ticket/ticket_homepage?status=2">
															<div class="visual">
															</div>
															<div class="details">
																<div class="number">
																	<!-- <span data-counter="counterup" id="vendor_count" data-value="125">0</span>  -->
                                                                    <label id="staff_count"><?php echo $inprogress_count;?></label>
                                                                </div>
																<div class="desc"> Inprogress </div>
															</div>
														</a>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<a class="dashboard-stat dashboard-stat-v2" style="background:magenta;color: #fff;" href="../ticket/ticket_homepage?status=4">
															<div class="visual">
															</div>
															<div class="details">
																<div class="number">
																	<!-- <span data-counter="counterup" id="customer_count" data-value="549">0</span> -->
                                                                     <label id="customer_count"><?php echo $amend_count;?></label>
																</div>
																<div class="desc"> Amend  </div>
															</div>
														</a>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<a class="dashboard-stat dashboard-stat-v2" style="background:orange;color: #fff;" href="../ticket/ticket_homepage?status=5" >
															<div class="visual">
															</div>
															<div class="details">
																<div class="number"> 
																    <!-- <span data-counter="counterup" id="appointment_count" data-value="89"></span></div> -->
                                                                    <label id="appointment_count"><?php echo $hold_count;?></label>
                                                                </div>
																<div class="desc"> Hold </div>
															</div>
														</a>
													</div>
												</div>
												<!--second row start -->
        								<div class="row">
        								   <div class="col-md-12">
																					<!-- BEGIN EXAMPLE TABLE PORTLET-->
																					<div class="portlet light bordered">
																						<div class="portlet-title">
																							<div class="caption font-dark">
																								<h4 style="font-weight: 500;">Last 30 days status of all the tickets</h4>
																						</div>
																						
																						<hr>
											                                          																		<div id="chartContainer" style="height: 370px; width: 100%;"></div>

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
<script src="../assets/pages/scripts/canvasjs.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
        </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
         <!-- BEGIN CORE PLUGINS -->
  
        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");
                var username = "<?php echo $cookie_username; ?>";
                var password = "<?php echo $cookie_password; ?>";
                var checkbox = "<?php echo $checkbox; ?>";
               //alert(checkbox);
                localStorage.setItem("username", username);
                localStorage.setItem("password", password);
                localStorage.setItem("checkbox", checkbox);
            });
            

					$.ajax({
					  url: "<?php echo base_url()?>report/graphical_report_search",
					  type: 'POST',
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
							var obj =  JSON.parse(res);
							var new_count = parseInt(obj.new_count1);
							var inprogress = parseInt(obj.inprogress_count1);
							var amend_count = parseInt(obj.amend_count1);
							var hold_count = parseInt(obj.hold_count1);
							var resolved_count = parseInt(obj.resolved_count1);
							var cancelled_count = parseInt(obj.cancelled_count1);
							console.log(new_count);
var highchart = Highcharts.chart('chartContainer', {
							
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: "Last 30 days status of all the tickets",
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} '
            }
        }
    },
	  
  credits: {
    enabled: false
  },
    series: [{
        name: 'Count',
        colorByPoint: true,
        data: [{
            name: 'New',
            y: new_count,
           // sliced: true,
            selected: true,
			color:"blue"
        }, {
            name: 'Inprogress',
            y: inprogress,
			color:"yellow"
        }, {
            name: 'Amend',
            y: amend_count,
			color:"magenta"
        }, {
            name: 'Hold',
            y: hold_count,
			color:"orange"
        }, {
            name: 'Resolved',
            y: resolved_count,
			color:"green"
        }, {
            name: 'Cancelled',
            y: cancelled_count,
			color:"gray"
        },]
    }]
});
 },
				 error: function(err, ex) 
					{
						//alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });


</script>
    </body>

</html>