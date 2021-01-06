<?php

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
if($link === false){
    die(" Not connected. \n" . mysqli_connect_error());
}
 


$ques5 = "SELECT S.sname
FROM Suppliers S
WHERE NOT EXISTS (( SELECT P.pid
FROM Parts P ) EXCEPT
( SELECT C.pid FROM Catalog C
WHERE C.sid = S.sid ))";


$result = mysqli_query($link, $ques5);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  echo "" .$row["sname"] . "\n";
 }
}

else{
 echo " Results Not found";
}

mysqli_close($link);