<?php

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
if($link === false){
    die(" Not connected. \n" . mysqli_connect_error());
}
 


$ques7 = "SELECT S.sid
FROM Suppliers S WHERE NOT EXISTS (( SELECT S.pid

FROM Parts P WHERE P.color = red)

EXCEPT( SELECT C.pid
FROM Catalog C
WHERE C.sid = S.sid ))";


$result = mysqli_query($link, $ques7);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  echo "id: " .$row["sid"] ." Name: " .$row["sname"] ." Password: ". $row["address"] ." \n";
 }
}

else{
 echo " Results Not found";
}

mysqli_close($link);

