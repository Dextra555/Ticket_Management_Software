
<div class="page-header-menu">
   <div class="container">
      <!-- BEGIN MEGA MENU -->
      <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
      <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
      <div class="hor-menu">
         <ul class="nav navbar-nav">
<?php
$role = $this->session->userdata('USER_ROLE');
if($role == "1" || $role == "2"){ ?>
 <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown ">			   
	<a href="../super_admin/super_admin_homepage"> Home </a>	</li>
 <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown ">			   
	<a href="../branch/branch_homepage">Branch</a>	</li>		
 <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown ">			   
	<a href="../user/user_homepage">Create Users</a>	</li>
	 <!--<li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown ">			   
	  <a href="../customer/customer_homepage" class="nav-link  ">Create User</a></li>-->
			 <!--<li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown ">			   
	<a href="../role/role_homepage"> Role </a>	</li>	
	 <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown ">			   
	<a href="../status/status_homepage"> Status </a>	</li>	-->
 <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown">
               <a href="../ticket/ticket_homepage" class="nav-link  ">Create Tickets</a>

            </li>
			<li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown ">			   
	<a href="../report/report_ticket"> Reports  <span class="arrow"></span></a>	
	 <ul class="dropdown-menu pull-left">
	 <li aria-haspopup="true" class=" ">
	<a href="../report/graphical_report">Graphical Reports </a>	
	</li>
         </ul>
		 </li>

		 <li aria-haspopup="true" class=" ">
	<a href="../admin/access">Other Changes</a>	
	</li>

<?php }  else if ($role == "4"){?>
 <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown">
               <a href="../ticket/ticket_homepage" class="nav-link  ">Create Ticket</a>

            </li>
<li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown ">			   
	<a href="../report/report_ticket"> Reports </a>	</li>
<?php }  else if ($role == "3"){?>
 <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown">
                <a href="../ticket/ticket_assign" class="nav-link  "> Assigned Tickets</a>
            </li>
			<li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown ">			   
	<a href="../report/report_ticket"> Reports </a>	</li>

<?php } ?>

         </ul>
      </div>
      <!-- END MEGA MENU -->
   </div>
</div>

