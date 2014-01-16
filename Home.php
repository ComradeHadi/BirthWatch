<?php
$db_host = 'localhost';
$db_name = 'birthwatch';
$db_Username = 'root';
$db_password = '';

// Connect to the BirthWatch Database
$connection = mysql_connect($db_host,$db_Username,$db_password);


$selected = mysql_select_db($db_name);



?>