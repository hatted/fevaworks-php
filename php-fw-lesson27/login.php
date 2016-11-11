<?php
$con = mysqli_connect("localhost","root","password","test");
$result=mysqli_query($con,"SELECT password FROM member where username = '".$_POST['username']."'");
$row=mysqli_fetch_assoc($result);
$dbpassword= $row['password'];

if (sha1($_POST['password'])==$dbpassword){
	echo "welcome";
	exit;
}else{
	echo "wrong password";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <p>username:
    <input type="text" name="username" id="username" />
  </p>
  <p>password:
    <input type="text" name="password" id="password" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
    <input type="reset" name="button2" id="button2" value="Reset" />
  </p>
</form>
</body>
</html>