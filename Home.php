<?php
$db_host = 'localhost';
$db_name = 'birthwatch';
$db_Username = 'root';
$db_password = '';

// Connect to the BirthWatch Database
$connection = mysql_connect($db_host,$db_Username,$db_password);

if($connection)
{
    echo 'IT WORKED ';
}

$selected = mysql_select_db($db_name);

if($selected){
 echo 'SELECTION PAI';
}

else {
	echo "IT NO WORK";
}


$db_insert_birth = "INSERT INTO birth VALUES (3, 'hadison ', 'mukasila', 'mukailsa', 'mary', 'bimbilla', 2012-02-07, 'Korle-Bu', 'Accra', 'Accra')";
  
   mysql_query($db_insert_birth);
    $num_rows = mysql_affected_rows();

    if($num_rows > 0){
 echo 'INSERTED ';
    }
 else{
 	echo " It FLOPPED";
 }

?>