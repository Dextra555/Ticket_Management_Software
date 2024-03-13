<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body style="background:#EDEEF2;margin:0;padding:0;color:#333; font-family:Arial; font-size:13px;line-height:1.5">
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#fff;border:solid 1px #eee;max-width:100%">
	<tr>
    	<td style="padding:30px"><img src="<?PHP echo base_url(); ?>assets/pages/img/login/login-invert.png" align="left" alt="logo"></td>
    </tr>
  <tr>
    <td height="2" align="left" valign="top" bgcolor="#eb6b09"></td>
  </tr>  
  <tr>
    <td height="80" align="left" valign="middle" style="padding:30px"><p style="font-weight:bold;">Dear <?php echo $name; ?>,</p>
     
      <p>
        <span>
        
       Your ticket status has been updated.<br/>

      </span>
	   <table width="600" border="0" cellpadding="1" cellspacing="1">
        <tr>
          <td height="35" colspan="3"><span>Your ticket details are given below:</span></td>
        </tr>
        <tr>
          <td width="150" height="30">Name</td>
          <td width="30"><strong>:</strong></td>
          <td><?php echo $name; ?></td>
        </tr>
        <tr>
          <td height="30">Company Name</td>
          <td><strong>:</strong></td>
          <td><?php echo $comapany_name; ?></td>
        </tr>
		<tr>
          <td height="30">Contact Person</td>
          <td><strong>:</strong></td>
          <td><?php echo $contact_person; ?></td>
        </tr>
		<tr>
          <td height="30">Mobile No</td>
          <td><strong>:</strong></td>
          <td><?php echo $mobile; ?></td>
        </tr>
		<tr>
          <td height="30">Email Id</td>
          <td><strong>:</strong></td>
          <td><?php echo $email; ?></td>
        </tr>
		<tr>
          <td height="30">Branch</td>
          <td><strong>:</strong></td>
          <td><?php echo $branch; ?></td>
        </tr>
		<tr>
          <td height="30">Address</td>
          <td><strong>:</strong></td>
          <td><?php echo $address; ?></td>
        </tr>
		<tr>
          <td height="30">System/Device</td>
          <td><strong>:</strong></td>
          <td><?php echo $system; ?></td>
        </tr>
		<tr>
          <td height="30">Device Location</td>
          <td><strong>:</strong></td>
          <td><?php echo $device_location; ?></td>
        </tr>
		<tr>
          <td height="30">Subject</td>
          <td><strong>:</strong></td>
          <td><?php echo $subject; ?></td>
        </tr>
		<tr>
          <td height="30">Issue Description</td>
          <td><strong>:</strong></td>
          <td><?php echo $issue_desc; ?></td>
        </tr>
        <tr>
          <td height="30">Status</td>
          <td><strong>:</strong></td>
          <td><?php echo $status; ?></td>
        </tr>
         <tr>
          <td height="30">Assigned Staff Name</td>
          <td><strong>:</strong></td>
          <td><?php echo $staff_name; ?></td>
        </tr>
         <tr>
          <td height="30">Assigned Staff Mobile</td>
          <td><strong>:</strong></td>
          <td><?php echo $staff_mobile; ?></td>
        </tr>
        <tr>
          <td height="30">Request Date</td>
          <td><strong>:</strong></td>
          <td><?php echo $request_date; ?></td>
        </tr>
      </table>
      <?php if(!empty($comments)){ ?>
      	   <table width="600" border="0" cellpadding="1" cellspacing="1">
<tr><td><b>Comment</b></td><td><b>Commented by</b></td><td><b>Last Modified Date</b></td></tr>
<tr>
  <?php foreach($comments as $comm){ 
    $user=$this->db->query("select * from users where user_id=".$comm->comment_by)->row();
  ?>
          <td><?php echo  $comm->comment; ?></td>
          <td><?php echo  $user->name; ?></td>
		   <td><?php echo  $comm->created_at; ?></td>
        </tr>
        <?php } ?>
		</table>
		<?php } ?>
     <p>Best Regards<br />
       https://www.zenerfire.com<br />
       </p>
        </td>
  </tr>
  <tr>
    <td height="2" align="left" valign="top" bgcolor="#eb6b09"></td>
  </tr>
</table>
</body>
</html>