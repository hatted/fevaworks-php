<?php
//cookieReset1.php
setcookie("username", "", time()-10);
echo $_COOKIE["username"];
?>