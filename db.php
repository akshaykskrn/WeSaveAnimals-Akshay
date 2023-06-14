<?php
/*connecting the database server and getting the details*/ 
$servername='localhost';
$uname='root';
$pass='';
$database='wsa';

$connection=mysqli_connect($servername,$uname,$pass,$database);

if($connection)
{
    echo("connection success");
}
else{
    echo("connection failed");
}


?>
