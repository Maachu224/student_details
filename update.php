<?php

$con=mysqli_connect("localhost","root","root","magesh");
$d=json_decode(file_get_contents("php://input"));


$rollno=$d->rollno;
$name=$d->name;
$degree=$d->degree;
$department=$d->department;
$fees=$->fees;

$query = "update students set name=$name,degree=$degree,department=$department,fees=$fees where rollno='$rollno'";    
 
if(mysqli_query($con, $query))  
{
echo "updated";
}
else
{
echo "error";
}
?>