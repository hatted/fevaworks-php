<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>Thank you for registering.</p>
<table width="800" border="0">
  <tr>
    <td width="120">Username:</td>
    <td width="670"><?php 
	
	$check=$_POST['username'];
	if ($check=="") {
		echo "<font color=red>Please go back and fill in the information.</font>";
	} else {
		echo $_POST['username'];
	}

	 ?></td>
  </tr>
  <tr>
    <td width="120">Password:</td>
    <td><?php 
	
	$check=$_POST['password'];
	if ($check=="") {
		echo "Please go back and fill in the information.";
	} elseif ($_POST['password']==$_POST['confirm']) {
		echo "*****";
	}else{
		echo "Please go back and enter your password again.";
	}
		
	?></td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="120">First Name:</td>
    <td><?php 
	
	$check=$_POST['firstname'];
	if ($check=="") {
		echo "Please go back and fill in the information.";
	} else {
		echo $_POST['firstname'];
	}

	
	
	?></td>
  </tr>
  <tr>
    <td width="120">Last Name:</td>
    <td><?php 
	
	$check=$_POST['lastname'];
	if ($check=="") {
		echo "Please go back and fill in the information.";
	} else {
		echo $_POST['lastname'];
	}

	
	?></td>
  </tr>
  <tr>
    <td width="120">Sex:</td>
    <td><p>
      <label></label><?php 
	  
	$check=$_POST['sex'];
	if ($check=="") {
		echo "Please go back and enter the information.";
	} else {
		echo $_POST['sex'];
	}

	  
	   ?></p></td>
  </tr>
  <tr>
    <td width="120" valign="top">Birthday:</td>
    <td><?php 
		
	//echo $_POST['year']."年".$_POST['month']."月".$_POST['day']."日";
	
	if ($_POST['year']=="") {
		echo "Please go back and enter the year. <br />";
	} else {
		echo $_POST['year']."年 ";
	}
	
	if ($_POST['month']=="") {
		echo "Please go back and enter the month. <br />";
	} else {
		echo $_POST['month']."月 ";
	}

	if ($_POST['day']=="") {
		echo "Please go back and enter the day. ";
	} else {
		echo $_POST['day']."日 ";
	}
	
	
	
	 ?></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><?php 
	
	$check=$_POST['email'];
	if ($check=="") {
		echo "Please go back and fill in the information.";
	} else {
		echo $_POST['email'];
	}
	
	?></td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p></p>
</body>
</html>
