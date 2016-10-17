<?php
# FileName="Connections/db.php"
# Type="MYSQL"
# HTTP="true"
$hostname_db = "localhost";
$database_db = "test";
$username_db = "root";
$password_db = "";
$db = mysql_pconnect($hostname_db, $username_db, $password_db) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
