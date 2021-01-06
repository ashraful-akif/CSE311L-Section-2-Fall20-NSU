<?php

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
if($link === false){
    die(" Not connected. \n" . mysqli_connect_error());
}
 


$ques1 = "";


$result = mysqli_query($link, $ques1);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  echo "id: " .$row["sid"] ." Name: " .$row["sname"] ." Password: ". $row["address"] ." \n";
 }
}

else{
 echo " Results Not found";
}

mysqli_close($link);



?>