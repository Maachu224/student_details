<?php
header("Access-Control-Allow-Origin: *");

$conn = new mysqli("localhost", "root", "root", "magesh");

$result = $conn->query("SELECT * FROM students");

$smile = "";
while($call = $result->fetch_array(MYSQLI_ASSOC)) 
{
  if ($smile!= "") 
 {
  $smile .= ",";
 }
  $smile .= '{"rollno":"'. $call["rollno"].'",' ;	
  $smile .= '"name":"'. $call["name"].'",' ;
  $smile .= '"degree":"'. $call["degree"].'",' ;
  $smile .= '"department":"'. $call["department"].'",' ;
  $smile .= '"fees":"'. $call["fees"].'"}' ;

}

$smile ='{"records":['.$smile.']}' ;

$conn->close();

echo($smile);
?>