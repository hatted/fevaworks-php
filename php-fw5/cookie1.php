<?php
//cookie1.php
setcookie("username", "id", time()+36000);
echo $_COOKIE["username"];
?>