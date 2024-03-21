<!DOCTYPE html>
<?php
include('header.php');
 $user_id = $this->session->userdata('USER_ID');
 $role = $this->session->userdata('USER_ROLE');

?>
<style>
.highcharts-credits{
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
                                                <span><?php echo $name; ?></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                              <!--   <li>
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
                                        <h1>Ticket Details Here
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
       
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="mt-content-body">
                                            <div class="se-pre-con"></div>
                                                <div class="row">
                                               <div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-gift"></i>Graphical Ticket Reports</div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                               <!--  <a href="#portlet-config" data-toggle="modal" class="config"> </a> -->
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="tabbable-custom">
                                                                <ul class="nav nav-tabs ">
                                                                    <li class="active">
                                                                        <a href="#tab_1_1_1" data-toggle="tab">Ticket Reports</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="tab_1_1_1">
                                                                            <div class="portlet light bordered">
                                                                               <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 30%" onchange = "daterange_filter()">
																			<i class="fa fa-calendar"></i>&nbsp;
																			<span id="daterange" onchange = "daterange_filter()"></span> <i class="fa fa-caret-down"></i>
																		</div><br><br>
																		 
																		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
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
                                     <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                       
                </div>
            </div>
            </div>
				<?php include("footer.php");?>

                </div>
            </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
       <!-- Modals starts here!--> 
       
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/pages/scripts/cityairjs/ticket.js" type="text/javascript"></script>
        <!-- End THEME LAYOUT SCRIPTS -->
<script src="../assets/pages/scripts/canvasjs.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>   
  $(window).load(function() {
	// Animate loader off screen
	$(".se-pre-con").fadeOut("slow");;
	});
</script>
<script>
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			daterange_filter();
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		}
    }, cb);

    cb(start, end);

});
</script>
<script>
function daterange_filter(){
	
var date =  $("#daterange").text();
var index = date.indexOf("-");  // Gets the first index where a space occours
var date1 = date.substr(0, index); // Gets the first part
var date2 = date.substr(index + 1);  
var fd = new FormData();
fd.append('date1', date1);
fd.append('date2', date2);
					$.ajax({
					  url: "<?php echo base_url()?>report/graphical_report_search",
					  type: 'POST',
					  data: fd,
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
        text: "Ticket Reports - "+date,
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


}
/*function daterange_filter(){
	
var date =  $("#daterange").text();
var index = date.indexOf("-");  // Gets the first index where a space occours
var date1 = date.substr(0, index); // Gets the first part
var date2 = date.substr(index + 1);  
var fd = new FormData();
fd.append('date1', date1);
fd.append('date2', date2);
					$.ajax({
					  url: "<?php echo base_url()?>report/graphical_report_search",
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
							var obj =  JSON.parse(res);
							var new_count = obj.new_count1;
							var inprogress = obj.inprogress_count1;
							var amend_count = obj.amend_count1;
							var hold_count = obj.hold_count1;
							var resolved_count = obj.resolved_count1;
							var cancelled_count = obj.cancelled_count1;
							var chart = new CanvasJS.Chart("chartContainer", {
							theme: "light2",
							animationEnabled: true,
							title: {
								text: "Ticket reports of "+date,
								fontSize: 22,
							},
							
							exportEnabled: true,

							  	data: [{
								type: "doughnut",
								indexLabel: "{symbol} - {y}",
								yValueFormatString: "",
								showInLegend: true,
								legendText: "{label} : {y}",
								dataPoints:[{"label":"New","symbol":"New","y":new_count,"color":"blue"},{"label":"Inprogress","symbol":"Inprogress","y":inprogress,"color":"yellow"},{"label":"Amend","symbol":"Amend","y":amend_count,"color":"magenta"},{"label":"Hold","symbol":"Hold","y":hold_count,"color":"orange"},{"label":"Resolved","symbol":"Resolved","y":resolved_count,"color":"green"},{"label":"Cancelled","symbol":"Cancelled","y":cancelled_count,"color":"gray"}]
							}]
							});
							chart.render();

						  },
				 error: function(err, ex) 
					{
						//alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });


}*/
</script>

    </body>

</html>