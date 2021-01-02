<?php

$link = mysqli_connect("localhost", "root", "", "homework_1");
 
if($link == false){
    die("ERROR:  Not connected. \n" . mysqli_connect_error());
}
 

$ques1 = "SELECT First_Name,min(salary),max(salary),sum(salary),avg(salary) from employees group by Job_Id";

$result = mysqli_query($link, $ques1);


if(mysqli_num_rows($result) > 0){
    
 while($row = mysqli_fetch_assoc($result)){
    echo " "  .$row["First_Name"] ."   " .$row["min(salary)"] ."   "  .$row["max(salary)"]  ."  " .$row["sum(salary)"] ."   "  .$row["avg(salary)"]  ." \n";
 }
}

else{
 echo "0 results found";
}

mysqli_close($link);

?>