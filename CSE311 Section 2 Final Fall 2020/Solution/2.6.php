<?php

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
if($link === false){
    die(" Not connected. \n" . mysqli_connect_error());
}
 


$ques10 = "SELECT P.pid, S.sname

FROM Parts P, Suppliers S, Catalog C

WHERE C.pid = P.pid AND C.sid = S.sid AND

C.cost = (SELECT MAX(C1.cost) FROM Catalog C1

WHERE C1.pid = P.pid)";


$result = mysqli_query($link, $ques10);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  echo "" .$row["sid"] ."\n";
 }
}

else{
 echo " Results Not found";
}

mysqli_close($link);