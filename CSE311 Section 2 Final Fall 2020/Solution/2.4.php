<?php

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
if($link === false){
    die(" Not connected. \n" . mysqli_connect_error());
}
 


$ques8 = "SELECT DISTINCT C.sid
FROM Catalog C, Parts P
WHERE C.pid = P.pid AND P.color = 
red INTERSECT SELECT (DISTINCT C1.sid
FROM Catalog C1, Parts P1
WHERE (C1.pid = P1.pid AND P1.color = 
green)";


$result = mysqli_query($link, $ques8);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  echo "id: " .$row["sid"] ." Name: " .$row["sname"] ." Password: ". $row["address"] ." \n";
 }
}

else{
 echo " Results Not found";
}

mysqli_close($link);