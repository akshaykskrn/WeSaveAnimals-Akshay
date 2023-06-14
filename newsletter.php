<?php
/*this includes the backend for the particular frontend page */
include("db.php");
/*above code involves the connection of database */

$email=$_GET['newsletter'];
/*above involves the data from the frontend */

/*if password matches */
if($email)
{
    header("location:index.html");
    $sql="insert into newsletter(newsletter) values('".$email."')";
    /*connecting the database and query */
    $query=mysqli_query($connection,$sql);

    if(!$query)
    {
        header("location:index.html");
    }
}
else{
    echo("enter your email");
    header("location:index.html");
   
}

?>