<?php

$link = mysqli_connect("localhost", "root", "", "homework_1");
 
if($link == false){
    die("ERROR:  Not connected. \n" . mysqli_connect_error());
}
$ques4 = "SELECT job_id, COUNT(*)
FROM employees
GROUP BY job_id;";

$result = mysqli_query($link, $ques4);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_assoc($result)){
       echo " "  .$row["job_id"] ." \n";
    }
   }
   
   else{
    echo "0 results found";
   }
   
   mysqli_close($link);
   
   ?>