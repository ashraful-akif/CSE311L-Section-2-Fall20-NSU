<?php

$link = mysqli_connect("localhost", "root", "", "homework_1");
 
if($link == false){
    die("ERROR:  Not connected. \n" . mysqli_connect_error());
}
$ques2 = "SELECT MANAGER_id, min(salary) from employee where MANAGER_id is not null group by MANAGER_id having min(sal) > 6000order by min(sal) desc";

$result = mysqli_query($link, $ques2);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_assoc($result)){
       echo "    " .$row["min(salary)"] . " \n";
    }
   }
   
   else{
    echo "0 results found";
   }
   
   mysqli_close($link);
   
   ?>