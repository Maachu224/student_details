<?php

$con=mysqli_connect("localhost","root","root","magesh");
$d=json_decode(file_get_contents("php://input"));

$rollno=$d->rollno;
$name=$d->name;
$degree=$d->degree;
$department=$d->department;
$fees=$d->fees;

$query="insert into students(rollno,name,degree,department,fees) values ('$rollno','$name','$degree','$department',$fees)";

if(mysqli_query($con,$query))
{
echo "inserted";
}
else
{
echo "error";
}
?>