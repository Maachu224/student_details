<?php

$con=mysqli_connect("localhost","root","root","magesh");
$d=json_decode(file_get_contents("php://input"));

$rollno=$d->rollno;

$query = "delete from students where rollno='$rollno'";    
 if(mysqli_query($con, $query))  
{
echo "deleted";
}
else
{
echo "error";
}
?>