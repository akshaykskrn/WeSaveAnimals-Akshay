<?php
/*this includes the backend for the particular frontend page */
include("db.php");
/*above code involves the connection of database */

$name=$_GET['name'];
$email=$_GET['email'];
$subject=$_GET['subject'];
$message=$_GET['message'];
/*above involves the data from the frontend */

/*if password matches */
if($email)
{
    header("location:final.html");
    $sql="insert into form(name,email,subject,message) values('".$name."','".$email."','".$subject."','".$message."')";
    /*connecting the database and query */
    $query=mysqli_query($connection,$sql);

    if(!$query)
    {
        header("location:final.html");
    }
}
else{
    echo("enter your email");
    header("location:contact.html");
   
}

?>