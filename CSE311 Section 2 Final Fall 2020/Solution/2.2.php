<?php

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
if($link === false){
    die(" Not connected. \n" . mysqli_connect_error());
}
 


$ques6 = "SELECT P.PNAME
FROM Parts P, Catalog C, Suppliers S
WHERE P.pid = C.pid AND C.sid = S.sid
AND S.sname = Acme Widget Suppliers

AND NOT EXISTS ( SELECT (*) 
FROM Catalog C1, Supppliers S1 WHERE P.pid = C1.pid AND C1.sid = S1.sid AND
S1.sname <> Acme Widget Suppliers
 ";


$result = mysqli_query($link, $ques6);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  echo  "".$row["Pname"] ."\n";
 }
}

else{
 echo " Results Not found";
}

mysqli_close($link);