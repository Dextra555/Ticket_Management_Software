<!DOCTYPE html>

<?php 
$checkbox = $cookie_username = $cookie_password="";
if(isset($_COOKIE['cookie'])){
$cookie_data = unserialize($_COOKIE['cookie'], ["allowed_classes" => false]);
 if($cookie_data['remember'] == true){
     $checkbox ="checked";
 }
 if($cookie_data['username']){
     $cookie_username = $cookie_data['username'];
 }
  if($cookie_data['password']){
     $cookie_password = $cookie_data['password'];
 }
}
?>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Dextra TMS - Ticket Management Software</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url()?>uploads/favicon.png" type="image/gif" alt="favicon"/>
            <link href="<?php echo base_url()?>assets/pages/css/sweetalert.css" rel="stylesheet" type="text/css" />

           <style type="text/css">

            img.login-logo
                {
                    width: 350px !important;
                }
               
           </style>
            
        </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-2 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 login-container bs-reset">
                    <!--<img class="login-logo login-6" src="<?php echo base_url(); ?>assets/pages/img/login/login-invert.png" />-->
                    <div id="ilogin" class="login-content">
                        <h1>Login</h1>  
                        <!-- <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p> -->
                        <form class="login-form" method="post">
                            <div id="alertdiv" class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span id="errormsg"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username or Email Address" name="username" required /> </div>
                                <div class="col-xs-6">
                                    <input id="password" class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required /> </div>
                            </div>
                             <div class="row" style=" text-align: center;">
                             <p><input id="remember_me" type="checkbox" name="remeber_me" > Remember Me</p>
                             </div>
                            <div class="row">
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <!-- <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a> -->
                                    </div>
                                    
									 <p class="pull-left forgot_psw back_link" onclick="forgotpwd();" style="cursor:pointer;" >Lost your password?</p>
									 <p class="pull-right">
                                    <button id="signin" class="btn blue" >Log In</button>
									 </p>
                                </div>
                            </div>
                           

                        </form>
						</div>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
						<div  id="iforgot"class="login-content" style="display:none">
						<h1 style="visibility: hidden;">Forgot Password?</h1>
                        <form id="forgotform" class="login-form" method="post">
                            
							  <div id="error" class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span id="errorpwd"> </span>
                            </div>
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" id="email" placeholder="Enter Email Id" name="email" value="" required />
									<p style="color:red;" id="emailerror"> </p>
							</div>
                             <div class="col-sm-8 text-right">
									 <p class="pull-left forgot_psw back_link" onclick="backlogin();" style="cursor:pointer;" >Back to login</p>
									 <p class="pull-right">
                                    <button class="btn blue" onclick="return forgotsubmit();">Sign In</button>
									 </p>
                                </div>
								
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                               <!-- <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>-->
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; 2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
                <div class="quick-nav-overlay"></div>

        <!-- END : LOGIN PAGE 5-2 -->

        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    	<script src="<?php echo base_url()?>assets/pages/scripts/spinner.js"></script>
        <script src="<?php echo base_url()?>assets/pages/scripts/spinner_progress.js"></script>
        <script src="<?php echo base_url()?>assets/pages/scripts/spinner_page_lodar.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
        
        $(document).ready(function(){
             var username= localStorage.getItem("username");
            var password= localStorage.getItem("password");
            var checkbox= localStorage.getItem("checkbox");
            
            $("input[name=username]").val(username);
            $("input[name=password]").val(password);
            $("#remember_me").prop("checked", checkbox);
            
            $("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
                   	var name = $("input[name=username]").val();
           	var password = $("input[name=password]").val();
                var remember_me = $('input:checkbox:checked').val()
    
           
           	if(name =="" && password ==""){
           	    $("#alertdiv").css('display','block');
                $("#errormsg").html("Enter Username And Password");
                $("input[name=username]").focus();   
            }
            else if(name ==""){
                 $("#alertdiv").css('display','block');
                $("#errormsg").html("Enter Username");
                $("input[name=username]").focus();
            }  
            else if(password ==""){
                 $("#alertdiv").css('display','block');
                $("#errormsg").html("Enter Password");
                $("input[name=password]").focus();
            }
            else{
            	$.LoadingOverlay("show");

		    var data = 
				{
					  username: name,
					  password: password,
                        remember_me:remember_me,
				};  
		   var fd = new FormData();
			   fd.append('username', data.username);
			   fd.append('password', data.password);
			   fd.append('remember_me', data.remember_me);
			   
	        login_url = '<?php echo base_url()?>login/verifylogin';
	
			$.ajax({
					  url: login_url,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						     console.log(res);
						     var error = res;
							if(error == 1){
							      $.LoadingOverlay("hide");

							    $("#alertdiv").css('display','block');
                                $("#errormsg").html("Invalid UserId or Password!");
                                $("input[name=username]").val();
                                $("input[name=password]").val();
							    
							}
							else{
							     $.LoadingOverlay("hide");
							 swal({
									  title: "Your logged in Successfully!",
									  icon: "success",
									  button: "Ok!",
								  });
								  window.location.reload(true);
							}
						},
			  error: function(err, ex) 
					{
						alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
		}
    }
            });
         $("#signin").click(function(){
        	event.preventDefault();
           	var name = $("input[name=username]").val();
           	var password = $("input[name=password]").val();
                var remember_me = $('input:checkbox:checked').val()
    
           
           	if(name =="" && password ==""){
           	    $("#alertdiv").css('display','block');
                $("#errormsg").html("Enter Username And Password");
                $("input[name=username]").focus();   
            }
            else if(name ==""){
                 $("#alertdiv").css('display','block');
                $("#errormsg").html("Enter Username");
                $("input[name=username]").focus();
            }  
            else if(password ==""){
                 $("#alertdiv").css('display','block');
                $("#errormsg").html("Enter Password");
                $("input[name=password]").focus();
            }
            else{
            	$.LoadingOverlay("show");

		    var data = 
				{
					  username: name,
					  password: password,
					  remember_me:remember_me,
				};  
		   var fd = new FormData();
			   fd.append('username', data.username);
			   fd.append('password', data.password);
			   fd.append('remember_me', data.remember_me);
			   
	        login_url = '<?php echo base_url()?>login/verifylogin';
	
			$.ajax({
					  url: login_url,
					  type: 'POST',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(res) 
						  {
						     console.log(res);
						     var error = res;
							if(error == 1){
							      $.LoadingOverlay("hide");

							    $("#alertdiv").css('display','block');
                                $("#errormsg").html("Invalid UserId or Password!");
                                $("input[name=username]").val();
                                $("input[name=password]").val();
							    
							}
							else{
							     $.LoadingOverlay("hide");
							 swal({
									  title: "Your logged in Successfully!",
									  icon: "success",
									  button: "Ok!",
								  });
								  window.location.reload(true);
							}
						},
			  error: function(err, ex) 
					{
						alert('Unable to Save details! Please try again later.');
						console.log(err.responseText, ex.message);
					}
			   });
		}
         });
        });
	function forgotpwd()
    {
		$("#emailerror").hide();
		$("#ilogin").hide();
		$("#iforgot").show();
    }
	function backlogin()
    {
		$("#emailerror").hide();
		$("#iforgot").hide();
		$("#ilogin").show();
    }
	function forgotsubmit(){
		if(document.getElementById('email').value==""){
			$("#emailerror").show();
			$("#emailerror").html("Please enter the email id");
				document.getElementById('email').focus();
			return false;
		}
		var re=/^[_\.0-9a-z-]+\@([0-9a-z][0-9a-z-]*\.)+([a-z]{2,4})+$/i
		if(!document.getElementById("email").value.match(re)){
			$("#emailerror").show();
			$("#emailerror").html("Please enter the valid email id");
			document.getElementById('email').focus();
			return false;
		}
		else{
			$("#emailerror").hide();
		}
		$("#ilogin").hide();
		$("#iforgot").show();
	 	var email = $("#email").val(); 
        var formData = {email:email};
        $.ajax({ 
        url: '<?PHP echo base_url(); ?>login/forgotpwd', 
        type: 'post', 
        data: formData, 
        success: function(data)
        { 
console.log(data);		
           if(data == 1)
           {
			   	$("#error").show();
			    $("#errorpwd").html("Password sent to your mail-id");
           }
           else
           {
   			   	$("#error").show();
			    $("#errorpwd").html("Please resgister.We dont have your record.");
           }
		   	setTimeout(function(){
				document.getElementById("forgotform").reset();
				$("#error").hide();
			}, 4000);
       
        }
		})
		return false;	
		 
	} 
        </script>
    </body>

</html>